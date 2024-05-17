<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class ShowTimeController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('./dashboard');
        }else{
            return Redirect::to('./admin')->send();
        }
    }
    public function add_showtime(){
        $this ->AuthLogin();
        $movie_showtime = DB::table('tbl_movie')->orderby('movie_id','desc')->get();
        $room_showtime = DB::table('tbl_room')->orderby('room_id','desc')->get();

        return view('admin.add_showtime')->with('movie_showtime',$movie_showtime)->with('room_showtime',$room_showtime);
    }
    public function list_showtime(){
        $this ->AuthLogin();
        $all_showtime = DB::table('tbl_showtime')
        ->join('tbl_movie','tbl_movie.movie_id','=','tbl_showtime.movie_id')
        ->join('tbl_room','tbl_room.room_id','=','tbl_showtime.room_id')
       ->orderby('tbl_showtime.showtime_date','desc') ->orderby('tbl_showtime.showtime_timeslot','desc')  ->get();
        $manage_showtime = view('admin.list_showtime')->with('all_showtime',$all_showtime);
        return view('admin_layout')->with('admin.list_showtime',$manage_showtime);
    }
    public function save_showtime_list(Request $request)
    {
        $this->AuthLogin();

        // Validate input data
        $request->validate([
            'showtime_movie' => 'required',
            'showtime_room' => 'required',
            'showtime_date' => 'required|date',
            'showtime_timeslot' => 'required|date_format:H:i',
            'showtime_endtime' => 'required|date_format:H:i|after:showtime_timeslot'
        ]);

        $data = [
            'movie_id' => $request->showtime_movie,
            'room_id' => $request->showtime_room,
            'showtime_date' => $request->showtime_date,
            'showtime_timeslot' => $request->showtime_timeslot,
            'showtime_endtime' => $request->showtime_endtime
        ];

        // Check for time conflicts
        $conflicting_showtime = DB::table('tbl_showtime')
            ->where('room_id', $data['room_id'])
            ->where('showtime_date', $data['showtime_date'])
            ->where(function ($query) use ($data) {
                $query->whereBetween('showtime_timeslot', [$data['showtime_timeslot'], $data['showtime_endtime']])
                      ->orWhereBetween('showtime_endtime', [$data['showtime_timeslot'], $data['showtime_endtime']])
                      ->orWhere(function ($query) use ($data) {
                          $query->where('showtime_timeslot', '<=', $data['showtime_timeslot'])
                                ->where('showtime_endtime', '>=', $data['showtime_endtime']);
                      });
            })
            ->exists();

        if ($conflicting_showtime) {
            return redirect()->back()->with('message_showtime', 'The selected time slot conflicts with an existing showtime.');
        }

        // Save the new showtime
        DB::table('tbl_showtime')->insert($data);
        Session::flash('message_showtime', 'Added successfully');
        return Redirect::to('add-showtime');
    }


    public function edit_showtime($showtime_id){
        $this ->AuthLogin();
        $movie_showtime = DB::table('tbl_movie')->orderby('movie_id','desc')->get();
        $room_showtime = DB::table('tbl_room')->orderby('room_id','desc')->get();
        $edit_showtime = DB::table('tbl_showtime') -> where('showtime_id',$showtime_id)->get();
        return view('admin.edit_showtime')->with('edit_showtime', $edit_showtime)->with('movie_showtime', $movie_showtime)->with('room_showtime', $room_showtime);
    }
    public function update_showtime(Request $request, $showtime_id){
        $this ->AuthLogin();
        $data = array();
        $data['movie_id'] = $request -> showtime_movie;
        $data['room_id'] = $request -> showtime_room;
        $data['showtime_date'] = $request -> showtime_date;
        $data['showtime_timeslot'] = $request -> showtime_timeslot;
        $data['showtime_endtime'] = $request -> showtime_endtime;

        DB::table('tbl_showtime')->where('showtime_id', $showtime_id)->update($data);
        return Redirect::to('list-showtime');
    }
    public function delete_showtime($showtime_id){
        $this ->AuthLogin();
        DB::table('tbl_showtime') ->  where('showtime_id',$showtime_id) ->delete();
        Session::put('message_showtime','Xóa danh mục sản phẩm thành công');
        return Redirect::to('list-showtime');
    }

}

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
        $movie_showtime = DB::table('tbl_movie')
        ->where('movie_datestart', '>', DB::raw('NOW() - INTERVAL 2 DAY'))
        ->orderby('movie_id', 'desc')
        ->get();
        $room_showtime = DB::table('tbl_room')->orderby('room_id','desc')->get();
        $seat_room = DB::table('tbl_room')->orderby('room_id', 'asc')->get();
        $seat_showtime = DB::table('tbl_showtime')->orderby('showtime_id', 'desc')->get();
        $seat_join_showtime = DB::table('tbl_showtime')
            ->join('tbl_room', 'tbl_room.room_id', '=', 'tbl_showtime.room_id')
            ->orderby('tbl_showtime.showtime_id', 'desc')->get();

        $disabled_showtimes = DB::table('tbl_seat')->pluck('showtime_id')->toArray();

        return view('admin.add_showtime')->with('movie_showtime',$movie_showtime)->with('room_showtime',$room_showtime)
        ->with('seat_room', $seat_room)
            ->with('seat_showtime', $seat_showtime)
            ->with('seat_join_showtime', $seat_join_showtime)
            ->with('disabled_showtimes', $disabled_showtimes);
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
        // $request->validate([
        //     'showtime_movie' => 'required',
        //     'showtime_room' => 'required',
        //     'showtime_date' => 'required|date',
        //     'showtime_timeslot' => 'required|date_format:H:i',
        //     'showtime_endtime' => 'required|date_format:H:i|after:showtime_timeslot'
        // ]);
        $data = [
            'movie_id' => $request->showtime_movie,
            'room_id' => $request->showtime_room,
            'showtime_date' => $request->showtime_date,
            'showtime_timeslot' => $request->showtime_timeslot,
            'showtime_endtime' => $request->showtime_endtime
        ];

        // Check for time conflicts
        // $conflicting_showtime = DB::table('tbl_showtime')
        //     ->where('room_id', $data['room_id'])
        //     ->where('showtime_date', $data['showtime_date'])
        //     ->where(function ($query) use ($data) {
        //         $query->whereBetween('showtime_timeslot', [$data['showtime_timeslot'], $data['showtime_endtime']])
        //               ->orWhereBetween('showtime_endtime', [$data['showtime_timeslot'], $data['showtime_endtime']])
        //               ->orWhere(function ($query) use ($data) {
        //                   $query->where('showtime_timeslot', '<=', $data['showtime_timeslot'])
        //                         ->where('showtime_endtime', '>=', $data['showtime_endtime']);
        //               });
        //     })
        //     ->exists();

        // if ($conflicting_showtime) {
        //     return redirect()->back()->with('message_showtime', 'The selected time slot conflicts with an existing showtime.');
        // }

        // Save the new showtime
        $showtime__id = DB::table('tbl_showtime')->insertGetId($data);

        $seatNames = explode("\n", $request->input('seat_names'));
        $roomId = $request->showtime_room;
        $showtimeId = $showtime__id ;
        $seatStatus = $request->input('seat_status');
        $data = [];
        foreach ($seatNames as $seatName) {
            $seatType = 'norm'; // Mặc định là 'norm'
            if (in_array(trim($seatName), ['D7', 'D8', 'D9', 'D10','D11', 'D12', 'D13', 'D14','D15', 'D16', 'D17',
             'E8', 'E9', 'E10','E11', 'E12', 'E13', 'E14','E15', 'E16', 'E17', 'E18',
             'F8', 'F9', 'F10','F11', 'F12', 'F13', 'F14','F15', 'F16', 'F17', 'F18',
             'G8', 'G9', 'G10','G11', 'G12', 'G13', 'G14','G15', 'G16', 'G17', 'G18',
             'H8', 'H9', 'H10','H11', 'H12', 'H13', 'H14','H15', 'H16', 'H17', 'H18'])) {
                $seatType = 'vip';
            }
            if (in_array(trim($seatName), ['L1', 'L2', 'L3', 'L4','L5', 'L6', 'L7', 'L8','L9'])) {
                $seatType = 'double';
            }
            $data[] = [
                'room_id' => $roomId,
                'showtime_id' => $showtime__id,
                'seat_name' => trim($seatName),
                'seat_type' => $seatType,
                'seat_status' => $seatStatus,
            ];
        }

        DB::table('tbl_seat')->insert($data);

        // Session::flash('message_showtime', 'Added successfully');
        return Redirect::to('add-showtime');
    }


    public function edit_showtime($showtime_id){
        $this ->AuthLogin();
        $movie_showtime = DB::table('tbl_movie')
        ->where('movie_datestart', '>', DB::raw('NOW() - INTERVAL 2 DAY'))
        ->orderby('movie_id', 'desc')
        ->get();
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

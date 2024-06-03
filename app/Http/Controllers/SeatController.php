<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class SeatController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('./dashboard');
        }else{
            return Redirect::to('./admin')->send();
        }
    }
    public function add_seat() {
        $this->AuthLogin();
        $seat_room = DB::table('tbl_room')->orderby('room_id', 'asc')->get();
        $seat_showtime = DB::table('tbl_showtime')->orderby('showtime_id', 'desc')->get();
        $seat_join_showtime = DB::table('tbl_showtime')
            ->join('tbl_room', 'tbl_room.room_id', '=', 'tbl_showtime.room_id')
            ->orderby('tbl_showtime.showtime_id', 'desc')->get();

        $disabled_showtimes = DB::table('tbl_seat')->pluck('showtime_id')->toArray();

        return view('admin.add_seat')->with('seat_room', $seat_room)
            ->with('seat_showtime', $seat_showtime)
            ->with('seat_join_showtime', $seat_join_showtime)
            ->with('disabled_showtimes', $disabled_showtimes);
    }
    public function list_seat(){
        $this ->AuthLogin();
        $all_seat = DB::table('tbl_seat')
        ->join('tbl_showtime','tbl_showtime.showtime_id','=','tbl_seat.showtime_id')
        ->join('tbl_room','tbl_room.room_id','=','tbl_seat.room_id')
       ->orderby('tbl_showtime.showtime_date','desc') ->orderby('tbl_showtime.showtime_timeslot','desc')->orderby('tbl_seat.seat_id','asc')  ->get();
        $manage_seat = view('admin.list_seat')->with('all_seat',$all_seat);
        return view('admin_layout')->with('admin.list_seat',$manage_seat);
    }
    public function save_seat_list(Request $request) {
        $this->AuthLogin();

        $seatNames = explode("\n", $request->input('seat_names'));
        $roomId = $request->input('seat_room');
        $showtimeId = $request->input('seat_showtime');
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
                'showtime_id' => $showtimeId,
                'seat_name' => trim($seatName),
                'seat_type' => $seatType,
                'seat_status' => $seatStatus,
            ];
        }

        DB::table('tbl_seat')->insert($data);

        return Redirect::to('add-seat');
    }


    public function delete_seat($seat_id){
        $this ->AuthLogin();
        DB::table('tbl_seat') ->  where('seat_id',$seat_id) ->delete();
        return Redirect::to('list-seat');
    }
}

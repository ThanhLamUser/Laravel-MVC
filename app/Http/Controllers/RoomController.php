<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class RoomController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('./dashboard');
        }else{
            return Redirect::to('./admin')->send();
        }
    }
    public function add_room(){
        $this ->AuthLogin();
        return view('admin.add_room');
    }
    public function list_room(){
        $this ->AuthLogin();
        $list_room = DB::table('tbl_room')->get();
        return view('admin.list_room')->with('list_room',$list_room);
    }
    public function save_room_list(Request $request){
        $this ->AuthLogin();
        $data = array();
        $data['room_name'] = $request -> room_name;
        $data['room_seats'] = $request -> room_seats;
        $data['room_status'] = $request -> room_status;
        DB::table('tbl_room') -> insert($data);
        return Redirect::to('list-room');
    }
    public function active_room($room_id){
        $this ->AuthLogin();
        DB::table('tbl_room')->where('room_id',$room_id) ->update(['room_status'=> 1]);
        return Redirect::to('list-room');
    }
    public function unactive_room($room_id){
        $this ->AuthLogin();
        DB::table('tbl_room')->where('room_id',$room_id) ->update(['room_status'=>0]);
        return Redirect::to('list-room');
    }
    public function delete_room($room_id){
        $this ->AuthLogin();
        DB::table('tbl_room') ->  where('room_id',$room_id) ->delete();
        Session::put('message_room','Xóa danh mục sản phẩm thành công');
        return Redirect::to('list-room');
    }
}

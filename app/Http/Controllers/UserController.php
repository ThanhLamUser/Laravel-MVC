<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class UserController extends Controller
{
    public function AuthLogin(){
        $user_id = Session::get('user_id');
        if($user_id){
            return Redirect::to('./detail');
        }else{
            return Redirect::to('./login')->send();
        }
    }
    public function save_user(Request $request){
        $data = array();
        $data['user_name'] = $request -> user_name;
        $data['user_phone'] = $request -> user_phone;
        $data['user_email'] = $request -> user_email;
        $data['user_password'] = md5($request -> user_password);
        $user_id = DB::table('tbl_user') -> insertGetId($data);
        Session::put('user_id',$user_id);
        Session::put('user_name',$request -> user_name);
        return Redirect::to('/homepage');
    }
    public function logout() {
        Session::put('user_id',null);
        Session::put('user_name',null);
        return Redirect::to('/homepage');
    }
    public function login_account(Request $request) {
        $email = $request -> user_email;
        $password = md5($request -> user_password);

        $result = DB::table('tbl_user')->where('user_email',$email)->where('user_password',$password)->first();

        if($result){
            Session::put('user_name',$result->user_name);
            Session::put('user_id',$result->user_id);
            Session::put('message',null);
            return Redirect::to('./homepage');

        }else{
            Session::put('message','Mật khẩu hoặc tài khoản bị sai vui lòng nhập lại !');
            return Redirect::to('./login');
        }
    }
    public function customer(Request $request){
        $this ->AuthLogin();
        $user_id = Session::get('user_id');
        $user = DB::table('tbl_user')->where('user_id',$user_id)->get();
        return view('customer.detail')->with('user',$user);
    }
    public function my_tickets(Request $request){
        $this ->AuthLogin();
        $user_id = Session::get('user_id');
        $user = DB::table('tbl_user')->where('user_id',$user_id)->get();
        return view('customer.my_tickets')->with('user',$user);
    }
}

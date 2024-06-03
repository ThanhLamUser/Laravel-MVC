<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();


class AdminController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('./dashboard');
        }else{
            return Redirect::to('./admin')->send();
        }
    }
    public function index(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('./dashboard');
        }else{
            return view('admin_login');
        }
    }
    public function show_dashboard(){
        $this ->AuthLogin();
        $list_movie = DB::table('tbl_movie')->get();
        $list_movie_count = $list_movie->count();

        $list_user = DB::table('tbl_user')->whereNotNull('user_password')->get();
        $list_user_count = $list_user->count();

        $total_payment = DB::table('tbl_payment')->where('payment_status','Success')->sum('payment_total');

        return view('admin.dashboard')->with('list_movie_count', $list_movie_count)
        ->with('list_user', $list_user)
        ->with('list_user_count', $list_user_count)
        ->with('total_payment', $total_payment);
    }
    public function show_booking(){
        $this ->AuthLogin();
        $list_payment = DB::table('tbl_payment')
        ->join('tbl_booking','tbl_booking.booking_id','=','tbl_payment.booking_id')
        ->join('tbl_user','tbl_user.user_id','=','tbl_booking.user_id')->orderby('tbl_booking.booking_date','desc')->orderby('tbl_booking.booking_id','desc')->get();
        return view('admin.booking')->with('list_payment', $list_payment);
    }
    public function dashboard(Request $request){
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);

        $result = DB::table('tbl_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        if($result){
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_id',$result->admin_id);
            Session::put('message',null);
            return Redirect::to('./dashboard');

        }else{
            Session::put('message','Mật khẩu hoặc tài khoản bị sai vui lòng nhập lại !');
            return Redirect::to('./admin');

        }

    }
    public function logout() {
        $this ->AuthLogin();
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return view('admin_login');
    }
}

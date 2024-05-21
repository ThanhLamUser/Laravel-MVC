<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class MovieController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('./dashboard');
        }else{
            return Redirect::to('./admin')->send();
        }
    }
    public function add_movie(){
        $this ->AuthLogin();
        $movie_showtime = DB::table('tbl_showtime')->orderby('showtime_id','desc')->get();
        $movie_room = DB::table('tbl_room')->orderby('room_id','desc')->get();
        return view('admin.add_movie')->with('movie_showtime',$movie_showtime)->with('movie_room',$movie_room);
    }
    public function list_movie(){
        $this ->AuthLogin();
        $list_movie = DB::table('tbl_movie')->orderby('movie_datestart','desc') -> get();
        return view('admin.list_movie')->with('list_movie', $list_movie);
    }
    public function save_movie_list(Request $request){
        $this ->AuthLogin();
        $data = array();
        $data['movie_name'] = $request -> movie_name;
        $data['movie_img'] = $request -> movie_img;
        $data['movie_category'] = $request -> movie_category;
        $data['movie_time'] = $request -> movie_time;
        $data['movie_datestart'] = $request -> movie_datestart;
        $data['movie_age'] = $request -> movie_age;
        $data['movie_direct'] = $request -> movie_direct;
        $data['movie_actor'] = $request -> movie_actor;
        $data['movie_desc'] = $request -> movie_desc;
        $data['movie_status'] = $request -> movie_status;
        $data['movie_iframe'] = $request -> movie_iframe;
        $get_image = $request->file('movie_img');

        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/upload/movie', $new_image);
            $data['movie_img'] = $new_image;
        } else {
            $data['movie_img'] = '';
        }
        DB::table('tbl_movie')->insert($data);
        Session::put('message_movie','Thêm danh mục sản phẩm thành công');
        return Redirect::to('/list-movie');
    }
    public function active_movie($movie_id){
        $this ->AuthLogin();
        DB::table('tbl_movie')->where('movie_id',$movie_id) ->update(['movie_status'=> 1]);
        return Redirect::to('/list-movie');
    }
    public function unactive_movie($movie_id){
        $this ->AuthLogin();
        DB::table('tbl_movie')->where('movie_id',$movie_id) ->update(['movie_status'=>0]);
        return Redirect::to('/list-movie');
    }
    public function edit_movie($movie_id){
        $this ->AuthLogin();
        $edit_movie = DB::table('tbl_movie') -> where('movie_id',$movie_id)->get();
        return view('admin.edit_movie')->with('edit_movie', $edit_movie);
    }
    // public function update_movie(Request $request,$movie_id){
    //     $data = array();
    //     $data['movie_name'] = $request -> movie_name;
    //     $data['movie_img'] = $request -> movie_img;
    //     $data['movie_category'] = $request -> movie_category;
    //     $data['movie_time'] = $request -> movie_time;
    //     $data['movie_datestart'] = $request -> movie_datestart;
    //     $data['movie_age'] = $request -> movie_age;
    //     $data['movie_direct'] = $request -> movie_direct;
    //     $data['movie_actor'] = $request -> movie_actor;
    //     $data['movie_desc'] = $request -> movie_desc;
    //     $get_image = $request->file('movie_img');

    //     if ($get_image) {
    //         $get_name_image = $get_image->getClientOriginalName();
    //         $name_image = current(explode('.', $get_name_image));
    //         $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
    //         $get_image->move('public/upload/movie', $new_image);
    //         $data['movie_img'] = $new_image;
    //     } else {
    //         $data['movie_img'] = '';
    //     }
    //     DB::table('tbl_movie') ->  where('movie_id',$movie_id) ->update($data);
    //     Session::put('message_movie','Cập nhật danh mục sản phẩm thành công');
    //     return Redirect::to('/list-movie');
    // }
    public function update_movie(Request $request, $movie_id){
        $this ->AuthLogin();
        $data = $request->only(['movie_name', 'movie_category', 'movie_time', 'movie_datestart', 'movie_age', 'movie_direct', 'movie_actor', 'movie_desc','movie_iframe']);

        if ($request->hasFile('movie_img')) {
            $get_image = $request->file('movie_img');
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/upload/movie', $new_image);
            $data['movie_img'] = $new_image;
        }
        else {
            $movie = DB::table('tbl_movie')->where('movie_id', $movie_id)->first();
            $data['movie_img'] = $movie->movie_img;
        }
        DB::table('tbl_movie')->where('movie_id', $movie_id)->update($data);
        Session::put('message_movie', 'Cập nhật danh mục sản phẩm thành công');
        return Redirect::to('/list-movie');
    }

    public function delete_movie($movie_id){
        $this ->AuthLogin();
        DB::table('tbl_movie') ->  where('movie_id',$movie_id) ->delete();
        Session::put('message_movie','Xóa danh mục sản phẩm thành công');
        return Redirect::to('/list-movie');
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class PopcorndrinkController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('./dashboard');
        }else{
            return Redirect::to('./admin')->send();
        }
    }
    public function add_popcorndrink(){
        $this ->AuthLogin();
        return view('admin.add_popcorndrink');
    }
    public function list_popcorndrink(){
        $this ->AuthLogin();
        $list_popcorndrink = DB::table('tbl_popcorndrink')->get();
        return view('admin.list_popcorndrink')->with('list_popcorndrink',$list_popcorndrink);
    }
    public function save_popcorndrink_list(Request $request){
        $this ->AuthLogin();
        $data = array();
        $data['popcorndrink_combo'] = $request -> popcorndrink_combo;
        $data['popcorndrink_img'] = $request -> popcorndrink_img;
        $data['popcorndrink_popcorn'] = $request -> popcorndrink_popcorn;
        $data['popcorndrink_drink'] = $request -> popcorndrink_drink;
        $data['popcorndrink_price'] = $request -> popcorndrink_price;
        $get_image = $request->file('popcorndrink_img');

        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/upload/popcorn', $new_image);
            $data['popcorndrink_img'] = $new_image;
        } else {
            $data['popcorndrink_img'] = '';
        }
        DB::table('tbl_popcorndrink') -> insert($data);
        Session::put('message_popcorndrink','Thêm danh mục sản phẩm thành công');
        return Redirect::to('list-popcorndrink');
    }
    public function delete_popcorndrink($popcorndrink_id){
        $this ->AuthLogin();
        DB::table('tbl_popcorndrink') ->  where('popcorndrink_id',$popcorndrink_id) ->delete();
        Session::put('message_popcorndrink','Xóa danh mục sản phẩm thành công');
        return Redirect::to('list-popcorndrink');
    }
}

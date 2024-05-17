<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class TicketController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('./dashboard');
        }else{
            return Redirect::to('./admin')->send();
        }
    }
    public function add_ticket(){
        $this ->AuthLogin();
        return view('admin.add_ticket');
    }
    public function list_ticket(){
        $this ->AuthLogin();
        $list_ticket = DB::table('tbl_ticket')->get();
        return view('admin.list_ticket')->with('list_ticket',$list_ticket);
    }
    public function save_ticket_list(Request $request){
        $this ->AuthLogin();
        $data = array();
        $data['ticket_id'] = $request -> ticket_id;
        $data['ticket_name'] = $request -> ticket_name;
        $data['ticket_type'] = $request -> ticket_type;
        $data['ticket_price'] = $request -> ticket_price;
        DB::table('tbl_ticket') -> insert($data);
        return Redirect::to('list-ticket');
    }
    public function delete_ticket($ticket_id){
        $this ->AuthLogin();
        DB::table('tbl_ticket') ->  where('ticket_id',$ticket_id) ->delete();
        return Redirect::to('list-ticket');
    }
}

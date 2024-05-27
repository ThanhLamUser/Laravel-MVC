<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();


class HomeController extends Controller

{
    public function index(){
        $movie_showtime = DB::table('tbl_movie')->where('movie_status','1')->orderby('movie_id','desc')->get();
        $room_showtime = DB::table('tbl_room')->where('room_status','1')->orderby('room_id','desc')->get();
        $list_movie = DB::table('tbl_movie')->where('movie_status','1')
        ->where('movie_datestart', '<', DB::raw('DATE_ADD(NOW(), INTERVAL 1 DAY)'))
        ->orderby('movie_id','desc')->limit(5)->get();
        $list_movie_soon = DB::table('tbl_movie')->where('movie_status','1')
        ->where('movie_datestart', '>', DB::raw('DATE_ADD(NOW(), INTERVAL 1 DAY)'))
        ->orderBy('movie_datestart', 'desc')
        ->get();
        return view('pages.home')->with('movie',$movie_showtime)
        ->with('room',$room_showtime)
        ->with('list_movie',$list_movie)
        ->with('list_movie_soon',$list_movie_soon);

    }
    public function now_showing(){
        $list_movie = DB::table('tbl_movie')->where('movie_status','1')
        ->where('movie_datestart', '<', DB::raw('DATE_ADD(NOW(), INTERVAL 1 DAY)'))
        ->orderby('movie_id','desc')->get();
        return view('pages.now_showing')->with('list_movie',$list_movie) ;
    }
    public function buy_ticket(){
        return view('pages.buy_ticket');
    }
    public function coming_soon(){
        $list_movie_soon = DB::table('tbl_movie')->where('movie_status','1')
        ->where('movie_datestart', '>', DB::raw('DATE_ADD(NOW(), INTERVAL 1 DAY)'))
        ->orderBy('movie_datestart', 'desc')
        ->get();
        return view('pages.coming_soon')->with('list_movie_soon',$list_movie_soon);
    }
    public function theater(){
        return view('pages.theater');
    }
    public function checkout(){
        return view('pages.checkout');
    }
    public function contact_us(){
        return view('pages.contact_us');
    }
    public function about_us(){
        return view('pages.about_us');
    }
    public function offer(){
        return view('pages.offer');
    }
    public function login(){
        return view('pages.login');
    }
    public function search(Request $request){
        $keywords = $request -> keywords_submit;

        $search_movie = DB::table('tbl_movie')->where('movie_status','1')->where('movie_name','like','%'.$keywords.'%')->get();
        return view('pages.search')->with('keywords',$keywords)->with('search_movie',$search_movie);
    }
    //End function admin page
    public function buy_ticket_movie($movie_id){

        $movie_showtime = DB::table('tbl_movie')->where('movie_status','1')->orderby('movie_id','desc')->get();
        $movie_showtime_join = DB::table('tbl_showtime')
        ->join('tbl_movie','tbl_movie.movie_id','=','tbl_showtime.movie_id')->where('movie_status','1')->orderby('showtime_date','desc')->limit(1)->get();
        $room_showtime = DB::table('tbl_room')->where('room_status','1')->orderby('room_id','desc')->get();
        $movie_room_showtime = DB::table('tbl_showtime')
        ->join('tbl_movie','tbl_movie.movie_id','=','tbl_showtime.movie_id')
        ->join('tbl_room','tbl_room.room_id','=','tbl_showtime.room_id')->where('tbl_movie.movie_id', $movie_id)
        ->orderby('tbl_movie.movie_id','desc')->orderby('tbl_showtime.showtime_timeslot','asc')->get();
        $movie_popcorndrink = DB::table('tbl_popcorndrink')->orderby('popcorndrink_id','asc')->get();
        $movie_by_id = DB::table('tbl_movie') -> where('movie_id',$movie_id)->get();

        $uniqueDates = DB::table('tbl_showtime')
        ->select('showtime_date')
        ->distinct()
        ->get();
        $seat_room = DB::table('tbl_seat')
        ->join('tbl_room','tbl_room.room_id','=','tbl_seat.room_id')
        ->orderby('tbl_seat.seat_id','asc') ->get();
        $seat_room_showtime = DB::table('tbl_seat')
        ->join('tbl_showtime','tbl_showtime.showtime_id','=','tbl_seat.showtime_id')
        ->join('tbl_room','tbl_room.room_id','=','tbl_seat.room_id')
       ->orderby('tbl_showtime.showtime_date','desc')->orderby('tbl_showtime.showtime_timeslot','desc')->orderby('tbl_seat.seat_id','asc')  ->get();
       $list_ticket = DB::table('tbl_ticket')->get();

       $movie_room_showtime_seat = DB::table('tbl_seat')
       ->join('tbl_showtime','tbl_showtime.showtime_id','=','tbl_seat.showtime_id')
       ->join('tbl_room','tbl_room.room_id','=','tbl_seat.room_id')
       ->join('tbl_movie','tbl_movie.movie_id','=','tbl_showtime.movie_id')
       ->where('tbl_movie.movie_id', $movie_id)
       ->orderby('tbl_showtime.showtime_date','desc')
       ->orderby('tbl_showtime.showtime_timeslot','desc')
       ->orderby('tbl_seat.seat_id','asc')
       ->get();
       $movie_room_showtime_seat = DB::table('tbl_seat')
       ->join('tbl_showtime','tbl_showtime.showtime_id','=','tbl_seat.showtime_id')
       ->join('tbl_room','tbl_room.room_id','=','tbl_seat.room_id')
       ->join('tbl_movie','tbl_movie.movie_id','=','tbl_showtime.movie_id')
       ->where('tbl_movie.movie_id', $movie_id)
       ->orderby('tbl_showtime.showtime_date','desc')
       ->orderby('tbl_showtime.showtime_timeslot','desc')
       ->orderby('tbl_seat.seat_id','asc')
       ->get();
       if($movie_by_id->isEmpty()){
        return view('pages.not_found');
       }
       else{
        return view('pages.ticket.buy_ticket_movie')
        ->with('movie',$movie_showtime)
        ->with('movie_showtime_join',$movie_showtime_join)
        ->with('room',$room_showtime)
        ->with('movie_by_id',$movie_by_id)
        ->with('list_ticket',$list_ticket )
        ->with('movie_popcorndrink',$movie_popcorndrink)
        ->with('seat_room',$seat_room)
        ->with('movie_room_showtime',$movie_room_showtime)
        ->with('seat_room_showtime',$seat_room_showtime)
        ->with('uniqueDates',$uniqueDates)
        ->with('movie_room_showtime_seat',$movie_room_showtime_seat);
    }
    }
    public function movie_detail($movie_id){
        $movie_by_id = DB::table('tbl_movie') -> where('movie_id',$movie_id)->get();
        $list_movie_soon = DB::table('tbl_movie')-> where('movie_id',$movie_id)->where('movie_status','1')
        ->where('movie_datestart', '>', DB::raw('DATE_ADD(NOW(), INTERVAL 1 DAY)'))
        ->orderBy('movie_datestart', 'desc')
        ->get();
        $list_movie_now = DB::table('tbl_movie')-> where('movie_id',$movie_id)->where('movie_status','1')
        ->where('movie_datestart', '<', DB::raw('DATE_ADD(NOW(), INTERVAL 1 DAY)'))
        ->orderBy('movie_datestart', 'desc')
        ->get();
        if($movie_by_id->isEmpty()){
            return view('pages.not_found');
           }
           else{
        return view('pages.movie.movie')->with('list_movie_soon',$list_movie_soon)->with('list_movie_now',$list_movie_now);
           }
    }
}

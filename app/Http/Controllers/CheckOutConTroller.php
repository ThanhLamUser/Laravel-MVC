<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();


class CheckOutConTroller extends Controller
{
    public function save_checkout_list(Request $request){
        $movieid = $request->movie_hidden;

        $ticketQuantities = [];
        foreach ($request->all() as $key => $value) {
            if (strpos($key, 'quantity') !== false) {
                $ticketId = str_replace('quantity', '', $key);
                $ticketQuantities[$ticketId] = $value;
            }
        }

        $popcornQuantities = [];
        foreach ($request->all() as $key => $value) {
            if (strpos($key, 'popcorn_combo_') !== false && $value != 0) {
                $comboId = str_replace('popcorn_combo_', '', $key);
                $popcornQuantities[$comboId] = $value;
            }
        }


        $movie_screen = $request->movie_screen;
        $movie_time = $request->movie_time;

        $movie_seats = $request->movie_seats;
        $movie_seats_array = explode(',', $movie_seats);
        $movie_seats_couple = $request->movie_seats_couple;
        $movie_seats_couple_array = explode(',', $movie_seats_couple);

        $temp_price_calc = $request->temp_price_calc;

        $list_movie = DB::table('tbl_movie')->where('movie_id', $movieid)->get();
        $list_ticket = DB::table('tbl_ticket')->get();
        $time_movie = DB::table('tbl_showtime')->where('showtime_id', $movie_time)->get();
        $screen_movie = DB::table('tbl_room')->where('room_id', $movie_screen)->get();
        $seat_single = DB::table('tbl_seat')->whereIn('seat_id', $movie_seats_array)->get();
        $seat_couple = DB::table('tbl_seat')->whereIn('seat_id', $movie_seats_couple_array)->get();
        return view('pages.checkout')->with('list_movie', $list_movie)
                                     ->with('list_ticket', $list_ticket)
                                     ->with('screen_movie', $screen_movie)
                                     ->with('movie_time', $movie_time)
                                     ->with('time_movie', $time_movie)
                                     ->with('movie_seats', $movie_seats)
                                     ->with('seat_single', $seat_single)
                                     ->with('movie_seats_couple', $movie_seats_couple)
                                     ->with('seat_couple', $seat_couple)
                                     ->with('ticketQuantities', $ticketQuantities)
                                     ->with('popcornQuantities', $popcornQuantities)
                                     ->with('temp_price_calc', $temp_price_calc)
                                     ->with('movie_seats_array', $movie_seats_array)
                                     ->with('movie_seats_couple_array', $movie_seats_couple_array);
    }
}


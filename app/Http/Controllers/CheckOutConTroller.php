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
        $movieid = $request -> movie_hidden;
        $quantity_ticket1 = $request -> quantity1;
        $quantity_ticket2 = $request -> quantity2;
        $quantity_ticket3 = $request -> quantity3;

        $quantity_popcorn1 = $request -> popcorn_combo_1;
        $quantity_popcorn2 = $request -> popcorn_combo_2;
        $quantity_popcorn3 = $request -> popcorn_combo_3;

        $movie_screen = $request -> movie_screen;
        $movie_time = $request -> movie_time;
        $movie_date = $request -> movie_date;
        $movie_seats = $request -> movie_seats;
        $movie_seats_couple = $request -> movie_seats_couple;

        $temp_price_calc = $request -> temp_price_calc;

        $list_movie = DB::table('tbl_movie') ->where('movie_id',$movieid) -> get();
        $list_ticket = DB::table('tbl_ticket') ->get();
        return view('pages.checkout')->with('list_movie', $list_movie)->with('list_ticket', $list_ticket)
        ->with('movie_screen', $movie_screen)
        ->with('movie_time', $movie_time)
        ->with('movie_date', $movie_date)
        ->with('movie_seats', $movie_seats)
        ->with('movie_seats_couple', $movie_seats_couple)
        ->with('quantity_ticket1', $quantity_ticket1)
        ->with('quantity_ticket2', $quantity_ticket2)
        ->with('quantity_ticket3', $quantity_ticket3)
        ->with('quantity_popcorn1', $quantity_popcorn1)
        ->with('quantity_popcorn2', $quantity_popcorn2)
        ->with('quantity_popcorn3', $quantity_popcorn3)
        ->with('quantity_popcorn3', $quantity_popcorn3)
        ->with('temp_price_calc', $temp_price_calc)

        ;

    }
}

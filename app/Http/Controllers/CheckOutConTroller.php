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
        $ticketQuantitiesValue = [];
        foreach ($request->all() as $key => $value) {
            if (strpos($key, 'quantity') !== false && $value!=0) {
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
        $all_seats = array_merge($movie_seats_array, $movie_seats_couple_array);

        $valid_seats = array_filter($all_seats, function($seat_id) {
            return !empty($seat_id) && is_numeric($seat_id);
        });

        $data = array();
        $data['showtime_id'] = $movie_time;
        $data['user_id'] = Session::get('user_id') ?: null;
        $data['booking_status'] = "Pending processing";
        $data['booking_total'] = $request->temp_price_calc;
        $list_booking = DB::table('tbl_booking')->insertGetId($data);
        $list_user = DB::table('tbl_user')->get();
        Session::put('order_id');

        Session::put('booking_id', $list_booking);
        foreach ($valid_seats  as $seat_id) {
            $data_bookingdetail = array();
            $data_bookingdetail['booking_id'] = $list_booking;
            $data_bookingdetail['seat_id'] = $seat_id;

            DB::table('tbl_bookingdetail')->insert($data_bookingdetail);
        }



        return view('pages.checkout') ->with('list_user', $list_user)
                                    ->with('list_movie', $list_movie)
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
    public function save_payment_list(Request $request){
        $list_booking = DB::table('tbl_booking')->get();
        $data = array();
        $data['user_name'] = $request -> user_name;
        $data['user_email'] = $request -> user_email;
        $data['user_phone'] = $request -> user_phone;
        $data['user_isguest'] = $request -> user_isguest;
        $user_id = DB::table('tbl_user')->insertGetId($data);

        $booking_id = Session::get('booking_id');
        // Cập nhật user_id cho bảng tbl_booking
        DB::table('tbl_booking')
            ->where('user_id', null)
            ->where('booking_id', $booking_id)
            ->update(['user_id' => $user_id]);

        return view('pages.payment')->with('list_booking', $list_booking);
    }
}

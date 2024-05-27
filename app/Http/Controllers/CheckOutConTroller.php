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
        $ticketIds = array_keys($ticketQuantities);
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

        $list_popcorndrink = DB::table('tbl_popcorndrink')->whereIn('popcorndrink_id', $popcornQuantities)->get();

        $list_movie = DB::table('tbl_movie')->where('movie_id', $movieid)->get();
        $list_ticket = DB::table('tbl_ticket')->whereIn('ticket_id', $ticketIds)->get();
        $time_movie = DB::table('tbl_showtime')->where('showtime_id', $movie_time)->get();
        $screen_movie = DB::table('tbl_room')->where('room_id', $movie_screen)->get();
        $seat_single = DB::table('tbl_seat')->whereIn('seat_id', $movie_seats_array)->get();
        $seat_couple = DB::table('tbl_seat')->whereIn('seat_id', $movie_seats_couple_array)->get();
        $all_seats = array_merge($movie_seats_array, $movie_seats_couple_array);


        $valid_seats = array_filter($all_seats, function($seat_id) {
            return !empty($seat_id) && is_numeric($seat_id);
        });

        $total_booking_price = 0;

        foreach ($list_ticket as $ticket) {
            $ticketIds = $ticket->ticket_id;
            if (isset($ticketQuantities[$ticketIds])) {
                $total_booking_price += $ticket->ticket_price * $ticketQuantities[$ticketIds];
            }
        }

        $data = array();
        $data['showtime_id'] = $movie_time;
        $data['movie_id'] = $movieid;
        $data['user_id'] = Session::get('user_id') ?: null;
        $data['booking_status'] = "Pending processing";
        $data['booking_total'] = $total_booking_price;
        $list_booking = DB::table('tbl_booking')->insertGetId($data);
        $list_user = DB::table('tbl_user')->get();

        Session::put('booking_id', $list_booking);
        foreach ($valid_seats  as $seat_id) {
            $data_bookingdetail = array();
            $data_bookingdetail['booking_id'] = $list_booking;
            $data_bookingdetail['seat_id'] = $seat_id;

            DB::table('tbl_bookingdetail')->insert($data_bookingdetail);
        }

        if (!empty($popcornQuantities)) {
            $order_data = [
                'booking_id' => $list_booking,
                'order_price' => 0,
                'order_date' => now(),
            ];

            $order_id = DB::table('tbl_order')->insertGetId($order_data);
            Session::put('order_id', $order_id);
            $total_order_price = 0;
            foreach ($popcornQuantities as $combo_id => $quantity) {
                $combo = DB::table('tbl_popcorndrink')->where('popcorndrink_id', $combo_id)->first();

                if ($combo) {
                    $orderdetail_price = $combo->popcorndrink_price * $quantity;
                    $total_order_price += $orderdetail_price;

                    $order_detail_data = [
                        'order_id' => $order_id,
                        'popcorndrink_id' => $combo_id,
                        'orderdetail_quantity' => $quantity,
                        'orderdetail_price' => $orderdetail_price,
                    ];

                    DB::table('tbl_orderdetail')->insert($order_detail_data);
                }
            }


            // Cập nhật tổng giá trị đơn hàng
            DB::table('tbl_order')
                ->where('order_id', $order_id)
                ->update(['order_price' => $total_order_price]);
        }else{
            $total_order_price = 0;
        }

        session::put('list_movie',$list_movie);
        session::put('time_movie',$time_movie);
        session::put('ticketQuantities',$ticketQuantities);
        session::put('screen_movie',$screen_movie);
        session::put('seat_single',$seat_single);
        session::put('seat_couple',$seat_couple);
        session::put('popcornQuantities',$popcornQuantities);
        session::put('temp_price_calc',$temp_price_calc);


        $total_price = $total_booking_price +  $total_order_price;
        Session::put('total_price',$total_price);
        return view('pages.checkout') ->with('list_user', $list_user)
                                    ->with('list_popcorndrink', $list_popcorndrink)
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
        $list_movie = Session::get('list_movie');
        $time_movie = Session::get('time_movie');
        $ticketQuantities = Session::get('ticketQuantities');
        $screen_movie = Session::get('screen_movie');
        $seat_single = Session::get('seat_single');
        $seat_couple = Session::get('seat_couple');
        $popcornQuantities = Session::get('popcornQuantities');
        $temp_price_calc = Session::get('temp_price_calc');

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

        return view('pages.payment')->with('list_booking', $list_booking)
        ->with('list_movie',$list_movie)
        ->with('time_movie',$time_movie)
        ->with('ticketQuantities',$ticketQuantities)
        ->with('screen_movie',$screen_movie)
        ->with('seat_single',$seat_single)
        ->with('seat_couple',$seat_couple)
        ->with('popcornQuantities',$popcornQuantities)
        ->with('temp_price_calc',$temp_price_calc);

    }


    public function ticket(Request $request){
        $list_movie = Session::get('list_movie');
        $bookingId = Session::get('booking_id');
        $time_movie = Session::get('time_movie');
        $screen_movie = Session::get('screen_movie');
        $seat_single = Session::get('seat_single');
        $seat_couple = Session::get('seat_couple');

        $booking = DB::table('tbl_booking')->where('booking_id', $bookingId)->first();

        // $movieDetails = DB::table('tbl_movie')->where('movie_id', $movieid)->get();

        // Lấy thông tin chi tiết vé từ bảng booking_detail
        $bookingDetails = DB::table('tbl_bookingdetail')->where('booking_id', $bookingId)->get();

        $orderId = Session::get('order_id');
        $order = DB::table('tbl_order')->where('order_id', $orderId)->first();

        // Lấy thông tin chi tiết đơn hàng từ bảng order_detail
        $orderDetails = DB::table('tbl_orderdetail')->where('order_id', $orderId)->get();

        return view('pages.paymentsucess', [
            'booking' => $booking,
            'bookingDetails' => $bookingDetails,
            'order' => $order,
            'orderDetails' => $orderDetails,
            'list_movie' =>$list_movie,
            'time_movie' =>$time_movie,
            'screen_movie' => $screen_movie,
            'seat_single' =>$seat_single,
            'seat_couple' =>$seat_couple
        ]);
    }
}

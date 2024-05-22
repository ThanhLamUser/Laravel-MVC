<?php

use Illuminate\Support\Facades\Route;


// Fronted
Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/homepage', 'App\Http\Controllers\HomeController@index');
Route::get('/now-showing', 'App\Http\Controllers\HomeController@now_showing');
Route::get('/coming-soon', 'App\Http\Controllers\HomeController@coming_soon');
Route::get('/theater', 'App\Http\Controllers\HomeController@theater');
// Route::get('/checkout', 'App\Http\Controllers\HomeController@checkout');
Route::get('/offer', 'App\Http\Controllers\HomeController@offer');
Route::get('/contact-us', 'App\Http\Controllers\HomeController@contact_us');
Route::get('/about-us', 'App\Http\Controllers\HomeController@about_us');
Route::get('/login','App\Http\Controllers\HomeController@login');
Route::post('/search','App\Http\Controllers\HomeController@search');


// Fronted detail
Route::get('/buy-ticket/{movie_id}', 'App\Http\Controllers\HomeController@buy_ticket_movie');
Route::get('/movie/{movie_id}', 'App\Http\Controllers\HomeController@movie_detail');


//Checkout
Route::post('/checkout','App\Http\Controllers\CheckOutController@save_checkout_list');


//User
Route::post('/save-user','App\Http\Controllers\UserController@save_user');
Route::get('/logout','App\Http\Controllers\UserController@logout');
Route::post('/login-account','App\Http\Controllers\UserController@login_account');
Route::get('/customer','App\Http\Controllers\UserController@customer');
Route::get('/my-tickets','App\Http\Controllers\UserController@my_tickets');



// Backend
Route::get('/booking', 'App\Http\Controllers\AdminController@show_booking');
Route::get('/admin', 'App\Http\Controllers\AdminController@index');
Route::get('/dashboard','App\Http\Controllers\AdminController@show_dashboard');
Route::get('/logout-admin','App\Http\Controllers\AdminController@logout');
Route::post('/admin-dashboard','App\Http\Controllers\AdminController@dashboard');


//Movies

Route::get('/add-movie','App\Http\Controllers\MovieController@add_movie');
Route::get('/list-movie','App\Http\Controllers\MovieController@list_movie');
Route::get('/edit-movie/{movie_id}','App\Http\Controllers\MovieController@edit_movie');
Route::get('/delete-movie/{movie_id}','App\Http\Controllers\MovieController@delete_movie');

Route::get('/active-movie/{movie_id}','App\Http\Controllers\MovieController@active_movie');
Route::get('/unactive-movie/{movie_id}','App\Http\Controllers\MovieController@unactive_movie');
Route::post('/save-movie-list','App\Http\Controllers\MovieController@save_movie_list');
Route::post('/update-movie/{movie_id}','App\Http\Controllers\MovieController@update_movie');

//Room

Route::get('/add-room','App\Http\Controllers\RoomController@add_room');
Route::get('/list-room','App\Http\Controllers\RoomController@list_room');
Route::get('/delete-room/{room_id}','App\Http\Controllers\RoomController@delete_room');

Route::get('/active-room/{room_id}','App\Http\Controllers\RoomController@active_room');
Route::get('/unactive-room/{room_id}','App\Http\Controllers\RoomController@unactive_room');
Route::post('/save-room-list','App\Http\Controllers\RoomController@save_room_list');


//ShowTime


Route::get('/add-showtime','App\Http\Controllers\ShowTimeController@add_showtime');
Route::get('/list-showtime','App\Http\Controllers\ShowTimeController@list_showtime');
Route::get('/edit-showtime/{showtime_id}','App\Http\Controllers\ShowTimeController@edit_showtime');
Route::get('/delete-showtime/{showtime_id}','App\Http\Controllers\ShowTimeController@delete_showtime');

Route::post('/save-showtime-list','App\Http\Controllers\ShowTimeController@save_showtime_list');
Route::post('/update-showtime/{showtime_id}','App\Http\Controllers\ShowTimeController@update_showtime');

//Popcorn&Drink

Route::get('/add-popcorndrink','App\Http\Controllers\PopcorndrinkController@add_popcorndrink');
Route::get('/list-popcorndrink','App\Http\Controllers\PopcorndrinkController@list_popcorndrink');
Route::get('/delete-popcorndrink/{popcorndrink_id}','App\Http\Controllers\PopcorndrinkController@delete_popcorndrink');
Route::post('/save-popcorndrink-list','App\Http\Controllers\PopcorndrinkController@save_popcorndrink_list');

//Seat

Route::get('/add-seat','App\Http\Controllers\SeatController@add_seat');
Route::get('/list-seat','App\Http\Controllers\SeatController@list_seat');
Route::get('/delete-seat/{seat_id}','App\Http\Controllers\SeatController@delete_seat');
Route::post('/save-seat-list','App\Http\Controllers\SeatController@save_seat_list');

//Ticket

Route::get('/add-ticket','App\Http\Controllers\TicketController@add_ticket');
Route::get('/list-ticket','App\Http\Controllers\TicketController@list_ticket');
Route::get('/delete-ticket/{ticket_id}','App\Http\Controllers\TicketController@delete_ticket');
Route::post('/save-ticket-list','App\Http\Controllers\TicketController@save_ticket_list');

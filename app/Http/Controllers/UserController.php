<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewPasswordMail;
session_start();

class UserController extends Controller
{
    public function AuthLogin(){
        $user_id = Session::get('user_id');
        if($user_id){
            return Redirect::to('./detail');
        }else{
            return Redirect::to('./login')->send();
        }
    }
    public function save_user(Request $request){
        // Validate the incoming request data
        $validated = $request->validate([
            'user_phone' => 'required|numeric',
            'user_email' => 'required|email|unique:tbl_user,user_email',
            'user_password' => 'required|min:6',
            'user_isguest' => 'required|boolean',
            'user_name' => 'required|string|max:255'
        ], [
            'user_phone.required' => 'Số điện thoại là bắt buộc.',
            'user_phone.numeric' => 'Số điện thoại phải là số.',
            'user_email.required' => 'Email là bắt buộc.',
            'user_email.email' => 'Email không hợp lệ.',
            'user_email.unique' => 'Email đã tồn tại.',
            'user_password.required' => 'Mật khẩu là bắt buộc.',
            'user_password.min' => 'Mật khẩu phải có ít nhất 6 ký tự.',
            'user_isguest.required' => 'Trạng thái khách là bắt buộc.',
            'user_isguest.boolean' => 'Trạng thái khách không hợp lệ.',
            'user_name.required' => 'Tên là bắt buộc.',
            'user_name.string' => 'Tên không hợp lệ.',
            'user_name.max' => 'Tên không được vượt quá 255 ký tự.'
        ]);

        // Prepare the data for insertion
        $data = [
            'user_phone' => $request->user_phone,
            'user_email' => $request->user_email,
            'user_password' => Hash::make($request->user_password),
            'user_isguest' => $request->user_isguest,
        ];

        // Insert the data and get the inserted ID
        $user_id = DB::table('tbl_user')->insertGetId($data);

        // Store the user details in the session
        Session::put('user_id', $user_id);
        Session::put('user_name', $request->user_name);

        // Redirect to the homepage
        return Redirect::to('/homepage')->with('success', 'Đăng ký thành công!');
    }
    public function logout() {
        Session::put('user_id',null);
        Session::put('user_name',null);
        return Redirect::to('/homepage');
    }
    public function login_account(Request $request) {
        $email = $request -> user_email;
        $password = md5($request -> user_password);

        $result = DB::table('tbl_user')->where('user_email',$email)->where('user_password',$password)->first();

        if($result){
            Session::put('user_name',$result->user_name);
            Session::put('user_id',$result->user_id);
            Session::put('message',null);
            return Redirect::to('./homepage');

        }else{
            Session::put('message_user','Password or account is incorrect, please re-enter!');
            return Redirect::to('./login');
        }
    }
    public function customer(Request $request){
        $this ->AuthLogin();
        $user_id = Session::get('user_id');
        $user = DB::table('tbl_user')->where('user_id',$user_id)->get();
        return view('customer.detail')->with('user',$user);
    }
    public function updateCustomer(Request $request,$user_id)
    {
        $this ->AuthLogin();
        $data['user_name'] = $request -> user_name;
        $data['user_phone'] = $request -> user_phone;
        $data['user_email'] = $request -> user_email;
        $data['user_password'] = md5($request -> user_password);
        $data['user_isguest'] = 0;
        DB::table('tbl_user')->where('user_id', $user_id)->update($data);
        return Redirect::to('./customer');
    }
    public function my_tickets(Request $request){
        $this ->AuthLogin();
        $user_id = Session::get('user_id');
        $user = DB::table('tbl_user')->where('user_id',$user_id)->get();
        $list_seat = DB::table('tbl_bookingdetail')
        ->join('tbl_booking','tbl_booking.booking_id','=','tbl_bookingdetail.booking_id')
        ->join('tbl_seat','tbl_seat.seat_id','=','tbl_bookingdetail.seat_id')->get();

        $list_payment = DB::table('tbl_payment')
        ->join('tbl_booking','tbl_booking.booking_id','=','tbl_payment.booking_id')
        ->join('tbl_showtime','tbl_showtime.showtime_id','=','tbl_booking.showtime_id')
        ->join('tbl_room','tbl_room.room_id','=','tbl_showtime.room_id')
        ->join('tbl_movie','tbl_booking.movie_id','=','tbl_movie.movie_id')
        ->join('tbl_user','tbl_user.user_id','=','tbl_booking.user_id')->whereNotNull('ticketbooked_id')->where('tbl_user.user_id',$user_id)
        ->where('payment_status','Success')->orderby('tbl_showtime.showtime_date','desc')->orderby('tbl_booking.booking_id','desc')->get();
        return view('customer.my_tickets')->with('user',$user)->with('list_payment', $list_payment)->with('list_seat', $list_seat);
    }
    public function forgot(Request $request){
        $user_id = Session::get('user_id');
        if($user_id){
            return Redirect::to('./customer');
        }else{
            return view('pages.forget_password');
        }
    }
    public function forgot_password(Request $request){
        $newPassword = Str::random(10);

        // Mã hóa mật khẩu mới với MD5
        $md5Password = md5($newPassword);

        // Cập nhật mật khẩu mới vào cơ sở dữ liệu
        $rowsAffected = DB::table('tbl_user')
            ->where('user_email', $request->user_email)
            ->update(['user_password' => $md5Password]);

        // Kiểm tra số hàng bị ảnh hưởng
        if ($rowsAffected === 0) {
            return redirect()->route('forgot')->with('error', 'Email does not exist.');
        }

        // Gửi email với mật khẩu mới
        Mail::to($request->input('user_email'))->send(new NewPasswordMail($newPassword));

        return redirect()->route('forgot')->with('success', 'An email with a new password has been sent to your email address.');
    }
    public function reset(Request $request){
        $user_id = Session::get('user_id');
        if($user_id){
            return view('customer.reset_password', ['user_id' => $user_id]);
        } else {
            return redirect('./login');
        }
    }
    public function changePassword(Request $request)
    {
        $user_id = Session::get('user_id');
        $user = DB::table('tbl_user')->where('user_id', $user_id)->first();

        // Kiểm tra xem mật khẩu hiện tại có đúng không
        if (md5($request->current_password) !== $user->user_password) {
            return redirect()->route('reset')->with('error', 'Current password is incorrect');
        }

        // Kiểm tra xem mật khẩu mới có ít hơn 8 kí tự không
        if (strlen($request->new_password) < 8) {
            return redirect()->route('reset')->with('error', 'New password must be at least 8 characters long');
        }

        // Kiểm tra xem mật khẩu mới và mật khẩu xác nhận có trùng khớp không
        if ($request->new_password !== $request->confirm_password) {
            return redirect()->route('reset')->with('error', 'New password and confirm password do not match');
        }

        // Nếu các điều kiện đều thỏa mãn, tiến hành cập nhật mật khẩu mới
        $newPassword = md5($request->new_password);
        DB::table('tbl_user')->where('user_id', $user_id)->update(['user_password' => $newPassword]);

        return redirect()->route('reset')->with('success', 'Password changed successfully');
    }



}

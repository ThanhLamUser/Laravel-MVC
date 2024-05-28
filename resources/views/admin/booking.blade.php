@extends('admin_layout')
@section('admin_content')
<div class="adm__bookings col l-9 m-4 c-6">
    <h1>BOOKINGS</h1>

    <div class="adm__bookings--container">
        <table>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Total Price</th>
                <th>Date</th>
                <th>Method</th>
                <th>Status</th>
                <th>Details</th>
            </tr>
            @foreach ($list_payment as $key=>$payment)
            <tr>
                <th>{{ $payment->booking_id }}</th>
                <th>{{ $payment->user_name }}</th>
                <th>{{ $payment->payment_total }}</th>
                <th>{{ $payment->booking_date }}</th>
                @if ($payment->payment_method =='domestic_card')
                <th >DOMESTIC CARD</th>
                @else
                <th style="color: palevioletred" >MOMO</th>
                @endif
                @if($payment->payment_status=='Success')
                <th class="completed">COMPLETED</th>
                @else
                <th class="incomplete">INCOMPLETE</th>
                @endif
                <th>
                    {{ $payment->ticketbooked_id }}
                </th>
            </tr>
            @endforeach
        </table>

        <div class="adm__bookings--pagination">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                <path d="M9.4 278.6c-12.5-12.5-12.5-32.8 0-45.3l128-128c9.2-9.2 22.9-11.9 34.9-6.9s19.8 16.6 19.8 29.6l0 256c0 12.9-7.8 24.6-19.8 29.6s-25.7 2.2-34.9-6.9l-128-128z"/>
            </svg>

            <ul class="adm__bookings--pagination---ul">
                <li class="adm__bookings--pagination---li active">
                    <a href="" class="adm__bookings--pagination---a">1</a>
                </li>
                <li class="adm__bookings--pagination---li">
                    <a href="" class="adm__bookings--pagination---a">2</a>
                </li>
                <li class="adm__bookings--pagination---li">
                    <a href="" class="adm__bookings--pagination---a">3</a>
                </li>
                <li class="adm__bookings--pagination---li">
                    <a href="" class="adm__bookings--pagination---a">4</a>
                </li>
            </ul>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                <path d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z"/>
            </svg>
        </div>
    </div>
</div>

@endsection

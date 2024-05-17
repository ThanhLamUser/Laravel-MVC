@extends('admin_layout')
@section('admin_content')

    <div class="adm__all-movies col l-9 m-4 c-6">
        <h1>ALL SEATS</h1>

        <div class="adm__all-movies--container">
            <table>
                <tr>
                    <th>Room</th>
                    <th>Showtime</th>
                    <th>Seat</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Delete</th>
                </tr>
                @foreach ($all_seat as $key => $seat_pro)
                <tr>
                    <?php
                    if($seat_pro->room_id !=0){
                    ?>
                    <th>{{ $seat_pro->room_name}}</th>
                    <th>{{ $seat_pro->showtime_date}}-{{ $seat_pro->showtime_timeslot}}</th>
                    <th>{{ $seat_pro->seat_name }}</th>
                    <th>{{ $seat_pro->seat_type }}</th>
                    <th><span class="seat_status">
                    <?php
                        if($seat_pro->seat_status == 'selected'){
                    ?>
                    <a style="text-decoration:none;color:black;font-size:1.4rem">SELECTED</a>
                    <?php
                        }
                        elseif ($seat_pro->seat_status == 'selecting'){
                     ?>
                    <a style="text-decoration:none;color:red;font-size:1.4rem">SELECTING</a>
                     <?php
                        }
                        else{
                    ?>
                    <a style="text-decoration:none;color:#17992d;font-size:1.4rem"> EMPTY</a>
                    <?php
                        }
                    ?>
                    </span></td>
                    <th>
                        <button onclick="confirmDelete('{{ URL::to('/delete-seat/'.$seat_pro->seat_id) }}')" id="adm__all-seat--del--btn">DELETE</button>
                    </th>
                    <?php
                    }
                    ?>
                </tr>
            @endforeach
            </table>

            <div class="adm__all-movies--pagination">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                    <path d="M9.4 278.6c-12.5-12.5-12.5-32.8 0-45.3l128-128c9.2-9.2 22.9-11.9 34.9-6.9s19.8 16.6 19.8 29.6l0 256c0 12.9-7.8 24.6-19.8 29.6s-25.7 2.2-34.9-6.9l-128-128z"/>
                </svg>

                <ul class="adm__all-movies--pagination---ul">
                    <li class="adm__all-movies--pagination---li active">
                        <a href="" class="adm__all-movies--pagination---a">1</a>
                    </li>
                    <li class="adm__all-movies--pagination---li">
                        <a href="" class="adm__all-movies--pagination---a">2</a>
                    </li>
                    <li class="adm__all-movies--pagination---li">
                        <a href="" class="adm__all-movies--pagination---a">3</a>
                    </li>
                    <li class="adm__all-movies--pagination---li">
                        <a href="" class="adm__all-movies--pagination---a">4</a>
                    </li>
                </ul>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                    <path d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z"/>
                </svg>
            </div>
        </div>
    </div>
@endsection

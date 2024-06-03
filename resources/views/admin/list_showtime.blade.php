@extends('admin_layout')
@section('admin_content')
    <div class="adm__all-movies col l-9 m-4 c-6">
        <h1>ALL SHOWTIME</h1>
        <div class="adm__all-movies--container">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Room</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>End</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach ($all_showtime as $key => $showtime_pro)
                <tr>
                    <th>{{ $showtime_pro->movie_name }}</th>
                    <th>{{ $showtime_pro->room_name }}</th>
                    <th>{{ $showtime_pro->showtime_date }}</th>
                    <th>{{ $showtime_pro->showtime_timeslot }}</th>
                    <th>{{ $showtime_pro->showtime_endtime }}</th>

                    <th>
                        <button onclick="transfer('{{ URL::to('/edit-showtime/'.$showtime_pro->showtime_id) }}')" id="adm__all-showtime--edit--btn" >EDIT</button>
                    </th>
                    <th>
                        @if($showtime_pro->showtime_date < now())
                        <button onclick="confirmDelete('{{ URL::to('/delete-showtime/'.$showtime_pro->showtime_id) }}')" id="adm__all-showtime--del--btn">DELETE</button>
                        @else
                        <button onclick="showAlert()" id="adm__all-showtime--del--btn">DELETE</button>
                        @endif
                    </th>
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

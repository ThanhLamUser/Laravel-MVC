@extends('admin_layout')
@section('admin_content')

    <div class="adm__all-movies col l-9 m-4 c-6">
        <h1>ALL ROOMS</h1>

        <div class="adm__all-movies--container">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Seat</th>
                    <th>Show</th>
                    <th>Delete</th>
                </tr>
                @foreach ($list_room as $key => $room_pro)
                <tr>
                    <?php
                    if($room_pro->room_id !=0){
                    ?>
                    <th>{{ $room_pro->room_name }}</ỵ>
                    <th>{{ $room_pro->room_seats}} people</ỵ>
                    <th><span class="room_status">
                    <?php
                        if($room_pro->room_status == 1){
                    ?>
                    <a href="{{URL::to('/unactive-room/'.$room_pro->room_id)  }}"> <span class="fa fa-solid fa-eye" style ="font-size: 2.5rem;"></span></a>
                    <?php
                        }
                        else{
                    ?>
                    <a href="{{URL::to('/active-room/'.$room_pro->room_id)  }}"> <span class="fa fa-regular fa-eye-slash" style ="font-size: 2.5rem; color:red"></span></a>
                    <?php
                        }
                    ?>
                    </span></td>
                    <th>
                        <button onclick="confirmDelete('{{ URL::to('/delete-room/'.$room_pro->room_id) }}')" id="adm__all-movies--del--btn">DELETE</button>
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

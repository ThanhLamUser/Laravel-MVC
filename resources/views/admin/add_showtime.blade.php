@extends('admin_layout')
@section('admin_content')

<div class="adm__add-movie col l-9 m-4 c-6">
    <h1>ADD SHOWTIME</h1>
    {{-- @if (session('message_showtime'))
        <div class="alert alert-info" id="message-alert">
            {{ session('message_showtime') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    <div class="adm__add-movie--container">
        <div class="adm__add-movie--container---movie---details">
            <h1>SHOWTIME DETAILS</h1>
            <form role="form" id="form1" action="{{ URL::to('/save-showtime-list') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div>
                    <div>
                        <div>
                            <p>Movie</p>
                            <select name="showtime_movie" class="form-control input-sm m-bot15">
                                @foreach($movie_showtime as $key => $movie)
                                @if($movie->movie_status != 0)
                                <option value="{{ $movie->movie_id }}">{{ $movie->movie_name }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div style=" flex-direction: column;">
                            <p>Room</p>
                            <select name="showtime_room" class="form-control input-sm m-bot15">
                                <option value="0">No rooms have been selected</option>
                                @foreach($room_showtime as $key => $room)
                                    @if($room->room_status != 0)
                                        <option value="{{ $room->room_id }}">{{ $room->room_name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div>
                        <div style=" flex-direction: column;">
                            <p>Date</p>
                            <input type="date" id="showtime_date" name="showtime_date">
                        </div>
                        <div id="showtime_add" style=" flex-direction: column;">
                            <p>Time</p>
                            <input type="time" id="showtime_timeslot" name="showtime_timeslot">
                        </div>
                        <div style=" flex-direction: column;">
                            <p>End Time</p>
                            <input type="time" id="showtime_endtime" name="showtime_endtime">
                        </div>
                    </div>
                </div>
                <div class="adm__add-movie--container">
                    <div class="adm__add-movie--container---save---btn">
                        <div>
                            <input type="submit" name="add_showtime_list" id="submit-btn" value="SAVE">
                        </div>
                    </div>
                </div>
             </form>
        </div>
    </div>
</div>

@endsection

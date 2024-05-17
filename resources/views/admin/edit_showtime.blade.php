
@extends('admin_layout')
@section('admin_content')

    <div class="adm__add-movie col l-9 m-4 c-6">
        <h1>ADD SHOWTIME</h1>

        <div class="adm__add-movie--container">
            <div class="adm__add-movie--container---movie---details">
                <h1>SHOWTIME DETAILS</h1>
                @foreach ($edit_showtime as $key => $edit_value)
                <form role="form" id="form1" action="{{ URL::to('/update-showtime/'.$edit_value->showtime_id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div>
                        <div>
                            <div>
                                <p>Movie</p>
                                <select name="showtime_movie" class="form-control input-sm m-bot15">
                                    @foreach($movie_showtime as $key => $movie)
                                    @if($movie->movie_status != 0)
                                    @foreach($edit_showtime as $key => $showtime)
                                    @php
                                    $selectedMovieId = $showtime->movie_id;
                                   @endphp
                                    <option value="{{  $movie->movie_id }}"{{ $movie->movie_id ==  $selectedMovieId? 'selected' : '' }}>{{  $movie->movie_name }}</option>
                                    @endforeach
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div >
                            <div>
                                <p>Room</p>
                                <select name="showtime_room" class="form-control input-sm m-bot15">
                                    <option value="0">No rooms have been selected</option>
                                    @foreach($room_showtime as $key => $room)
                                        @if($room->room_status != 0)
                                         @foreach($edit_showtime as $key => $showtime)
                                         @php
                                         $selectedRoomId = $showtime->room_id;
                                        @endphp
                                            <option value="{{ $room->room_id }}" {{ $room->room_id ==  $selectedRoomId? 'selected' : '' }}>
                                                {{ $room->room_name }}
                                            </option>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </select>
                            </div>


                        </div>
                        <div>
                            <div>
                                <p>Date</p>
                                <input type="date" id="showtime_date" value="{{ $edit_value->showtime_date }}" name="showtime_date"><br><br>
                            </div>
                            <div id="showtime_add">
                                <p >Time</p>
                                <input type="time" id="showtime_timeslot" value="{{ $edit_value->showtime_timeslot }}" name="showtime_timeslot">
                             </div>
                             <div>
                                <p>End Time</p>
                                <input type="time" id="showtime_endtime"value="{{ $edit_value->showtime_endtime }}" name="showtime_endtime" >
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="adm__add-movie--container">
                <div class="adm__add-movie--container---save---btn">
                    <div>
                        <input type="submit" name="edit_showtime_list" id="submit-btn" value="SAVE">
                    </div>
                </div>
            </div>
         </form>
         @endforeach
    </div>
    @endsection

@extends('layout')
@section('content')

<div class="content">
    <div class="grid wide">
        <div class="content-details">
            <div class="cd-path">
                <div class="cd-path--step">
                    <h1>1</h1>
                    <p>CUSTOMER INFO</p>
                </div>
                <div class="cd-path--separator"></div>
                <div class="cd-path--step">
                    <h1>2</h1>
                    <p>PAYMENT</p>
                </div>
                <div class="cd-path--separator"></div>
                <div class="cd-path--step cd-path--step-active">
                    <h1>3</h1>
                    <p>MOVIE TICKET INFO</p>
                </div>
            </div>

            <div class="movie-ticket-info">
                <div class="mti-up">
                    @foreach ($list_movie as $key => $movie)
                    <img src="{{ $movie->movie_poster }}" alt="" class="mti-up--img">
                    @endforeach
                    <div class="mti-up--container">
                        <div class="mti-up--info">
                            <p id="mti-up--name"></p>
                            <p>
                                <svg style="margin-right: 8px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
                                </svg>
                                <span id="mti-up--location">CINOVA Cinema</span>
                                <p> Hàn Thuyên Street, Neighborhood 6, Linh Trung Ward, Thủ Đức District, Ho Chi Minh City
                                </p>
                            </p>
                            <div class="mti-up--information">
                                <div class="mti-up--part">
                                    <p>Date</p>
                                    @foreach ( $time_movie as $key=> $time)
                                    <p id="mti-up--date">{{ $time->showtime_date }}</p>

                                </div>
                                <div class="mti-up--part">
                                    <p>Time</p>
                                    <p id="mti-up--time">{{ $time->showtime_timeslot }}</p>
                                </div>
                                @endforeach
                                <div class="mti-up--part">
                                    <p>Seat(s)</p>
                                    <p id="mti-up--seats">
                                        @foreach ($seat_single as $seat){{ $seat->seat_name }} @endforeach
                                        @foreach ($seat_couple as $seat){{ $seat->seat_name }} @endforeach
                                    </p>
                                </div>
                                <div class="mti-up--part">
                                    <p>Screen</p>
                                    @foreach ( $screen_movie  as $key=>$screen)
                                    <p id="mti-up--screen">{{ $screen->room_name }}</p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mti-down">
                    <div class="mti-down--container">
                        <p>Ticket ID</p>
                        @foreach ($booking as $key=>$ticket)
                        <p>{{ $ticket->ticketbooked_id	}}</p>
                        @endforeach
                        <div>
                            <div class="mti-down--barcode"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

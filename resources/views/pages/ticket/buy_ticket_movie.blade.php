@extends('layout')
@section('content')
    <div class="content">
        <div class="grid wide">
            <div class="poster col l-12 m-12 c-12">
                <div class="row sm-gutter poster-img" id="trailer">
                    <!-- <img src="https://image.tmdb.org/t/p/original/qrkFlypxQ23Ca9iZ1h4uRysIByj.jpg" alt="" class="poster-img">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="poster-play-btn movie-info--play--button">
                                  <path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c7.6-4.2 16.8-4.1 24.3 .5l144 88c7.1 4.4 11.5 12.1 11.5 20.5s-4.4 16.1-11.5 20.5l-144 88c-7.4 4.5-16.7 4.7-24.3 .5s-12.3-12.2-12.3-20.9V168c0-8.7 4.7-16.7 12.3-20.9z"/>
                              </svg> -->

                    <iframe width="100%" height="100%"
                        @foreach ($movie_by_id as $key => $movie_pro)
                         src="{{ $movie_pro->movie_iframe . '&autoplay=1&mute=1' }}" @endforeach
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="grid wide">
            <div class="path">
                <a href="" class="path-home">Home</a>

                >

                <a href="" class="path-coming-soon">Now showing</a>

                >
                @foreach ($movie_by_id as $key => $movie_pro)
                    <a href="" class="path-coming-soon">{{ $movie_pro->movie_name }}</a>
                @endforeach
            </div>

            <div class="movie-info col l-12 m-12 c-12">
                <div class="row2 sm-gutter" style="padding-right: 20px">
                    <div class="movie-info--content col l-2 m-4 c-6">
                        <!-- <div class="col l-2 m-4 c-6"> -->
                        <div class="movie-info--img">
                            @foreach ($movie_by_id as $key => $movie_pro)
                                <img src="{{ URL::to('public/upload/movie/' . $movie_pro->movie_img) }}" alt=""
                                    class="movie-info--bgimg">

                                <img src="{{ URL::to('public/upload/movie/' . $movie_pro->movie_img) }}" alt=""
                                    class="movie-info--fgimg">
                            @endforeach
                        </div>
                        @foreach ($movie_by_id as $key => $movie_pro)
                            <div class="movie-info--name">
                                <h1>{{ $movie_pro->movie_name }}</h1>
                            </div>

                            <div class="movie-info--info">
                                <span>Category: {{ $movie_pro->movie_category }}</span>
                                <span>Length: {{ $movie_pro->movie_time }} minutes</span>
                                <span>Premiere on: {{ $movie_pro->movie_datestart }}</span>
                            </div>

                            <div class="movie-info--desc">
                                <p>{{ $movie_pro->movie_desc }}
                                </p>
                            </div>
                        @endforeach
                        <!-- </div> -->
                    </div>

                    <div class="movie-info--showtime col l-10 m-4 c-6" style="padding-right: 0">
                        <!-- <div class="col l-10 m-4 c-6"> -->
                        <h1 class="movie-info--showtimes">SHOWTIMES</h1>
                        <div class="movie-info--dates">
                            <div class="swiper">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide">
                                        <ul class="movie-info--dates-list" style="margin-left: -60px;">
                                            <li class="movie-info--date" onclick="toggleMIH('yesterday')">
                                                @foreach ($uniqueDates as $key => $showtime)
                                                    <?php
                                                    $dateToday = $showtime->showtime_date;
                                                    $yesterdayTimestamp = strtotime('-1 day');
                                                    $yesterdayDay = date('d', $yesterdayTimestamp);
                                                    $yesterdayMonth = date('m', $yesterdayTimestamp);
                                                    $yesterdayYear = date('Y', $yesterdayTimestamp);
                                                    $Yesterdayis = $yesterdayYear . '-' . $yesterdayMonth . '-' . $yesterdayDay;
                                                    ?>
                                                    @if ($Yesterdayis == $dateToday)
                                                        <div data-value="3" data-value1="<?php
                                                        $yesterdayTimestamp = strtotime('-1 day');
                                                        $yesterdayDay = date('d', $yesterdayTimestamp);
                                                        $yesterdayMonth = date('m', $yesterdayTimestamp);
                                                        $yesterdayYear = date('Y', $yesterdayTimestamp);
                                                        echo $yesterdayDay . '/' . $yesterdayMonth . '/' . $yesterdayYear;
                                                        ?>"
                                                            class="movie-info--option" id="movie-info--option0"
                                                            onclick="toggleFocusMIO(this), sliderChange(this.dataset.value), updateSticky2('movie-info--option0')">
                                                            <?php
                                                            $yesterdayTimestamp = strtotime('-1 day');
                                                            $yesterdayDayOfWeek = date('l', $yesterdayTimestamp);
                                                            $yesterdayDay = date('d', $yesterdayTimestamp);
                                                            $yesterdayMonth = date('F', $yesterdayTimestamp);
                                                            echo '<p>' . $yesterdayDayOfWeek . '</p>';
                                                            echo '<span>' . $yesterdayDay . '</span>';
                                                            echo '<p>' . $yesterdayMonth . '</p>';
                                                            ?>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </li>
                                            <li class="movie-info--date" onclick="toggleMIH('today')">
                                                @foreach ($uniqueDates as $key => $showtime)
                                                    <?php
                                                    $todayTimestamp = strtotime('0 day');
                                                    $todayDay = date('d', $todayTimestamp);
                                                    $todayMonth = date('m', $todayTimestamp);
                                                    $todayYear = date('Y', $todayTimestamp);
                                                    $dateToday = $showtime->showtime_date;
                                                    $Todayis = $todayYear . '-' . $todayMonth . '-' . $todayDay;
                                                    ?>
                                                    @if ($dateToday == $Todayis)
                                                        <div data-value="155" data-value1="<?php
                                                        $todayTimestamp = strtotime('0 day');
                                                        $todayDay = date('d', $todayTimestamp);
                                                        $todayMonth = date('m', $todayTimestamp);
                                                        $todayYear = date('Y', $todayTimestamp);
                                                        echo $todayDay . '/' . $todayMonth . '/' . $todayYear;
                                                        ?>"
                                                            class="movie-info--option movie-info--option-active movie_today_is"
                                                            id="movie-info--option1"
                                                            onclick="toggleFocusMIO(this), sliderChange(this.dataset.value),updateSticky2('movie-info--option1')">
                                                            <?php
                                                            $dayOfWeek = date('l');
                                                            $today = date('d');
                                                            $month = date('F');
                                                            echo '<p >' . $dayOfWeek . '</p>';
                                                            echo '<span>' . $today . '</span>';
                                                            echo '<p >' . $month . '</p>';
                                                            ?>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </li>
                                            <li class="movie-info--date" onclick="toggleMIH('tomorrow')">
                                                @foreach ($uniqueDates as $key => $showtime)
                                                    <?php
                                                    $dateToday = $showtime->showtime_date;
                                                    $nextTimestamp = strtotime('+1 day');
                                                    $nextDay = date('d', $nextTimestamp);
                                                    $nextMonth = date('m', $nextTimestamp);
                                                    $nextYear = date('Y', $nextTimestamp);
                                                    $Nextdayis = $nextYear . '-' . $nextMonth . '-' . $nextDay;
                                                    ?>
                                                    @if ($Nextdayis == $dateToday)
                                                        <div data-value="322" data-value1="<?php
                                                        $nextTimestamp = strtotime('+1 day');
                                                        $nextDay = date('d', $nextTimestamp);
                                                        $nextMonth = date('m', $nextTimestamp);
                                                        $nextYear = date('Y', $nextTimestamp);
                                                        echo $nextDay . '/' . $nextMonth . '/' . $nextYear;
                                                        ?>"
                                                            class="movie-info--option" id="movie-info--option2"
                                                            onclick="toggleFocusMIO(this), sliderChange(this.dataset.value), updateSticky2('movie-info--option2')">
                                                            <?php
                                                            $tomorrowTimestamp = strtotime('+1 day');
                                                            $tomorrowDayOfWeek = date('l', $tomorrowTimestamp);
                                                            $tomorrowDay = date('d', $tomorrowTimestamp);
                                                            $tomorrowMonth = date('F', $tomorrowTimestamp);
                                                            echo '<p>' . $tomorrowDayOfWeek . '</p>';
                                                            echo '<span>' . $tomorrowDay . '</span>';
                                                            echo '<p>' . $tomorrowMonth . '</p>';
                                                            ?>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </li>
                                            <li class="movie-info--date" onclick="toggleMIH('no_schedule')">
                                                <div data-value="493" data-value1="<?php
                                                $nextTimestamp = strtotime('+2 day');
                                                $nextDay = date('d', $nextTimestamp);
                                                $nextMonth = date('m', $nextTimestamp);
                                                $nextYear = date('Y', $nextTimestamp);
                                                echo $nextDay . '/' . $nextMonth . '/' . $nextYear;
                                                ?>"
                                                    class="movie-info--option" id="movie-info--option3"
                                                    onclick="toggleFocusMIO(this), sliderChange(this.dataset.value), updateSticky2('movie-info--option3')">
                                                    <?php
                                                    $nextTimestamp = strtotime('+2 day');
                                                    $nextDayOfWeek = date('l', $nextTimestamp);
                                                    $nextDay = date('d', $nextTimestamp);
                                                    $nextMonth = date('F', $nextTimestamp);
                                                    echo '<p>' . $nextDayOfWeek . '</p>';
                                                    echo '<span>' . $nextDay . '</span>';
                                                    echo '<p>' . $nextMonth . '</p>';
                                                    ?>
                                                </div>
                                            </li>
                                            <li class="movie-info--date" onclick="toggleMIH('no_schedule')">
                                                <div data-value="639" data-value1="<?php
                                                $nextTimestamp = strtotime('+3 day');
                                                $nextDay = date('d', $nextTimestamp);
                                                $nextMonth = date('m', $nextTimestamp);
                                                $nextYear = date('Y', $nextTimestamp);
                                                echo $nextDay . '/' . $nextMonth . '/' . $nextYear;
                                                ?>"
                                                    class="movie-info--option" id="movie-info--option4"
                                                    onclick="toggleFocusMIO(this), sliderChange(this.dataset.value), updateSticky2('movie-info--option4')">
                                                    <?php
                                                    $nextTimestamp = strtotime('+3 day');
                                                    $nextDayOfWeek = date('l', $nextTimestamp);
                                                    $nextDay = date('d', $nextTimestamp);
                                                    $nextMonth = date('F', $nextTimestamp);
                                                    echo '<p>' . $nextDayOfWeek . '</p>';
                                                    echo '<span>' . $nextDay . '</span>';
                                                    echo '<p>' . $nextMonth . '</p>';
                                                    ?>
                                                </div>
                                            </li>
                                            <li class="movie-info--date" onclick="toggleMIH('no_schedule')">
                                                <div data-value="785" data-value1="<?php
                                                $nextTimestamp = strtotime('+4 day');
                                                $nextDay = date('d', $nextTimestamp);
                                                $nextMonth = date('m', $nextTimestamp);
                                                $nextYear = date('Y', $nextTimestamp);
                                                echo $nextDay . '/' . $nextMonth . '/' . $nextYear;
                                                ?>"
                                                    class="movie-info--option" id="movie-info--option5"
                                                    onclick="toggleFocusMIO(this), sliderChange(this.dataset.value), updateSticky2('movie-info--option5')">
                                                    <?php
                                                    $nextTimestamp = strtotime('+4 day');
                                                    $nextDayOfWeek = date('l', $nextTimestamp);
                                                    $nextDay = date('d', $nextTimestamp);
                                                    $nextMonth = date('F', $nextTimestamp);
                                                    echo '<p>' . $nextDayOfWeek . '</p>';
                                                    echo '<span>' . $nextDay . '</span>';
                                                    echo '<p>' . $nextMonth . '</p>';
                                                    ?>
                                                </div>
                                            </li>
                                            <li class="movie-info--date" onclick="toggleMIH('no_schedule')">
                                                <div data-value="933" data-value1="<?php
                                                $nextTimestamp = strtotime('+5 day');
                                                $nextDay = date('d', $nextTimestamp);
                                                $nextMonth = date('m', $nextTimestamp);
                                                $nextYear = date('Y', $nextTimestamp);
                                                echo $nextDay . '/' . $nextMonth . '/' . $nextYear;
                                                ?>"
                                                    class="movie-info--option" id="movie-info--option6"
                                                    onclick="toggleFocusMIO(this), sliderChange(this.dataset.value), updateSticky2('movie-info--option6')">
                                                    <?php
                                                    $nextTimestamp = strtotime('+5 day');
                                                    $nextDayOfWeek = date('l', $nextTimestamp);
                                                    $nextDay = date('d', $nextTimestamp);
                                                    $nextMonth = date('F', $nextTimestamp);
                                                    echo '<p>' . $nextDayOfWeek . '</p>';
                                                    echo '<span>' . $nextDay . '</span>';
                                                    echo '<p>' . $nextMonth . '</p>';
                                                    ?>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>

                            <div class="movie-info--slider">
                                <input type="range" min="0" max="950" value="155" class="slider"
                                    style="margin-left: -16px;width:99%" id="myRange" onclick="tell()">
                            </div>

                            <div class="movie-info--hours" id="movie-info--hours-1">
                                <div class="movie-info--hours-type">
                                    <p style="margin-bottom:40px">2D - Subtitles</p>
                                </div>
                                <ul class="movie-info--hours-ulist" id="movie-info--hours-ulist">
                                    @foreach ($movie_room_showtime as $key => $showtime)
                                        <?php
                                        $dateToday = $showtime->showtime_date;

                                        $todayTimestamp = strtotime('0 day');
                                        $todayDay = date('d', $todayTimestamp);
                                        $todayMonth = date('m', $todayTimestamp);
                                        $todayYear = date('Y', $todayTimestamp);
                                        $Todayis = $todayYear . '-' . $todayMonth . '-' . $todayDay;

                                        $yesterdayTimestamp = strtotime('-1 day');
                                        $yesterdayDay = date('d', $yesterdayTimestamp);
                                        $yesterdayMonth = date('m', $yesterdayTimestamp);
                                        $yesterdayYear = date('Y', $yesterdayTimestamp);
                                        $Yesterdayis = $yesterdayYear . '-' . $yesterdayMonth . '-' . $yesterdayDay;

                                        $nextTimestamp = strtotime('+1 day');
                                        $nextDay = date('d', $nextTimestamp);
                                        $nextMonth = date('m', $nextTimestamp);
                                        $nextYear = date('Y', $nextTimestamp);
                                        $Nextdayis = $nextYear . '-' . $nextMonth . '-' . $nextDay;
                                        ?>
                                        @if ($dateToday == $Todayis)
                                            <?php
                                            $timeWithSeconds = $showtime->showtime_timeslot;
                                            $convertedTime = date('H:i', strtotime($timeWithSeconds));
                                            ?>
                                            <li class="movie-info--hours-list" id="movie-info--hours-list">
                                                <button value="2D - Subtitles" data-value1="{{ $showtime->room_id}}"  data-value5="{{ $showtime->room_name }}"
                                                    data-value2="{{ $convertedTime }} " class="movie-info--hours-option"
                                                    id="movie-info--hours-option{{ $showtime->showtime_id }}"
                                                    data-value3="today"
                                                    data-value4="{{ $showtime->showtime_id }}"
                                                    onclick="toggleFocusMFH(this), updateSticky('movie-info--hours-option{{ $showtime->showtime_id }}',toggleClick()),toggleClickSEAT({{ $showtime->showtime_id }},{{ $showtime->room_id }})">{{ $convertedTime }}
                                                </button>
                                            </li>
                                        @endif
                                        @if ($dateToday == $Yesterdayis)
                                            <?php
                                            $timeWithSeconds = $showtime->showtime_timeslot;
                                            $convertedTime = date('H:i', strtotime($timeWithSeconds));
                                            ?>
                                            <li class="movie-info--hours-list">
                                                <button value="2D - Subtitles" data-value1="{{$showtime->room_id }}"  data-value5="{{ $showtime->room_name }}"
                                                    data-value2="{{ $convertedTime }} " class="movie-info--hours-option"
                                                    id="movie-info--hours-option{{ $showtime->showtime_id }}"
                                                    data-value3="yesterday"
                                                    data-value4="{{ $showtime->showtime_id }}"
                                                    onclick="toggleFocusMFH(this), updateSticky('movie-info--hours-option{{ $showtime->showtime_id }}',toggleClick()),toggleClickSEAT({{ $showtime->showtime_id }},{{ $showtime->room_id }})">{{ $convertedTime }}
                                                </button>
                                            </li>
                                        @endif

                                        @if ($dateToday == $Nextdayis)
                                            <?php
                                            $timeWithSeconds = $showtime->showtime_timeslot;
                                            $convertedTime = date('H:i', strtotime($timeWithSeconds));
                                            ?>
                                            <li class="movie-info--hours-list" id="movie-info--hours-list">
                                                <button value="2D - Subtitles" data-value1="{{ $showtime->room_id }}" data-value5="{{ $showtime->room_name }}"
                                                    data-value2="{{ $convertedTime }} " class="movie-info--hours-option"
                                                    id="movie-info--hours-option{{ $showtime->showtime_id }}"
                                                    data-value3="tomorrow"
                                                    data-value4="{{ $showtime->showtime_id }}"
                                                    onclick="toggleFocusMFH(this), updateSticky('movie-info--hours-option{{ $showtime->showtime_id }}',toggleClick()),toggleClickSEAT({{ $showtime->showtime_id }},{{ $showtime->room_id }})">{{ $convertedTime }}
                                                </button>
                                            </li>
                                        @endif
                                    @endforeach
                                    <li class="movie-info--hours-list" id="movie-info--hours-list">
                                        <p class="movie-info--hours-option NO-schedules" id="movie-info--hours-option--"
                                            data-value3="no_schedule">THERE IS CURRENTLY NO RELEASE DATES</p>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            <form role="form" id="form1" action="{{ URL::to('/checkout') }}" onsubmit="return checkSeatsAndProceed()" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="select-ticket col l-12 m-12 c-12" style="display: none">
                    <div class="row sm-gutter">
                        <div class="select-ticket--container col l-12 m-4 c-6">
                            <h1 class="select-ticket--heading">SELECT TICKET(S)</h1>

                            <div class="select-ticket--content">
                                @foreach ($list_ticket as $key => $ticket)
                                <div class="ticket" >
                                    <h2>{{ $ticket->ticket_name }}</h2>
                                    <h4>{{ $ticket->ticket_type }}</h4>
                                    <h2>{{ number_format($ticket->ticket_price , 0, ',', '.') }}đ</h2>
                                    <div class="buy-ticket">
                                        <div class="minus-btn" onclick="decrByOne('quantity-field{{ $ticket->ticket_id }}')">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                class="buy-ticket--svg">
                                                <path
                                                    d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                                            </svg>
                                        </div>
                                        <input style="box-shadow: none" type="number" step="1" value="0" name="quantity{{ $ticket->ticket_id  }}" data-value="{{ $ticket->ticket_type }}" readonly
                                            id="quantity-field{{$ticket->ticket_id}}" data-value1="{{ $ticket->ticket_price  }}">
                                        <div class="plus-btn"
                                            onclick="checkTicketAmount('quantity-field{{$ticket->ticket_id}}')">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                class="buy-ticket--svg">
                                                <path
                                                    d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="choose-seat col l-12 m-12 c-12" style="display: none">
                    <div class="row sm-gutter">
                        <div class="choose-seat--container col l-12 m-4 c-6" style="display: none">
                            <h1 class="choose-seat--heading">CHOOSE YOUR SEAT(S) - <span id="room-selected"></span>
                            </h1>

                            <div class="choose-seat--screen">
                                <p>SCREEN</p>
                            </div>

                            <div class="choose-seat--content">
                                <div class="choose-seat--row">
                                    @foreach ($movie_room_showtime_seat as $key => $seat)
                                        @if (strpos($seat->seat_name, 'A') === 0)
                                            <div onclick="toggleFocusCSS(this), toggleSeatAndStartCountdown('choose-seat--seat{{ $seat->seat_id }}')"
                                                id="choose-seat--seat{{ $seat->seat_id }}"
                                                class="choose-seat--seat {{ $seat->seat_type }} {{ $seat->seat_status }}"
                                                data-value="{{ $seat->showtime_id }}" data-value1="{{ $seat->room_id }}" data-value2="{{ $seat->seat_id }}" >
                                                {{ $seat->seat_name }} </div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="choose-seat--row">
                                    @foreach ($movie_room_showtime_seat as $key => $seat)
                                        @if (strpos($seat->seat_name, 'B') === 0)
                                            <div onclick="toggleFocusCSS(this), toggleSeatAndStartCountdown('choose-seat--seat{{ $seat->seat_id }}')"
                                                id="choose-seat--seat{{ $seat->seat_id }}"
                                                class="choose-seat--seat {{ $seat->seat_type }} {{ $seat->seat_status }}"
                                                data-value="{{ $seat->showtime_id }}" data-value1="{{ $seat->room_id }}" data-value2="{{ $seat->seat_id }}">
                                                {{ $seat->seat_name }}</div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="choose-seat--row">
                                    @foreach ($seat_room_showtime as $key => $seat)
                                        @if (strpos($seat->seat_name, 'C') === 0)
                                            <div onclick="toggleFocusCSS(this), toggleSeatAndStartCountdown('choose-seat--seat{{ $seat->seat_id }}')"
                                                id="choose-seat--seat{{ $seat->seat_id }}"
                                                class="choose-seat--seat {{ $seat->seat_type }} {{ $seat->seat_status }}"
                                                data-value="{{ $seat->showtime_id }}" data-value1="{{ $seat->room_id }}" data-value2="{{ $seat->seat_id }}">
                                                {{ $seat->seat_name }}</div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="choose-seat--row">
                                    @foreach ($movie_room_showtime_seat as $key => $seat)
                                        @if (strpos($seat->seat_name, 'D') === 0)
                                            <div onclick="toggleFocusCSS(this), toggleSeatAndStartCountdown('choose-seat--seat{{ $seat->seat_id }}')"
                                                id="choose-seat--seat{{ $seat->seat_id }}"
                                                class="choose-seat--seat {{ $seat->seat_type }} {{ $seat->seat_status }}"
                                                data-value="{{ $seat->showtime_id }}" data-value1="{{ $seat->room_id }}" data-value2="{{ $seat->seat_id }}">
                                                {{ $seat->seat_name }}</div>
                                        @endif
                                    @endforeach
                                </div>

                                <div class="choose-seat--row">
                                    @foreach ($movie_room_showtime_seat as $key => $seat)
                                        @if (strpos($seat->seat_name, 'E') === 0)
                                            <div onclick="toggleFocusCSS(this), toggleSeatAndStartCountdown('choose-seat--seat{{ $seat->seat_id }}')"
                                                id="choose-seat--seat{{ $seat->seat_id }}"
                                                class="choose-seat--seat {{ $seat->seat_type }} {{ $seat->seat_status }}"
                                                data-value="{{ $seat->showtime_id }}" data-value1="{{ $seat->room_id }}" data-value2="{{ $seat->seat_id }}">
                                                {{ $seat->seat_name }}</div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="choose-seat--row">
                                    @foreach ($seat_room_showtime as $key => $seat)
                                        @if (strpos($seat->seat_name, 'F') === 0)
                                            <div onclick="toggleFocusCSS(this), toggleSeatAndStartCountdown('choose-seat--seat{{ $seat->seat_id }}')"
                                                id="choose-seat--seat{{ $seat->seat_id }}"
                                                class="choose-seat--seat {{ $seat->seat_type }} {{ $seat->seat_status }}"
                                                data-value="{{ $seat->showtime_id }}" data-value1="{{ $seat->room_id }}" data-value2="{{ $seat->seat_id }}">
                                                {{ $seat->seat_name }}</div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="choose-seat--row">
                                    @foreach ($seat_room_showtime as $key => $seat)
                                        @if (strpos($seat->seat_name, 'G') === 0)
                                            <div onclick="toggleFocusCSS(this), toggleSeatAndStartCountdown('choose-seat--seat{{ $seat->seat_id }}')"
                                                id="choose-seat--seat{{ $seat->seat_id }}"
                                                class="choose-seat--seat {{ $seat->seat_type }} {{ $seat->seat_status }}"
                                                data-value="{{ $seat->showtime_id }}" data-value1="{{ $seat->room_id }}" data-value2="{{ $seat->seat_id }}">
                                                {{ $seat->seat_name }}</div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="choose-seat--row">
                                    @foreach ($seat_room_showtime as $key => $seat)
                                        @if (strpos($seat->seat_name, 'H') === 0)
                                            <div onclick="toggleFocusCSS(this), toggleSeatAndStartCountdown('{{ $seat->seat_id }}')"
                                                id="{{ $seat->seat_id }}"
                                                class="choose-seat--seat {{ $seat->seat_type }} {{ $seat->seat_status }}"
                                                data-value="{{ $seat->showtime_id }}" data-value1="{{ $seat->room_id }}" data-value2="{{ $seat->seat_id }}">
                                                {{ $seat->seat_name }}</div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="choose-seat--row">
                                    @foreach ($seat_room_showtime as $key => $seat)
                                        @if (strpos($seat->seat_name, 'I') === 0)
                                            <div onclick="toggleFocusCSS(this), toggleSeatAndStartCountdown('{{ $seat->seat_id }}')"
                                                id="{{ $seat->seat_id }}"
                                                class="choose-seat--seat {{ $seat->seat_type }} {{ $seat->seat_status }}"
                                                data-value="{{ $seat->showtime_id }}" data-value1="{{ $seat->room_id }}" data-value2="{{ $seat->seat_id }}">
                                                {{ $seat->seat_name }}</div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="choose-seat--row">
                                    @foreach ($seat_room_showtime as $key => $seat)
                                        @if (strpos($seat->seat_name, 'J') === 0)
                                            <div onclick="toggleFocusCSS(this), toggleSeatAndStartCountdown('{{ $seat->seat_id }}')"
                                                id="{{ $seat->seat_id }}"
                                                class="choose-seat--seat {{ $seat->seat_type }} {{ $seat->seat_status }}"
                                                data-value="{{ $seat->showtime_id }}" data-value1="{{ $seat->room_id }}" data-value2="{{ $seat->seat_id }}">
                                                {{ $seat->seat_name }}</div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="choose-seat--row">
                                    @foreach ($seat_room_showtime as $key => $seat)
                                        @if (strpos($seat->seat_name, 'K') === 0 )
                                            <div onclick="toggleFocusCSS(this), toggleSeatAndStartCountdown('{{ $seat->seat_id }}')"
                                                id="{{ $seat->seat_id }}"
                                                class="choose-seat--seat {{ $seat->seat_type }} {{ $seat->seat_status }}"
                                                data-value="{{ $seat->showtime_id }}" data-value1="{{ $seat->room_id }}" data-value2="{{ $seat->seat_id }}">
                                                {{ $seat->seat_name }}</div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="choose-seat--row">
                                    @foreach ($seat_room_showtime as $key => $seat)
                                        @if (strpos($seat->seat_name, 'L') === 0 )
                                            <div onclick="toggleFocusCSS(this), toggleSeatAndStartCountdown('{{ $seat->seat_id }}')"
                                                id="{{ $seat->seat_id }}"
                                                class="choose-seat--seat {{ $seat->seat_type }} {{ $seat->seat_status }}"
                                                data-value="{{ $seat->showtime_id }}" data-value1="{{ $seat->room_id }}" data-value2="{{ $seat->seat_id }}">
                                                {{ $seat->seat_name }}</div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="choose-seat--glossary">
                                    <div class="choose-seat--glossary-row">
                                        <div class="choose-seat--seat-default gloss-norm norm" ></div>
                                        <span>Regular Seat</span>
                                        <div class="choose-seat--seat-default gloss-double double"></div>
                                        <span>Double Seat (2 People)</span>
                                        <div class="choose-seat--seat-default gloss-vip vip"></div>
                                        <span>VIP Seat</span>
                                        <div class="choose-seat--seat-default gloss-selecting selecting">
                                        </div>
                                        <span>Selected Seat</span>
                                        <div class="choose-seat--seat-default gloss-selected selected"></div>
                                        <span>Reserved Seat</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="buy-popcorn col l-12 m-12 c-12" style="display: none">
                    <div class="row sm-gutter">
                        <div class="buy-popcorn--container col l-12 m-4 c-6">
                            <h1 class="buy-popcorn--heading">BUY POPCORN & DRINKS</h1>

                            <div class="buy-popcorn--content">
                                @foreach ($movie_popcorndrink as $key => $popcorndrink)
                                    <div class="col l-3 m-4 c-6">
                                        <div class="buy-popcorn--single">
                                            <img src="{{ URL::to('public/upload/popcorn/' . $popcorndrink->popcorndrink_img) }}"
                                                alt="" class="buy-popcorn--img">

                                            <div class="buy-popcorn--info">
                                                <h3>COMBO {{ $popcorndrink->popcorndrink_combo }}</h3>
                                                <p>{{ $popcorndrink->popcorndrink_popcorn }}</p>
                                                <p>{{ $popcorndrink->popcorndrink_drink }}</p>
                                                <p>{{ number_format($popcorndrink->popcorndrink_price, 0, ',', '.') }}đ
                                                </p>
                                                <div class="buy-popcorn--btn">
                                                    <div class="minus-btn"
                                                        onclick="decreaseQuantity('popcorn-combo-{{ $key + 1 }}')">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                            <path
                                                                d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                                                        </svg>
                                                    </div>
                                                    <input readonly value="0"
                                                        id="popcorn-combo-{{ $key + 1 }}"name="popcorn_combo_{{ $key + 1 }}" data-value1="{{ $popcorndrink->popcorndrink_price }}">
                                                    <div class="plus-btn"
                                                        onclick="increaseQuantity('popcorn-combo-{{ $key + 1 }}')">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                            <path
                                                                d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sticky-info" style="display:none">
            <div class="grid wide">
                <div class="sm-gutter">
                    <div class="sticky-info--container">
                        <div class="sticky-info--movie-info col l-6 m-6 c-6">
                            @foreach ($movie_by_id as $key => $movie_pro)
                                <img src="{{ URL::to('public/upload/movie/' . $movie_pro->movie_img) }}" alt=""
                                    class="sticky-info--img">

                                <div class="sticky-info--movie">
                                    <p>{{ $movie_pro->movie_name }}</p>
                                    <input type="hidden" value="{{ $movie_pro->movie_id }}" name="movie_hidden">
                            @endforeach
                            <p id="movie-type">-</p>
                            @foreach ($movie_by_id as $key => $movie_pro)
                                <p id="movie-age">{{ $movie_pro->movie_age }}</p>
                            @endforeach
                            <span >Selected Seats: </span>
                            <span id="movie-seats"></span>
                            <span id="movie-seats-couple"></span>
                            <p>
                                <span id="movie-screen">-</span> |
                                <span id="movie-time">-</span> |
                                <span id="movie-date" >-</span>
                            </p>
                            <input type="hidden" name="movie_seats" value="">
                            <input type="hidden" name="movie_seats_couple" value="">
                            <input type="hidden" name="movie_screen" value="">
                            <input type="hidden" name="movie_time" value="">
                        </div>
                    </div>

                    <div class="sticky-info--payment-info col l-6 m-6 c-6" style="padding-right:0">
                        <div class="sticky-info--hold-ticket">
                            <p>Ticket holding time:</p>
                            <p id="countdown-timer">05:00</p>
                        </div>

                        <div class="sticky-info--right">
                            <div class="sticky-info--temp-bill">
                                <p>Temporary price calculation</p>
                                <p>
                                    <span id="temp-price-calc">0</span>
                                    <span>đ</span>
                                </p>
                                <input type="hidden" name="temp_price_calc" value="">
                            </div>

                            <button type="submit" class="sticky-info--buy-ticket" onclick="startCountdownCheckOut()">

                                <p>Buy ticket(s)</p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
@endsection


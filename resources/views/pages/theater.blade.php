@extends('layout')
@section('content')

<div class="content">
    <div class="grid wide">
        <div class="col c-12">
            <div class="container">
                {{-- <div class="path">
                    <a href="{{ URL::to('/homepage') }}" class="path-home">Home</a>

                    >

                    <a href="" class="path-theaters">Theaters</a>
                </div> --}}

                <div class="theater_schedule">
                    <div class="theater_name">
                        <img src="../img/Screenshot 2024-04-14 171059.png" alt="">
                        <h1>CINOVA CINEMA</h1>
                        <img src="../img/Screenshot 2024-04-14 171059.png" alt="">
                    </div>
                    <div class="schedule">
                        <div class="schedule_theater">
                            <img class="img_theater" src="https://iguov8nhvyobj.vcdn.cloud/media/site/cache/1/980x415/b58515f018eb873dafa430b6f9ae0c1e/r/s/rsz_1181115_-_cgv_gigamall_page_05.jpg" alt="">
                            <div class="theater_detail">
                                <div class="theater_text">
                                    <p class="theater_detail-location">Hàn Thuyên Street, Neighborhood 6, Linh Trung Ward, Thủ Đức District, Ho Chi Minh City</p>
                                    <p class="theater_detail-fax">Fax: 09221145</p>
                                    <p class="theater_detail-hotline">Hotline: 0123 456789</p>
                                </div>
                                <div class="vertical_line"></div>
                                <div class="theater_btn">
                                    <button class="red_button red_button-map" onclick="transfer('https://maps.app.goo.gl/1j8J93R1Pr9xbEoQ9')">
                                      Map</button>
                                    <button class="red_button" onclick="transfer('contact-us')">Contact</button>
                                </div>
                            </div>
                            {{-- <div class="schedule_time">
                                <button class="schedule_captions schedule_time-btn">
                                    Lịch chiếu
                                </button>
                                <div class="calendar">
                                    <div class="chevron">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="chevron_svg-left" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/></svg>                                            </div>
                                    <div class="schedule_calendar">
                                        <div class="schedule_calendar-day">
                                            <p>Monday</p>
                                            <p>09</p>
                                            <p>February</p>
                                        </div>
                                    </div>
                                    <div class="schedule_calendar">
                                        <div class="schedule_calendar-day">
                                            <p>Tuesday</p>
                                            <p>10</p>
                                            <p>February</p>
                                        </div>
                                    </div>
                                    <div class="schedule_calendar">
                                        <div class="schedule_calendar-day">
                                            <p>Wednesday</p>
                                            <p>11</p>
                                            <p>February</p>
                                        </div>
                                    </div>
                                    <div class="schedule_calendar">
                                        <div class="schedule_calendar-day">
                                            <p>Thursday</p>
                                            <p>12</p>
                                            <p>February</p>
                                        </div>
                                    </div>
                                    <div class="schedule_calendar">
                                        <div class="schedule_calendar-day">
                                            <p>Friday</p>
                                            <p>13</p>
                                            <p>February</p>
                                        </div>
                                    </div>
                                    <div class="schedule_calendar">
                                        <div class="schedule_calendar-day">
                                            <p>Saturday</p>
                                            <p>14</p>
                                            <p>February</p>
                                        </div>
                                    </div>
                                    <div class="schedule_calendar">
                                        <div class="schedule_calendar-day">
                                            <p>Sunday</p>
                                            <p>15</p>
                                            <p>February</p>
                                        </div>
                                    </div>
                                    <div class="chevron">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="chevron-svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
                                    </div>
                                </div>
                                <div class="movie-info--slider schedule_calendar-slider">
                                    <input type="range" min="0" max="700" value="1" class="slider" id="myRange">
                                </div>
                            </div> --}}
                        </div>

                    </div>
                    {{-- <div class="theater_schedule-movie">
                        <div class="card">
                            <img src="https://m.media-amazon.com/images/I/71YnCMFqPVL._SL1500_.jpg" class="img_movie" alt="">
                            <div class="card__content">
                              <p class="card__title">Zootophia</p>
                              <p class="card__description">Khi Judy Hopps, một sĩ quan tân binh của Sở cảnh sát Zootopia, phát hiện ra một âm mưu thâm độc, cô đã nhờ đến sự giúp đỡ của một kẻ lừa đảo để giải quyết vụ án nhằm chứng minh khả năng của mình với Cảnh sát trưởng Bogo.</p>
                            </div>
                        </div>

                        <div class="schedule_container">
                            <div class="schedule_container-select">
                                <button class="schedule_captions">
                                    2D Lồng tiếng
                                </button>
                                <div class="schedule_time"></div>
                                <button class="schedule_time-select">
                                    8:45
                                </button>
                                <button class="schedule_time-select">
                                    10:25
                                </button>
                                <button class="schedule_time-select">
                                    11:40
                                </button>
                                <button class="schedule_time-select">
                                    12:45
                                </button>
                                <button class="schedule_time-select">
                                    16:05
                                </button>
                            </div>
                            <div class="schedule_container-select">
                                <button class="schedule_captions">
                                    3D Phụ đề
                                </button>
                                <div class="schedule_time"></div>
                                <button class="schedule_time-select">
                                    8:45
                                </button>
                                <button class="schedule_time-select">
                                    10:25
                                </button>
                                <button class="schedule_time-select">
                                    11:40
                                </button>
                                <button class="schedule_time-select">
                                    12:45
                                </button>
                                <button class="schedule_time-select">
                                    16:05
                                </button>
                            </div>
                            <div class="schedule_container-select">
                                <button class="schedule_captions">
                                    SCREENX-2D Phụ đề
                                </button>
                                <div class="schedule_time"></div>
                                <button class="schedule_time-select">
                                    8:45
                                </button>
                                <button class="schedule_time-select">
                                    10:25
                                </button>
                                <button class="schedule_time-select">
                                    11:40
                                </button>
                                <button class="schedule_time-select">
                                    12:45
                                </button>
                                <button class="schedule_time-select">
                                    16:05
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="line line_movie"></div>
                    <div class="theater_schedule-movie">
                        <div class="card">
                            <img src="https://lumiere-a.akamaihd.net/v1/images/p_bighero6_19753_20bd6206.jpeg" class="img_movie" alt="">
                            <div class="card__content">
                              <p class="card__title">Big Hero 6</p>
                              <p class="card__description">Hiro, một thần đồng về robot, hợp tác với Baymax, một robot, để trả thù cho cái chết của anh trai mình. Sau đó, những người bạn của Hiro tham gia cùng anh, thành lập một nhóm gồm các anh hùng công nghệ cao để giúp anh thực hiện nhiệm vụ.</p>
                            </div>
                        </div>

                        <div class="schedule_container">
                            <div class="schedule_container-select">
                                <button class="schedule_captions">
                                    2D Lồng tiếng
                                </button>
                                <div class="schedule_time"></div>
                                <button class="schedule_time-select">
                                    8:45
                                </button>
                                <button class="schedule_time-select">
                                    10:25
                                </button>
                                <button class="schedule_time-select">
                                    11:40
                                </button>
                                <button class="schedule_time-select">
                                    12:45
                                </button>
                                <button class="schedule_time-select">
                                    16:05
                                </button>
                            </div>
                            <div class="schedule_container-select">
                                <button class="schedule_captions">
                                    3D Phụ đề
                                </button>
                                <div class="schedule_time"></div>
                                <button class="schedule_time-select">
                                    8:45
                                </button>
                                <button class="schedule_time-select">
                                    10:25
                                </button>
                                <button class="schedule_time-select">
                                    11:40
                                </button>
                                <button class="schedule_time-select">
                                    12:45
                                </button>
                                <button class="schedule_time-select">
                                    16:05
                                </button>
                            </div>
                            <div class="schedule_container-select">
                                <button class="schedule_captions">
                                    SCREENX-2D Phụ đề
                                </button>
                                <div class="schedule_time"></div>
                                <button class="schedule_time-select">
                                    8:45
                                </button>
                                <button class="schedule_time-select">
                                    10:25
                                </button>
                                <button class="schedule_time-select">
                                    11:40
                                </button>
                                <button class="schedule_time-select">
                                    12:45
                                </button>
                                <button class="schedule_time-select">
                                    16:05
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="line line_movie"></div>
                    <div class="theater_schedule-movie">
                        <div class="card">
                            <img src="https://lumiere-a.akamaihd.net/v1/images/image_2ff75a5c.jpeg?region=0,0,540,810" class="img_movie" alt="">
                            <div class="card__content">
                              <p class="card__title">Luca</p>
                              <p class="card__description">Luca, một con quái vật biển, kết bạn với Alberto, một đồng loại khác, người đưa anh vào cuộc phiêu lưu trên đất liền. Anh ấy trải qua một mùa hè thú vị trong khi không giấu bố mẹ mình.</p>
                            </div>
                        </div>

                        <div class="schedule_container">
                            <div class="schedule_container-select">
                                <button class="schedule_captions">
                                    2D Lồng tiếng
                                </button>
                                <div class="schedule_time"></div>
                                <button class="schedule_time-select">
                                    8:45
                                </button>
                                <button class="schedule_time-select">
                                    10:25
                                </button>
                                <button class="schedule_time-select">
                                    11:40
                                </button>
                                <button class="schedule_time-select">
                                    12:45
                                </button>
                                <button class="schedule_time-select">
                                    16:05
                                </button>
                            </div>
                            <div class="schedule_container-select">
                                <button class="schedule_captions">
                                    3D Phụ đề
                                </button>
                                <div class="schedule_time"></div>
                                <button class="schedule_time-select">
                                    8:45
                                </button>
                                <button class="schedule_time-select">
                                    10:25
                                </button>
                                <button class="schedule_time-select">
                                    11:40
                                </button>
                                <button class="schedule_time-select">
                                    12:45
                                </button>
                                <button class="schedule_time-select">
                                    16:05
                                </button>
                            </div>
                            <div class="schedule_container-select">
                                <button class="schedule_captions">
                                    SCREENX-2D Phụ đề
                                </button>
                                <div class="schedule_time"></div>
                                <button class="schedule_time-select">
                                    8:45
                                </button>
                                <button class="schedule_time-select">
                                    10:25
                                </button>
                                <button class="schedule_time-select">
                                    11:40
                                </button>
                                <button class="schedule_time-select">
                                    12:45
                                </button>
                                <button class="schedule_time-select">
                                    16:05
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="line line_movie"></div>
                    <div class="theater_schedule-movie">
                        <div class="card">
                            <img src="https://musicart.xboxlive.com/7/a49b5100-0000-0000-0000-000000000002/504/image.jpg?w=1920&h=1080" class="img_movie" alt="">
                            <div class="card__content">
                              <p class="card__title">Soul</p>
                              <p class="card__description">Joe là một giáo viên ban nhạc cấp hai có cuộc sống không diễn ra như anh mong đợi. Niềm đam mê thực sự của anh ấy là nhạc jazz -- và anh ấy rất giỏi. Nhưng khi anh du hành đến một thế giới khác để giúp ai đó tìm thấy niềm đam mê của họ, anh sớm khám phá ra ý nghĩa của việc có linh hồn.</p>
                            </div>
                        </div>

                        <div class="schedule_container">
                            <div class="schedule_container-select">
                                <button class="schedule_captions">
                                    2D Lồng tiếng
                                </button>
                                <div class="schedule_time"></div>
                                <button class="schedule_time-select">
                                    8:45
                                </button>
                                <button class="schedule_time-select">
                                    10:25
                                </button>
                                <button class="schedule_time-select">
                                    11:40
                                </button>
                                <button class="schedule_time-select">
                                    12:45
                                </button>
                                <button class="schedule_time-select">
                                    16:05
                                </button>
                            </div>
                            <div class="schedule_container-select">
                                <button class="schedule_captions">
                                    3D Phụ đề
                                </button>
                                <div class="schedule_time"></div>
                                <button class="schedule_time-select">
                                    8:45
                                </button>
                                <button class="schedule_time-select">
                                    10:25
                                </button>
                                <button class="schedule_time-select">
                                    11:40
                                </button>
                                <button class="schedule_time-select">
                                    12:45
                                </button>
                                <button class="schedule_time-select">
                                    16:05
                                </button>
                            </div>
                            <div class="schedule_container-select">
                                <button class="schedule_captions">
                                    SCREENX-2D Phụ đề
                                </button>
                                <div class="schedule_time"></div>
                                <button class="schedule_time-select">
                                    8:45
                                </button>
                                <button class="schedule_time-select">
                                    10:25
                                </button>
                                <button class="schedule_time-select">
                                    11:40
                                </button>
                                <button class="schedule_time-select">
                                    12:45
                                </button>
                                <button class="schedule_time-select">
                                    16:05
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="line line_movie"></div> --}}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

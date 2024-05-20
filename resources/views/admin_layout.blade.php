<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('./public/backend/css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('./public/frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('./public/frontend/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('./public/frontend/css/base.css') }}">

    <link href="{{ asset('./public/backend/css/font-awesome.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
</head>

<body>
    <div class="adm__container">
        <div class="grid wide">
            <div class="adm__dashboard-page col l-12 m-12 c-12" style="display: flex">
                <div class="adm__nav-bar col l-2 m-4 c-6" style="height: auto;">
                        <div class="adm__nav-bar--img">
                            <img src=" {{asset('./public/frontend/images/cinova-logo.png')}}" alt="" class="adm__nav-bar--logo">
                            <img src="{{asset('./public/frontend/images/cinova.png')}}" alt="" class="adm__nav-bar--name">
                        </div>

                        <div class="adm__nav-bar--block">
                            <ul class="adm__nav-bar--ul">
                                <li class="adm__nav-bar--li active">
                                    <a href="dashboard" class="adm__nav-bar--a">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/>
                                        </svg>

                                        Dashboard</a>
                                </li>
                                <li class="adm__nav-bar--li">
                                    <a href="{{URL::to('/list-movie') }}" class="adm__nav-bar--a">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z"/>
                                        </svg>

                                        All movies</a>
                                </li>
                                <li class="adm__nav-bar--li">
                                    <a href="{{URL::to('/add-movie') }}"class="adm__nav-bar--a">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V96c0-8.8-7.2-16-16-16H64zM0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM200 344V280H136c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H248v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/>
                                        </svg>

                                        Add movie</a>
                                </li>
                                <li class="adm__nav-bar--li">
                                    <a href="{{URL::to('/list-room') }}" class="adm__nav-bar--a">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z"/>
                                        </svg>

                                        All rooms</a>
                                </li>
                                <li class="adm__nav-bar--li">
                                    <a href="{{URL::to('/add-room') }}"class="adm__nav-bar--a">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V96c0-8.8-7.2-16-16-16H64zM0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM200 344V280H136c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H248v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/>
                                        </svg>

                                        Add room</a>
                                </li>
                                <li class="adm__nav-bar--li">
                                    <a href="{{URL::to('/list-showtime') }}" class="adm__nav-bar--a">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z"/>
                                        </svg>

                                        All showtimes</a>
                                </li>
                                <li class="adm__nav-bar--li">
                                    <a href="{{URL::to('/add-showtime') }}"class="adm__nav-bar--a">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V96c0-8.8-7.2-16-16-16H64zM0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM200 344V280H136c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H248v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/>
                                        </svg>

                                        Add showtime</a>
                                </li>
                                <li class="adm__nav-bar--li">
                                    <a href="{{URL::to('/list-popcorndrink') }}" class="adm__nav-bar--a">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z"/>
                                        </svg>

                                        Popcorn&Drink</a>
                                </li>
                                <li class="adm__nav-bar--li">
                                    <a href="{{URL::to('/add-popcorndrink') }}"class="adm__nav-bar--a">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V96c0-8.8-7.2-16-16-16H64zM0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM200 344V280H136c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H248v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/>
                                        </svg>

                                        Add Popcorn&Drink</a>
                                </li>
                                <li class="adm__nav-bar--li">
                                    <a href="{{URL::to('/list-seat') }}" class="adm__nav-bar--a">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z"/>
                                        </svg>

                                        All seats</a>
                                </li>
                                <li class="adm__nav-bar--li">
                                    <a href="{{URL::to('/add-seat') }}"class="adm__nav-bar--a">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V96c0-8.8-7.2-16-16-16H64zM0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM200 344V280H136c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H248v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/>
                                        </svg>

                                        Add seat</a>
                                </li>
                                <li class="adm__nav-bar--li">
                                    <a href="{{URL::to('/booking') }}" class="adm__nav-bar--a">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H288V352c0-17.7 14.3-32 32-32h80V96c0-8.8-7.2-16-16-16H64zM288 480H64c-35.3 0-64-28.7-64-64V96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V320v5.5c0 17-6.7 33.3-18.7 45.3l-90.5 90.5c-12 12-28.3 18.7-45.3 18.7H288z"/>
                                        </svg>

                                        Bookings</a>
                                </li>
                                <li class="adm__nav-bar--li">
                                    <a href="{{URL::to('/list-ticket') }}" class="adm__nav-bar--a">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z"/>
                                        </svg>

                                        All tickets</a>
                                </li>
                                <li class="adm__nav-bar--li">
                                    <a href="{{URL::to('/add-ticket') }}"class="adm__nav-bar--a">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V96c0-8.8-7.2-16-16-16H64zM0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM200 344V280H136c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H248v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/>
                                        </svg>

                                        Add ticket</a>
                                </li>
                            </ul>

                            <button>
                                <a href="{{ URL::to('/logout-admin') }}">LOG OUT</a>
                            </button>
                        </div>
                </div>
                @yield('admin_content')

            </div>
            </div>
        </div>
      </div>

    <script src="{{ asset('./public/backend/js/bootstrap.js') }}"></script>
    <script src="{{ asset('./public/backend/js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ asset('./public/backend/js/script.js') }}"></script>
    <script src="{{ asset('./public/backend/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('./public/backend/js/jquery.nicescroll.js') }}"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="./public/backend/js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="{{ asset('./public/backend/js/jquery.scrollTo.js') }}"></script>
    <script src="{{ asset('./public/frontend/js/script.js') }}"></script>
    <!-- morris JavaScript -->
    <script>
        // Auto hide alert message after 10 seconds
    // setTimeout(function() {
    //     let messageAlert = document.getElementById('message-alert');
    //     if (messageAlert) {
    //         messageAlert.style.display = 'none';
    //     }
    // }, 5000);
    function updateRoomName() {
        var showtimeSelect = document.getElementById('seat_showtime');
        var roomNameInput = document.getElementById('seat_room');
        var selectedOption = showtimeSelect.options[showtimeSelect.selectedIndex];
        roomNameInput.value = selectedOption.getAttribute('data-room-id');
    }
    function hideSelectedOption() {
        var showtimeSelect = document.getElementById('seat_showtime');
        var selectedOption = showtimeSelect.options[showtimeSelect.selectedIndex];
        selectedOption.style.display = 'none';
    }

    </script>

</body>

</html>

@extends('layout')
@section('content')
    <div class="content">
        @foreach ($list_movie_soon as $key => $movie)
            <div class="grid wide">
                <div class="poster col l-12 m-12 c-12">
                    <div class="row sm-gutter poster-img" id="trailer">
                        <!-- <img src="https://image.tmdb.org/t/p/original/qrkFlypxQ23Ca9iZ1h4uRysIByj.jpg" alt="" class="poster-img">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="poster-play-btn movie-info--play--button">
                            <path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c7.6-4.2 16.8-4.1 24.3 .5l144 88c7.1 4.4 11.5 12.1 11.5 20.5s-4.4 16.1-11.5 20.5l-144 88c-7.4 4.5-16.7 4.7-24.3 .5s-12.3-12.2-12.3-20.9V168c0-8.7 4.7-16.7 12.3-20.9z"/>
                        </svg> -->

                        <iframe width="100%" height="100%" src="{{ $movie->movie_iframe }}&autoplay=1&mute=1"
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

                    <a href="{{URL::to('/coming-soon')}}" class="path-coming-soon">Coming soon</a>

                    >

                    <a href="" class="path-coming-soon">{{ $movie->movie_name }}</a>
                </div>

                <div class="movie-info-24 col l-12 m-12 c-12">
                    <div class="row2 sm-gutter">
                        <div class="movie-info--content-24 col l-4 m-4 c-6">
                            <div class="movie-info--img-24">
                                <img src="{{ URL::to('public/upload/movie/' . $movie->movie_img) }}" alt=""
                                    class="movie-info--bgimg-24">
                                <img src="{{ URL::to('public/upload/movie/' . $movie->movie_img) }}" alt=""
                                    class="movie-info--fgimg-24">
                            </div>
                        </div>

                        <div class="movie-info--showtime-24 col l-7 m-4 c-6">
                            <div class="movie-info--name-24">
                                <h1>{{ $movie->movie_name }}</h1>
                            </div>

                            <div class="movie-info--info-24">
                                <p>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                        class="movie-info--svg-24">
                                        <path
                                            d="M0 80V229.5c0 17 6.7 33.3 18.7 45.3l176 176c25 25 65.5 25 90.5 0L418.7 317.3c25-25 25-65.5 0-90.5l-176-176c-12-12-28.3-18.7-45.3-18.7H48C21.5 32 0 53.5 0 80zm112 32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                                    </svg>
                                    Category: {{ $movie->movie_category }}
                                </p>
                                <p>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                        class="movie-info--svg-24">
                                        <path
                                            d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                    </svg>
                                    Length: {{ $movie->movie_time }}'
                                </p>
                                <p>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                        class="movie-info--svg-24">
                                        <path
                                            d="M512 80c8.8 0 16 7.2 16 16V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16H512zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM200 208c14.2 0 27 6.1 35.8 16c8.8 9.9 24 10.7 33.9 1.9s10.7-24 1.9-33.9c-17.5-19.6-43.1-32-71.5-32c-53 0-96 43-96 96s43 96 96 96c28.4 0 54-12.4 71.5-32c8.8-9.9 8-25-1.9-33.9s-25-8-33.9 1.9c-8.8 9.9-21.6 16-35.8 16c-26.5 0-48-21.5-48-48s21.5-48 48-48zm144 48c0-26.5 21.5-48 48-48c14.2 0 27 6.1 35.8 16c8.8 9.9 24 10.7 33.9 1.9s10.7-24 1.9-33.9c-17.5-19.6-43.1-32-71.5-32c-53 0-96 43-96 96s43 96 96 96c28.4 0 54-12.4 71.5-32c8.8-9.9 8-25-1.9-33.9s-25-8-33.9 1.9c-8.8 9.9-21.6 16-35.8 16c-26.5 0-48-21.5-48-48z" />
                                    </svg>
                                    Subtitles Available
                                </p>
                                <p>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                        class="movie-info--svg-24">
                                        <path
                                            d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z" />
                                    </svg>
                                    Premiere on: {{ $movie->movie_datestart }}

                                </p>
                                <p>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                        class="movie-info--svg-24">
                                        <path
                                            d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM625 177L497 305c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L591 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
                                    </svg>
                                    {{ $movie->movie_age }}
                                </p>
                            </div>

                            <div class="movie-info--desc-24">
                                <h2>INFORMATION</h2>
                                <p>Director: {{ $movie->movie_direct }}</p>
                                <p>Starring: {{ $movie->movie_actor }}</p>
                            </div>

                            <div class="movie-info--desc-24">
                                <h2>OVERVIEW</h2>
                                <p>{{ $movie->movie_desc }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="no-current-dates">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="movie-info--svg-24">
                        <path
                            d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c-9.4 9.4-9.4 24.6 0 33.9l47 47-47 47c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l47-47 47 47c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-47-47 47-47c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-47 47-47-47c-9.4-9.4-24.6-9.4-33.9 0z" />
                    </svg>
                    THERE IS CURRENTLY NO RELEASE DATES
                </div>
            </div>
    </div>
    @endforeach
    <div class="content">
        @foreach ($list_movie_now as $key => $movie)
            <div class="grid wide">
                <div class="poster col l-12 m-12 c-12">
                    <div class="row sm-gutter poster-img" id="trailer">
                        <!-- <img src="https://image.tmdb.org/t/p/original/qrkFlypxQ23Ca9iZ1h4uRysIByj.jpg" alt="" class="poster-img">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="poster-play-btn movie-info--play--button">
                            <path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c7.6-4.2 16.8-4.1 24.3 .5l144 88c7.1 4.4 11.5 12.1 11.5 20.5s-4.4 16.1-11.5 20.5l-144 88c-7.4 4.5-16.7 4.7-24.3 .5s-12.3-12.2-12.3-20.9V168c0-8.7 4.7-16.7 12.3-20.9z"/>
                        </svg> -->

                        <iframe width="100%" height="100%" src="{{ $movie->movie_iframe }}&autoplay=1&mute=1"
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

                    <a href="{{URL::to('/now-showing')}}" class="path-coming-soon" >Now Showing</a>

                    >

                    <a href="" class="path-coming-soon">{{ $movie->movie_name }}</a>
                </div>

                <div class="movie-info-24 col l-12 m-12 c-12">
                    <div class="row2 sm-gutter">
                        <div class="movie-info--content-24 col l-4 m-4 c-6">
                            <div class="movie-info--img-24">
                                <img src="{{ URL::to('public/upload/movie/' . $movie->movie_img) }}" alt=""
                                    class="movie-info--bgimg-24">
                                <img src="{{ URL::to('public/upload/movie/' . $movie->movie_img) }}" alt=""
                                    class="movie-info--fgimg-24">
                            </div>
                        </div>

                        <div class="movie-info--showtime-24 col l-7 m-4 c-6">
                            <div class="movie-info--name-24">
                                <h1>{{ $movie->movie_name }}</h1>
                            </div>

                            <div class="movie-info--info-24">
                                <p>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                        class="movie-info--svg-24">
                                        <path
                                            d="M0 80V229.5c0 17 6.7 33.3 18.7 45.3l176 176c25 25 65.5 25 90.5 0L418.7 317.3c25-25 25-65.5 0-90.5l-176-176c-12-12-28.3-18.7-45.3-18.7H48C21.5 32 0 53.5 0 80zm112 32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                                    </svg>
                                    Category: {{ $movie->movie_category }}
                                </p>
                                <p>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                        class="movie-info--svg-24">
                                        <path
                                            d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                    </svg>
                                    Length: {{ $movie->movie_time }}'
                                </p>
                                <p>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                        class="movie-info--svg-24">
                                        <path
                                            d="M512 80c8.8 0 16 7.2 16 16V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16H512zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM200 208c14.2 0 27 6.1 35.8 16c8.8 9.9 24 10.7 33.9 1.9s10.7-24 1.9-33.9c-17.5-19.6-43.1-32-71.5-32c-53 0-96 43-96 96s43 96 96 96c28.4 0 54-12.4 71.5-32c8.8-9.9 8-25-1.9-33.9s-25-8-33.9 1.9c-8.8 9.9-21.6 16-35.8 16c-26.5 0-48-21.5-48-48s21.5-48 48-48zm144 48c0-26.5 21.5-48 48-48c14.2 0 27 6.1 35.8 16c8.8 9.9 24 10.7 33.9 1.9s10.7-24 1.9-33.9c-17.5-19.6-43.1-32-71.5-32c-53 0-96 43-96 96s43 96 96 96c28.4 0 54-12.4 71.5-32c8.8-9.9 8-25-1.9-33.9s-25-8-33.9 1.9c-8.8 9.9-21.6 16-35.8 16c-26.5 0-48-21.5-48-48z" />
                                    </svg>
                                    Subtitles Available
                                </p>
                                <p>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                        class="movie-info--svg-24">
                                        <path
                                            d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z" />
                                    </svg>
                                    Premiere on: {{ $movie->movie_datestart }}

                                </p>
                                <p>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                        class="movie-info--svg-24">
                                        <path
                                            d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM625 177L497 305c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L591 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
                                    </svg>
                                    {{ $movie->movie_age }}
                                </p>
                            </div>

                            <div class="movie-info--desc-24">
                                <h2>INFORMATION</h2>
                                <p>Director: {{ $movie->movie_direct }}</p>
                                <p>Starring: {{ $movie->movie_actor }}</p>
                            </div>

                            <div class="movie-info--desc-24">
                                <h2>OVERVIEW</h2>
                                <p>{{ $movie->movie_desc }}
                                </p>
                            </div>
                            <button class="movie-info--btn-24" onclick="transfer_root('buy-ticket/{{ $movie->movie_id }}')">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                    class="movie-info--svg-24 movie-info--svg-24-btn">
                                    <path
                                        d="M64 64C28.7 64 0 92.7 0 128v64c0 8.8 7.4 15.7 15.7 18.6C34.5 217.1 48 235 48 256s-13.5 38.9-32.3 45.4C7.4 304.3 0 311.2 0 320v64c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V320c0-8.8-7.4-15.7-15.7-18.6C541.5 294.9 528 277 528 256s13.5-38.9 32.3-45.4c8.3-2.9 15.7-9.8 15.7-18.6V128c0-35.3-28.7-64-64-64H64zm64 112l0 160c0 8.8 7.2 16 16 16H432c8.8 0 16-7.2 16-16V176c0-8.8-7.2-16-16-16H144c-8.8 0-16 7.2-16 16zM96 160c0-17.7 14.3-32 32-32H448c17.7 0 32 14.3 32 32V352c0 17.7-14.3 32-32 32H128c-17.7 0-32-14.3-32-32V160z" />
                                </svg>
                                Buy Tickets
                            </button>
                        </div>
                    </div>
                </div>


            </div>
    </div>
    @endforeach
@endsection

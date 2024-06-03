@extends('layout')
@section('content')


<div class="content">
    {{-- <div class="grid wide"> --}}
        <div class="poster col l-12 m-12 c-12" style="padding:0">
            <div class="swiper">
                <div class="swiper-wrapper">
                    @foreach ($list_movie as $key=>$movie)
                    @if($movie->movie_poster!=NULL)
                    <div class="swiper-slide">
                        <div>
                            <img src="{{$movie->movie_poster}}" alt="" class="poster-img">

                            <div class="poster-desc">
                                <div class="poster-desc--interactive" >
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="poster-desc--play--button">
                                        <path onclick="PlayTrailer('{{ $movie->movie_iframe }}')" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c7.6-4.2 16.8-4.1 24.3 .5l144 88c7.1 4.4 11.5 12.1 11.5 20.5s-4.4 16.1-11.5 20.5l-144 88c-7.4 4.5-16.7 4.7-24.3 .5s-12.3-12.2-12.3-20.9V168c0-8.7 4.7-16.7 12.3-20.9z"/>
                                    </svg>
                                    <button class="poster-desc--buy--tickets--button" onclick="transfer('buy-ticket/{{ $movie->movie_id }}')">Buy tickets</button>
                                </div>

                                <div class="poster-desc--description">
                                   {{$movie->movie_desc  }}
                                </div>
                            </div>
                        </div>
                    </div>

                    @endif
                    @endforeach
                </div>

                <div id="swiper-pagination" class="swiper-pagination"></div>

                <div id="swiper-btn" class="swiper-button-prev" style="color: #deabab"></div>
                <div id="swiper-btn" class="swiper-button-next" style="color: #deabab"></div>
            </div>
        </div>
    </div>

    <div class="grid wide">
        <div class="now-showing col l-12 m-12 c-12">
            <h1 class="now-showing--header mb-air-1" >NOW SHOWING</h1>
            <div class="now-showing--movies">
                <div class="row sm-gutter" style="width:1210px">
                    @foreach($list_movie as $key => $movie_pro)
                    <div class="col l-2 m-4 c-6" onclick="transfer('buy-ticket/{{ $movie_pro->movie_id }}')">
                        <div class="now-showing--movies-single" >
                            <img src="{{ URL::to('public/upload/movie/'.$movie_pro->movie_img) }}" class="now-showing--movies-single-img">
                            <div class="now-showing--movies-single-tags">
                                <span class="now-showing--movies-single-tag--1">{{ $movie_pro -> movie_age }}</span>
                                <span class="now-showing--movies-single-tag--2">Subtitles</span>
                                <span class="now-showing--movies-single-tag--1">{{ $movie_pro -> movie_time }}'</span>
                            </div>
                            <div class="now-showing--movies-single-name">{{ $movie_pro -> movie_name }}</div>
                            <div class="now-showing--movies-single-cat">{{ $movie_pro -> movie_category }}</div>


                            <div class="now-showing--movies-single-buttons">
                                <button class="now-showing--movies-single-buy-tickets">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="now-showing--movies-single-buy-tickets--img">
                                        <path d="M64 64C28.7 64 0 92.7 0 128v64c0 8.8 7.4 15.7 15.7 18.6C34.5 217.1 48 235 48 256s-13.5 38.9-32.3 45.4C7.4 304.3 0 311.2 0 320v64c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V320c0-8.8-7.4-15.7-15.7-18.6C541.5 294.9 528 277 528 256s13.5-38.9 32.3-45.4c8.3-2.9 15.7-9.8 15.7-18.6V128c0-35.3-28.7-64-64-64H64zm64 112l0 160c0 8.8 7.2 16 16 16H432c8.8 0 16-7.2 16-16V176c0-8.8-7.2-16-16-16H144c-8.8 0-16 7.2-16 16zM96 160c0-17.7 14.3-32 32-32H448c17.7 0 32 14.3 32 32V352c0 17.7-14.3 32-32 32H128c-17.7 0-32-14.3-32-32V160z"/>
                                    </svg>

                                    BUY TICKETS
                                </button>

                                <button class="now-showing--movies-single-info"   onclick="transfer('movie/{{ $movie->movie_id }}')" class="now-showing--movies-single-buy-tickets--img">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="now-showing--chevrons-left">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="now-showing--chevron--left">
                   <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/>
                </svg>
            </div>
            <div class="now-showing--chevrons-right">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="now-showing--chevron--right">
                    <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/>
                </svg>
            </div>
            <div class="now-showing-page-num">
                <ul class="now-showing-page-num--ulist">
                    <li class="now-showing-page-num--list">
                        <a href="" class="now-showing-page-num--number"></a>
                    </li>
                    <li class="now-showing-page-num--list">
                        <a href="" class="now-showing-page-num--number"></a>
                    </li>
                    <li class="now-showing-page-num--list">
                        <a href="" class="now-showing-page-num--number"></a>
                    </li>
                    <li class="now-showing-page-num--list">
                        <a href="" class="now-showing-page-num--number"></a>
                    </li>
                    <li class="now-showing-page-num--list">
                        <a href="" class="now-showing-page-num--number"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="grid wide">
        <div class="coming-soon col l-12 m-12 c-12">
            <h1 class="coming-soon--header mb-air-1">COMING SOON</h1>
            <div class="coming-soon--movies">
                <div class="swiper">
                    <div class="swiper-wrapper a">
                        <div class="swiper-slide">
                            <div class="row sm-gutter">
                                @foreach ($list_movie_soon as $key => $movie)
                                <div class="col l-2 m-4 c-6">
                                    <div class="coming-soon--movies-single" onclick="transfer('movie/{{ $movie->movie_id }}')">
                                        <img src="{{ URL::to('public/upload/movie/'.$movie->movie_img) }}" alt="" class="coming-soon--movies-single-img">
                                        <div class="coming-soon--movies-single-tags">
                                            <span class="coming-soon--movies-single-tag--1">{{ $movie->movie_age }}</span>
                                            <span class="coming-soon--movies-single-tag--2">Subtitles</span>
                                            <span class="coming-soon--movies-single-tag--1">{{ $movie->movie_time }}'</span>
                                        </div>
                                        <div class="coming-soon--movies-single-name">{{ $movie->movie_name }}</div>
                                        <div class="coming-soon--movies-single-cat">{{ $movie->movie_category }}</div>


                                        <div class="coming-soon--movies-single-buttons">
                                            <button class="coming-soon--movies-single-details">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="coming-soon--movies-single-details--img">
                                                    <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
                                                </svg>

                                                Details
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div>

                    <div class="swiper-pagination"></div>

                    <div id="swiper-button" class="swiper-button-prev a"></div>
                    <div id="swiper-button" class="swiper-button-next a"></div>
                </div>
            </div>
            <div class="coming-soon--chevrons-left">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="coming-soon--chevron--left">
                   <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/>
                </svg>
            </div>
            <div class="coming-soon--chevrons-right">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="coming-soon--chevron--right">
                    <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/>
                </svg>
            </div>
            <div class="coming-soon-page-num">
                <ul class="coming-soon-page-num--ulist">
                    <li class="coming-soon-page-num--list">
                        <a href="" class="coming-soon-page-num--number"></a>
                    </li>
                    <li class="coming-soon-page-num--list">
                        <a href="" class="coming-soon-page-num--number"></a>
                    </li>
                    <li class="coming-soon-page-num--list">
                        <a href="" class="coming-soon-page-num--number"></a>
                    </li>
                    <li class="coming-soon-page-num--list">
                        <a href="" class="coming-soon-page-num--number"></a>
                    </li>
                    <li class="coming-soon-page-num--list">
                        <a href="" class="coming-soon-page-num--number"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection

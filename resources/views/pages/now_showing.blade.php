@extends('layout')
@section('content')


<div class="content">
    <div class="grid wide">
        <div class="path">
            <a href="{{ URL::to('/homepage') }}" class="path-home">Home</a>

            >

            <a href="" class="path-now-showing">Now showing</a>
        </div>

        <div class="now-showing col l-12 m-12 c-12">
            <h1 class="now-showing--header mb-air-1" >NOW SHOWING</h1>

            <div class="now-showing--movies">

                <div class="row sm-gutter">
                    @foreach($list_movie as $key => $movie_pro)
                    <div class="col l-2 m-4 c-6" onclick="transfer('movie/{{ $movie_pro->movie_id }}')">
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

                                <button class="now-showing--movies-single-info" class="now-showing--movies-single-buy-tickets--img">
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
        </div>

    </div>
</div>


@endsection

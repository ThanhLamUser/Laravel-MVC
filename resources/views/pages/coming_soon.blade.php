@extends('layout')
@section('content')

<div class="content">
    <div class="grid wide">
        {{-- <div class="path">
            <a href="{{ URL::to('/homepage') }}" class="path-home">Home</a>

            >

            <a href="" class="path-coming-soon">Coming soon</a>
        </div> --}}

        <div class="coming-soon col l-12 m-12 c-12 no-border">
            <h1 class="coming-soon--header  mb-air-1">COMING SOON</h1>


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
                                <div class="col l-2 m-4 c-6">
                                    <div class="coming-soon--movies-single">
                                        <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/f7QBvIzoWSJw3jWPGnZBc5vwQ0l.jpg" alt="" class="coming-soon--movies-single-img">
                                        <div class="coming-soon--movies-single-tags">
                                            <span class="coming-soon--movies-single-tag--1">PG</span>
                                            <span class="coming-soon--movies-single-tag--2">Subtitles</span>
                                            <span class="coming-soon--movies-single-tag--1">2D</span>
                                        </div>
                                        <div class="coming-soon--movies-single-name">Kung Fu Panda 4</div>
                                        <div class="coming-soon--movies-single-cat">Animation, Action, Adventure, Comedy, Family</div>


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
                                <div class="col l-2 m-4 c-6">
                                    <div class="coming-soon--movies-single">
                                        <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/31NUWjKZ7amybvaN5WGUahsDL0x.jpg" alt="" class="coming-soon--movies-single-img">
                                        <div class="coming-soon--movies-single-tags">
                                            <span class="coming-soon--movies-single-tag--1">All</span>
                                            <span class="coming-soon--movies-single-tag--2">Subtitles</span>
                                            <span class="coming-soon--movies-single-tag--1">2D</span>
                                        </div>
                                        <div class="coming-soon--movies-single-name">aespa: WORLD TOUR in cinemas</div>
                                        <div class="coming-soon--movies-single-cat">Music, Documentary</div>


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
                                <div class="col l-2 m-4 c-6">
                                    <div class="coming-soon--movies-single">
                                        <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/7Zxzf5CkEQHJHbi2IR10D9WmKJF.jpg" alt="" class="coming-soon--movies-single-img">
                                        <div class="coming-soon--movies-single-tags">
                                            <span class="coming-soon--movies-single-tag--1">PG</span>
                                            <span class="coming-soon--movies-single-tag--2">Subtitles</span>
                                            <span class="coming-soon--movies-single-tag--1">2D</span>
                                        </div>
                                        <div class="coming-soon--movies-single-name">Despicable Me 4</div>
                                        <div class="coming-soon--movies-single-cat">Animation, Family, Comedy, Adventure</div>


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
                                <div class="col l-2 m-4 c-6">
                                    <div class="coming-soon--movies-single">
                                        <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/kV6ceSPLK1f8cIjvqOmvnmBEMbD.jpg" alt="" class="coming-soon--movies-single-img">
                                        <div class="coming-soon--movies-single-tags">
                                            <span class="coming-soon--movies-single-tag--1">PG-13</span>
                                            <span class="coming-soon--movies-single-tag--2">Subtitles</span>
                                            <span class="coming-soon--movies-single-tag--1">2D</span>
                                        </div>
                                        <div class="coming-soon--movies-single-name">Venom: The Last Dance</div>
                                        <div class="coming-soon--movies-single-cat">Action, Science Fiction, Adventure</div>


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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

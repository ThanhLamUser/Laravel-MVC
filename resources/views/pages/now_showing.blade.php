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
            <h1 class="now-showing--header">NOW SHOWING</h1>

            <div class="now-showing--movies">
                <div class="row sm-gutter">
                    <div class="col l-2 m-4 c-6">
                        <div class="now-showing--movies-single">
                            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/jf3YO8hOqGHCupsREf5qymYq1n.jpg" alt="" class="now-showing--movies-single-img">
                            <div class="now-showing--movies-single-tags">
                                <span class="now-showing--movies-single-tag--1">PG-13</span>
                                <span class="now-showing--movies-single-tag--2">Subtitles</span>
                                <span class="now-showing--movies-single-tag--1">IMAX</span>
                            </div>
                            <div class="now-showing--movies-single-name">TAYLOR SWIFT | THE ERAS TOUR</div>
                            <div class="now-showing--movies-single-cat">Music</div>


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

                    <div class="col l-2 m-4 c-6">
                        <div class="now-showing--movies-single">
                            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg" alt="" class="now-showing--movies-single-img">
                            <div class="now-showing--movies-single-tags">
                                <span class="now-showing--movies-single-tag--1">PG-13</span>
                                <span class="now-showing--movies-single-tag--2">Subtitles</span>
                                <span class="now-showing--movies-single-tag--1">2D</span>
                            </div>
                            <div class="now-showing--movies-single-name">Barbie</div>
                            <div class="now-showing--movies-single-cat">Comedy, Adventure</div>


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
                    <div class="col l-2 m-4 c-6">
                        <div class="now-showing--movies-single">
                            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/8Gxv8gSFCU0XGDykEGv7zR1n2ua.jpg" alt="" class="now-showing--movies-single-img">
                            <div class="now-showing--movies-single-tags">
                                <span class="now-showing--movies-single-tag--1">R</span>
                                <span class="now-showing--movies-single-tag--2">Subtitles</span>
                                <span class="now-showing--movies-single-tag--1">2D</span>
                            </div>
                            <div class="now-showing--movies-single-name">Oppenheimer</div>
                            <div class="now-showing--movies-single-cat">Drama, History</div>


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
                    <div class="col l-2 m-4 c-6">
                        <div class="now-showing--movies-single">
                            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/qhb1qOilapbapxWQn9jtRCMwXJF.jpg" alt="" class="now-showing--movies-single-img">
                            <div class="now-showing--movies-single-tags">
                                <span class="now-showing--movies-single-tag--1">PG</span>
                                <span class="now-showing--movies-single-tag--2">Subtitles</span>
                                <span class="now-showing--movies-single-tag--1">2D</span>
                            </div>
                            <div class="now-showing--movies-single-name">Wonka</div>
                            <div class="now-showing--movies-single-cat">Comedy, Family, Fantasy</div>


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
                    <div class="col l-2 m-4 c-6">
                        <div class="now-showing--movies-single">
                            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/uS1AIL7I1Ycgs8PTfqUeN6jYNsQ.jpg" alt="" class="now-showing--movies-single-img">
                            <div class="now-showing--movies-single-tags">
                                <span class="now-showing--movies-single-tag--1">PG</span>
                                <span class="now-showing--movies-single-tag--2">Subtitles</span>
                                <span class="now-showing--movies-single-tag--1">2D</span>
                            </div>
                            <div class="now-showing--movies-single-name">Insidious: The Red Door</div>
                            <div class="now-showing--movies-single-cat">Horror, Mystery, Thriller</div>


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
                    <div class="col l-2 m-4 c-6">
                        <div class="now-showing--movies-single">
                            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/nZ7lLEdv9PKZkO6y19Z42MbFmke.jpg" alt="" class="now-showing--movies-single-img">
                            <div class="now-showing--movies-single-tags">
                                <span class="now-showing--movies-single-tag--1">12</span>
                                <span class="now-showing--movies-single-tag--2">Subtitles</span>
                                <span class="now-showing--movies-single-tag--1">2D</span>
                            </div>
                            <div class="now-showing--movies-single-name">Song of The South</div>
                            <div class="now-showing--movies-single-cat">War, Family, Drama</div>


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
                    <div class="col l-2 m-4 c-6">
                        <div class="now-showing--movies-single">
                            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/ykHBuNOJ1kKTbDsJDlHjRtm1A6w.jpg" alt="" class="now-showing--movies-single-img">
                            <div class="now-showing--movies-single-tags">
                                <span class="now-showing--movies-single-tag--1">PG</span>
                                <span class="now-showing--movies-single-tag--2">Subtitles</span>
                                <span class="now-showing--movies-single-tag--1">2D</span>
                            </div>
                            <div class="now-showing--movies-single-name">House of No Man</div>
                            <div class="now-showing--movies-single-cat">Drama, Comedy</div>


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
                    <div class="col l-2 m-4 c-6">
                        <div class="now-showing--movies-single">
                            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/A4slsppOHe3hPxpjmrmC5zUypOc.jpg" alt="" class="now-showing--movies-single-img">
                            <div class="now-showing--movies-single-tags">
                                <span class="now-showing--movies-single-tag--1">PG-13</span>
                                <span class="now-showing--movies-single-tag--2">Subtitles</span>
                                <span class="now-showing--movies-single-tag--1">2D</span>
                            </div>
                            <div class="now-showing--movies-single-name">Sister Sister 2</div>
                            <div class="now-showing--movies-single-cat">Thriller, Drama</div>


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
                    <div class="col l-2 m-4 c-6">
                        <div class="now-showing--movies-single">
                            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/ntbSqpJD8OY8rvx98iNpHVJsWjW.jpg" alt="" class="now-showing--movies-single-img">
                            <div class="now-showing--movies-single-tags">
                                <span class="now-showing--movies-single-tag--1">PG</span>
                                <span class="now-showing--movies-single-tag--2">Subtitles</span>
                                <span class="now-showing--movies-single-tag--1">2D</span>
                            </div>
                            <div class="now-showing--movies-single-name">Peach, Pho and Piano</div>
                            <div class="now-showing--movies-single-cat">War, Romance</div>


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
                    <div class="col l-2 m-4 c-6">
                        <div class="now-showing--movies-single">
                            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/tNoRpzsrOOFISEtXbllD0RgfzVt.jpg" alt="" class="now-showing--movies-single-img">
                            <div class="now-showing--movies-single-tags">
                                <span class="now-showing--movies-single-tag--1">15</span>
                                <span class="now-showing--movies-single-tag--2">Subtitles</span>
                                <span class="now-showing--movies-single-tag--1">2D</span>
                            </div>
                            <div class="now-showing--movies-single-name">The Last Wife</div>
                            <div class="now-showing--movies-single-cat">Drama, Romance</div>


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
                    <div class="col l-2 m-4 c-6">
                        <div class="now-showing--movies-single">
                            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/w3LxiVYdWWRvEVdn5RYq6jIqkb1.jpg" alt="" class="now-showing--movies-single-img">
                            <div class="now-showing--movies-single-tags">
                                <span class="now-showing--movies-single-tag--1">R</span>
                                <span class="now-showing--movies-single-tag--2">Subtitles</span>
                                <span class="now-showing--movies-single-tag--1">2D</span>
                            </div>
                            <div class="now-showing--movies-single-name too-long-title">Everything Everywhere All at Once</div>
                            <div class="now-showing--movies-single-cat">Action, Adventure, Science Fiction</div>


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
                    <div class="col l-2 m-4 c-6">
                        <div class="now-showing--movies-single">
                            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/wcTc9GveMMjAdHSlzdE0FaRCtqi.jpg" alt="" class="now-showing--movies-single-img">
                            <div class="now-showing--movies-single-tags">
                                <span class="now-showing--movies-single-tag--1">PG-13</span>
                                <span class="now-showing--movies-single-tag--2">Subtitles</span>
                                <span class="now-showing--movies-single-tag--1">2D</span>
                            </div>
                            <div class="now-showing--movies-single-name">Women Talking</div>
                            <div class="now-showing--movies-single-cat">Drama, Crime</div>


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
                    <div class="col l-2 m-4 c-6">
                        <div class="now-showing--movies-single">
                            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/qsdjk9oAKSQMWs0Vt5Pyfh6O4GZ.jpg" alt="" class="now-showing--movies-single-img">
                            <div class="now-showing--movies-single-tags">
                                <span class="now-showing--movies-single-tag--1">PG</span>
                                <span class="now-showing--movies-single-tag--2">Subtitles</span>
                                <span class="now-showing--movies-single-tag--1">2D</span>
                            </div>
                            <div class="now-showing--movies-single-name">Turning Red</div>
                            <div class="now-showing--movies-single-cat">Animation, Family, Comedy, Fantasy</div>


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
                    <div class="col l-2 m-4 c-6">
                        <div class="now-showing--movies-single">
                            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/u0XUBNQWlOvrh0Gd97ARGpIkL0.jpg" alt="" class="now-showing--movies-single-img">
                            <div class="now-showing--movies-single-tags">
                                <span class="now-showing--movies-single-tag--1">UA</span>
                                <span class="now-showing--movies-single-tag--2">Subtitles</span>
                                <span class="now-showing--movies-single-tag--1">2D</span>
                            </div>
                            <div class="now-showing--movies-single-name">RRR</div>
                            <div class="now-showing--movies-single-cat">Action, Drama</div>


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
                    <div class="col l-2 m-4 c-6">
                        <div class="now-showing--movies-single">
                            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/kCGlIMHnOm8JPXq3rXM6c5wMxcT.jpg" alt="" class="now-showing--movies-single-img">
                            <div class="now-showing--movies-single-tags">
                                <span class="now-showing--movies-single-tag--1">R</span>
                                <span class="now-showing--movies-single-tag--2">Subtitles</span>
                                <span class="now-showing--movies-single-tag--1">2D</span>
                            </div>
                            <div class="now-showing--movies-single-name">Poor Things</div>
                            <div class="now-showing--movies-single-cat">Science Fiction, Romance, Comedy</div>


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
                    <div class="col l-2 m-4 c-6">
                        <div class="now-showing--movies-single">
                            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/dD3vhyDRCCT90hf4rldHU6Wu3Va.jpg" alt="" class="now-showing--movies-single-img">
                            <div class="now-showing--movies-single-tags">
                                <span class="now-showing--movies-single-tag--1">R</span>
                                <span class="now-showing--movies-single-tag--2">Subtitles</span>
                                <span class="now-showing--movies-single-tag--1">2D</span>
                            </div>
                            <div class="now-showing--movies-single-name">Red, White & Royal Blue</div>
                            <div class="now-showing--movies-single-cat">Comedy, Romance</div>


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
                    <div class="col l-2 m-4 c-6">
                        <div class="now-showing--movies-single">
                            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/v31MsWhF9WFh7Qooq6xSBbmJxoG.jpg" alt="" class="now-showing--movies-single-img">
                            <div class="now-showing--movies-single-tags">
                                <span class="now-showing--movies-single-tag--1">R</span>
                                <span class="now-showing--movies-single-tag--2">Subtitles</span>
                                <span class="now-showing--movies-single-tag--1">2D</span>
                            </div>
                            <div class="now-showing--movies-single-name">The Menu</div>
                            <div class="now-showing--movies-single-cat">Comedy, Thriller, Horror</div>


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
                    <div class="col l-2 m-4 c-6">
                        <div class="now-showing--movies-single">
                            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/7lTnXOy0iNtBAdRP3TZvaKJ77F6.jpg" alt="" class="now-showing--movies-single-img">
                            <div class="now-showing--movies-single-tags">
                                <span class="now-showing--movies-single-tag--1">PG-13</span>
                                <span class="now-showing--movies-single-tag--2">Subtitles</span>
                                <span class="now-showing--movies-single-tag--1">2D</span>
                            </div>
                            <div class="now-showing--movies-single-name">Aquaman and the Lost Kingdom</div>
                            <div class="now-showing--movies-single-cat">Action, Adventure, Fantasy</div>


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
                    <div class="col l-2 m-4 c-6">
                        <div class="now-showing--movies-single">
                            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/fiVW06jE7z9YnO4trhaMEdclSiC.jpg" alt="" class="now-showing--movies-single-img">
                            <div class="now-showing--movies-single-tags">
                                <span class="now-showing--movies-single-tag--1">PG-13</span>
                                <span class="now-showing--movies-single-tag--2">Subtitles</span>
                                <span class="now-showing--movies-single-tag--1">2D</span>
                            </div>
                            <div class="now-showing--movies-single-name">Fast X</div>
                            <div class="now-showing--movies-single-cat">Action, Crime, Thriller</div>


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
                    <div class="col l-2 m-4 c-6">
                        <div class="now-showing--movies-single">
                            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/4Y1WNkd88JXmGfhtWR7dmDAo1T2.jpg" alt="" class="now-showing--movies-single-img">
                            <div class="now-showing--movies-single-tags">
                                <span class="now-showing--movies-single-tag--1">PG</span>
                                <span class="now-showing--movies-single-tag--2">Subtitles</span>
                                <span class="now-showing--movies-single-tag--1">2D</span>
                            </div>
                            <div class="now-showing--movies-single-name">Elemental</div>
                            <div class="now-showing--movies-single-cat">Animation, Comedy, Family, Fantasy, Romance, Adventure</div>


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
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

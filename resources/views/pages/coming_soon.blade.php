@extends('layout')
@section('content')

<div class="content">
    <div class="grid wide">
        <div class="path">
            <a href="{{ URL::to('/homepage') }}" class="path-home">Home</a>

            >

            <a href="" class="path-coming-soon">Coming soon</a>
        </div>

        <div class="coming-soon col l-12 m-12 c-12 no-border">
            <h1 class="coming-soon--header">COMING SOON</h1>

            <div class="coming-soon--movies">
                <div class="row sm-gutter">
                    <div class="col l-2 m-4 c-6">
                        <div class="coming-soon--movies-single">
                            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/pQYHouPsDw32FhDLr7E3jmw0WTk.jpg" alt="" class="coming-soon--movies-single-img">
                            <div class="coming-soon--movies-single-tags">
                                <span class="coming-soon--movies-single-tag--1">15</span>
                                <span class="coming-soon--movies-single-tag--2">Subtitles</span>
                                <span class="coming-soon--movies-single-tag--1">2D</span>
                            </div>
                            <div class="coming-soon--movies-single-name">Exhuma</div>
                            <div class="coming-soon--movies-single-cat">Mystery, Horror, Thriller</div>


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
                    <div class="col l-2 m-4 c-6">
                        <div class="coming-soon--movies-single">
                            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/uxBHXaoOvAwy4NpPpP7nNx2rXYQ.jpg" alt="" class="coming-soon--movies-single-img">
                            <div class="coming-soon--movies-single-tags">
                                <span class="coming-soon--movies-single-tag--1">R</span>
                                <span class="coming-soon--movies-single-tag--2">Subtitles</span>
                                <span class="coming-soon--movies-single-tag--1">2D</span>
                            </div>
                            <div class="coming-soon--movies-single-name">Deadpool & Wolverine</div>
                            <div class="coming-soon--movies-single-cat">Comedy, Science Fiction, Adventure</div>


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
                            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/pjnD08FlMAIXsfOLKQbvmO0f0MD.jpg" alt="" class="coming-soon--movies-single-img">
                            <div class="coming-soon--movies-single-tags">
                                <span class="coming-soon--movies-single-tag--1">12</span>
                                <span class="coming-soon--movies-single-tag--2">Subtitles</span>
                                <span class="coming-soon--movies-single-tag--1">2D - 3D</span>
                            </div>
                            <div class="coming-soon--movies-single-name">Twisters</div>
                            <div class="coming-soon--movies-single-cat">Action, Adventure, Drama</div>


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
                            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/k2L4Lsuo7dndJXBFGm2j95eTi1X.jpg" alt="" class="coming-soon--movies-single-img">
                            <div class="coming-soon--movies-single-tags">
                                <span class="coming-soon--movies-single-tag--1">R</span>
                                <span class="coming-soon--movies-single-tag--2">Subtitles</span>
                                <span class="coming-soon--movies-single-tag--1">2D</span>
                            </div>
                            <div class="coming-soon--movies-single-name">MaXXXine</div>
                            <div class="coming-soon--movies-single-cat">Crime, Horror, Thriller</div>


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
                            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/xeqXXTE1Cd3qNaAEOT6qbhhCsgJ.jpg" alt="" class="coming-soon--movies-single-img">
                            <div class="coming-soon--movies-single-tags">
                                <span class="coming-soon--movies-single-tag--1">U</span>
                                <span class="coming-soon--movies-single-tag--2">Subtitles</span>
                                <span class="coming-soon--movies-single-tag--1">2D</span>
                            </div>
                            <div class="coming-soon--movies-single-name">Inside Out 2</div>
                            <div class="coming-soon--movies-single-cat">Animation, Family, Drama, Adventure, Fantasy</div>


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
                            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/1pdfLvkbY9ohJlCjQH2CZjjYVvJ.jpg" alt="" class="coming-soon--movies-single-img">
                            <div class="coming-soon--movies-single-tags">
                                <span class="coming-soon--movies-single-tag--1">PG-13</span>
                                <span class="coming-soon--movies-single-tag--2">Subtitles</span>
                                <span class="coming-soon--movies-single-tag--1">2D</span>
                            </div>
                            <div class="coming-soon--movies-single-name">Dune: Part Two</div>
                            <div class="coming-soon--movies-single-cat">Science Fiction, Adventure</div>


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
                            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/tMefBSflR6PGQLv7WvFPpKLZkyk.jpg" alt="" class="coming-soon--movies-single-img">
                            <div class="coming-soon--movies-single-tags">
                                <span class="coming-soon--movies-single-tag--1">PG-13</span>
                                <span class="coming-soon--movies-single-tag--2">Subtitles</span>
                                <span class="coming-soon--movies-single-tag--1">2D - 3D</span>
                            </div>
                            <div class="coming-soon--movies-single-name">Godzilla x Kong: The New Empire</div>
                            <div class="coming-soon--movies-single-cat">Action, Science Fiction, Adventure, Fantasy</div>


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
                            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/9u6HEtZJdZDjPGGJq6YEuhPnoan.jpg" alt="" class="coming-soon--movies-single-img">
                            <div class="coming-soon--movies-single-tags">
                                <span class="coming-soon--movies-single-tag--1">PG-13</span>
                                <span class="coming-soon--movies-single-tag--2">Subtitles</span>
                                <span class="coming-soon--movies-single-tag--1">2D</span>
                            </div>
                            <div class="coming-soon--movies-single-name">Imaginary</div>
                            <div class="coming-soon--movies-single-cat">Horror, Mystery, Thriller</div>


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
                            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/vgJZSqKMXWDDx09iSIStGKfHMku.jpg" alt="" class="coming-soon--movies-single-img">
                            <div class="coming-soon--movies-single-tags">
                                <span class="coming-soon--movies-single-tag--1">PG</span>
                                <span class="coming-soon--movies-single-tag--2">Subtitles</span>
                                <span class="coming-soon--movies-single-tag--1">2D</span>
                            </div>
                            <div class="coming-soon--movies-single-name">Wish</div>
                            <div class="coming-soon--movies-single-cat">Animation, Family, Fantasy, Adventure</div>


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
                            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/fAjyUDKABSehK6pHWvh9ket5X3z.jpg" alt="" class="coming-soon--movies-single-img">
                            <div class="coming-soon--movies-single-tags">
                                <span class="coming-soon--movies-single-tag--1">PG-13</span>
                                <span class="coming-soon--movies-single-tag--2">Subtitles</span>
                                <span class="coming-soon--movies-single-tag--1">2D - 3D</span>
                            </div>
                            <div class="coming-soon--movies-single-name">Kingdom of the Planet of the Apes</div>
                            <div class="coming-soon--movies-single-cat">Science Fiction, Adventure, Action</div>


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
                            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/fbbj3viSUDEGT1fFFMNpHP1iUjw.jpg" alt="" class="coming-soon--movies-single-img">
                            <div class="coming-soon--movies-single-tags">
                                <span class="coming-soon--movies-single-tag--1">PG-13</span>
                                <span class="coming-soon--movies-single-tag--2">Subtitles</span>
                                <span class="coming-soon--movies-single-tag--1">2D</span>
                            </div>
                            <div class="coming-soon--movies-single-name">Mean Girls</div>
                            <div class="coming-soon--movies-single-cat">Comedy</div>


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
                            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/aciP8Km0waTLXEYf5ybFK5CSUxl.jpg" alt="" class="coming-soon--movies-single-img">
                            <div class="coming-soon--movies-single-tags">
                                <span class="coming-soon--movies-single-tag--1">R</span>
                                <span class="coming-soon--movies-single-tag--2">Subtitles</span>
                                <span class="coming-soon--movies-single-tag--1">2D</span>
                            </div>
                            <div class="coming-soon--movies-single-name">Joker: Folie à Deux</div>
                            <div class="coming-soon--movies-single-cat">Drama, Crime, Thriller</div>


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
                            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/tSPsiMHb4edeBKZZjKDmhX18Jbs.jpg" alt="" class="coming-soon--movies-single-img">
                            <div class="coming-soon--movies-single-tags">
                                <span class="coming-soon--movies-single-tag--1">PG</span>
                                <span class="coming-soon--movies-single-tag--2">Subtitles</span>
                                <span class="coming-soon--movies-single-tag--1">2D</span>
                            </div>
                            <div class="coming-soon--movies-single-name">The Garfield Movie</div>
                            <div class="coming-soon--movies-single-cat">Animation, Comedy, Family</div>


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
                            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/fdZpvODTX5wwkD0ikZNaClE4AoW.jpg" alt="" class="coming-soon--movies-single-img">
                            <div class="coming-soon--movies-single-tags">
                                <span class="coming-soon--movies-single-tag--1">R</span>
                                <span class="coming-soon--movies-single-tag--2">Subtitles</span>
                                <span class="coming-soon--movies-single-tag--1">2D</span>
                            </div>
                            <div class="coming-soon--movies-single-name">Immaculate</div>
                            <div class="coming-soon--movies-single-cat">Horror, Mystery, Thriller</div>


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
                            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/2mg6ktvWxsOG9iMBP4P1pwOYltk.jpg" alt="" class="coming-soon--movies-single-img">
                            <div class="coming-soon--movies-single-tags">
                                <span class="coming-soon--movies-single-tag--1">PG</span>
                                <span class="coming-soon--movies-single-tag--2">Subtitles</span>
                                <span class="coming-soon--movies-single-tag--1">2D</span>
                            </div>
                            <div class="coming-soon--movies-single-name">Face Off 7: One Wish</div>
                            <div class="coming-soon--movies-single-cat">Family, Drama</div>


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
                            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/j5AVKdTm8mG7tjoxIPU5V7riaDy.jpg" alt="" class="coming-soon--movies-single-img">
                            <div class="coming-soon--movies-single-tags">
                                <span class="coming-soon--movies-single-tag--1">PG</span>
                                <span class="coming-soon--movies-single-tag--2">Subtitles</span>
                                <span class="coming-soon--movies-single-tag--1">2D</span>
                            </div>
                            <div class="coming-soon--movies-single-name">Wicked</div>
                            <div class="coming-soon--movies-single-cat">Drama, Fantasy, Romance</div>


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

@endsection

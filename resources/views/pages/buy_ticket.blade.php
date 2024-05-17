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
          src="https://www.youtube.com/embed/2YS8IplgAYE?si=1G6XW1yDJtJptzJq&autoplay=1&mute=1"
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

      <a href="" class="path-coming-soon">TAYLOR SWIFT | THE ERAS TOUR</a>
    </div>

    <div class="movie-info col l-12 m-12 c-12">
      <div class="row2 sm-gutter" style="padding-right: 20px">
        <div class="movie-info--content col l-2 m-4 c-6">
          <!-- <div class="col l-2 m-4 c-6"> -->
          <div class="movie-info--img">
            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/jf3YO8hOqGHCupsREf5qymYq1n.jpg" alt=""
              class="movie-info--bgimg">
            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/jf3YO8hOqGHCupsREf5qymYq1n.jpg" alt=""
              class="movie-info--fgimg">
          </div>

          <div class="movie-info--name">
            <h1>TAYLOR SWIFT | THE ERAS TOUR</h1>
          </div>

          <div class="movie-info--info">
            <span>Category: Music</span>
            <span>Length: 2h 49m</span>
            <span>Premiere on: 08/02/2024</span>
          </div>

          <div class="movie-info--desc">
            <p>The cultural phenomenon continues on the big screen! Immerse yourself in this once-in-a-lifetime
              concert film experience
              with a breathtaking, cinematic view of the history-making tour.
            </p>
          </div>
          <!-- </div> -->
        </div>

        <div class="movie-info--showtime col l-10 m-4 c-6" style="padding-right: 0">
          <!-- <div class="col l-10 m-4 c-6"> -->
          <h1 class="movie-info--showtimes">SHOWTIMES</h1>
{{--
          <button class="movie-info--location">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="movie-info--location-svg">
              <path
                d="M408 120c0 54.6-73.1 151.9-105.2 192c-7.7 9.6-22 9.6-29.6 0C241.1 271.9 168 174.6 168 120C168 53.7 221.7 0 288 0s120 53.7 120 120zm8 80.4c3.5-6.9 6.7-13.8 9.6-20.6c.5-1.2 1-2.5 1.5-3.7l116-46.4C558.9 123.4 576 135 576 152V422.8c0 9.8-6 18.6-15.1 22.3L416 503V200.4zM137.6 138.3c2.4 14.1 7.2 28.3 12.8 41.5c2.9 6.8 6.1 13.7 9.6 20.6V451.8L32.9 502.7C17.1 509 0 497.4 0 480.4V209.6c0-9.8 6-18.6 15.1-22.3l122.6-49zM327.8 332c13.9-17.4 35.7-45.7 56.2-77V504.3L192 449.4V255c20.5 31.3 42.3 59.6 56.2 77c20.5 25.6 59.1 25.6 79.6 0zM288 152a40 40 0 1 0 0-80 40 40 0 1 0 0 80z" />
            </svg>

            Choose location
          </button> --}}

          <div class="movie-info--dates">
            <div class="swiper">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                  <ul class="movie-info--dates-list">
                    <li class="movie-info--date" onclick="toggleMIH()">
                      <div data-value="36" data-value1="09/02/2024" class="movie-info--option"
                        id="movie-info--option0"
                        onclick="toggleFocusMIO(this), sliderChange(this.dataset.value), updateSticky2('movie-info--option0')">
                        <p>Monday</p>
                        <span>09</span>
                        <p>February</p>
                      </div>
                    </li>
                    <li class="movie-info--date" onclick="toggleMIH()">
                      <div data-value="139" data-value1="10/02/2024" class="movie-info--option"
                        id="movie-info--option1"
                        onclick="toggleFocusMIO(this), sliderChange(this.dataset.value), updateSticky2('movie-info--option1')">
                        <p>Tuesday</p>
                        <span>10</span>
                        <p>February</p>
                      </div>
                    </li>
                    <li class="movie-info--date" onclick="toggleMIH()">
                      <div data-value="250" data-value1="11/02/2024" class="movie-info--option"
                        id="movie-info--option2"
                        onclick="toggleFocusMIO(this), sliderChange(this.dataset.value), updateSticky2('movie-info--option2')">
                        <p>Wednesday</p>
                        <span>11</span>
                        <p>February</p>
                      </div>
                    </li>
                    <li class="movie-info--date" onclick="toggleMIH()">
                      <div data-value="366" data-value1="12/02/2024" class="movie-info--option"
                        id="movie-info--option3"
                        onclick="toggleFocusMIO(this), sliderChange(this.dataset.value), updateSticky2('movie-info--option3')">
                        <p>Thursday</p>
                        <span>12</span>
                        <p>February</p>
                      </div>
                    </li>
                    <li class="movie-info--date" onclick="toggleMIH()">
                      <div data-value="471" data-value1="13/02/2024" class="movie-info--option"
                        id="movie-info--option4"
                        onclick="toggleFocusMIO(this), sliderChange(this.dataset.value), updateSticky2('movie-info--option4')">
                        <p>Friday</p>
                        <span>13</span>
                        <p>February</p>
                      </div>
                    </li>
                    <li class="movie-info--date" onclick="toggleMIH()">
                      <div data-value="574" data-value1="14/02/2024" class="movie-info--option"
                        id="movie-info--option5"
                        onclick="toggleFocusMIO(this), sliderChange(this.dataset.value), updateSticky2('movie-info--option5')">
                        <p>Saturday</p>
                        <span>14</span>
                        <p>February</p>
                      </div>
                    </li>
                    <li class="movie-info--date" onclick="toggleMIH()">
                      <div data-value="676" data-value1="15/02/2024" class="movie-info--option"
                        id="movie-info--option6"
                        onclick="toggleFocusMIO(this), sliderChange(this.dataset.value), updateSticky2('movie-info--option6')">
                        <p>Sunday</p>
                        <span>15</span>
                        <p>February</p>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="swiper-slide">
                  <ul class="movie-info--dates-list">
                    <li class="movie-info--date" onclick="toggleMIH()">
                      <div data-value="36" data-value1="16/02/2024" class="movie-info--option"
                        id="movie-info--option7"
                        onclick="toggleFocusMIO(this), sliderChange(this.dataset.value), updateSticky2('movie-info--option7')">
                        <p>Monday</p>
                        <span>16</span>
                        <p>February</p>
                      </div>
                    </li>
                    <li class="movie-info--date" onclick="toggleMIH()">
                      <div data-value="139" data-value1="17/02/2024" class="movie-info--option"
                        id="movie-info--option8"
                        onclick="toggleFocusMIO(this), sliderChange(this.dataset.value), updateSticky2('movie-info--option8')">
                        <p>Tuesday</p>
                        <span>17</span>
                        <p>February</p>
                      </div>
                    </li>
                    <li class="movie-info--date" onclick="toggleMIH()">
                      <div data-value="250" data-value1="18/02/2024" class="movie-info--option"
                        id="movie-info--option9"
                        onclick="toggleFocusMIO(this), sliderChange(this.dataset.value), updateSticky2('movie-info--option9')">
                        <p>Wednesday</p>
                        <span>18</span>
                        <p>February</p>
                      </div>
                    </li>
                    <li class="movie-info--date" onclick="toggleMIH()">
                      <div data-value="366" data-value1="19/02/2024" class="movie-info--option"
                        id="movie-info--option10"
                        onclick="toggleFocusMIO(this), sliderChange(this.dataset.value), updateSticky2('movie-info--option10')">
                        <p>Thursday</p>
                        <span>19</span>
                        <p>February</p>
                      </div>
                    </li>
                    <li class="movie-info--date" onclick="toggleMIH()">
                      <div data-value="471" data-value1="20/02/2024" class="movie-info--option"
                        id="movie-info--option11"
                        onclick="toggleFocusMIO(this), sliderChange(this.dataset.value), updateSticky2('movie-info--option11')">
                        <p>Friday</p>
                        <span>20</span>
                        <p>February</p>
                      </div>
                    </li>
                    <li class="movie-info--date" onclick="toggleMIH()">
                      <div data-value="574" data-value1="21/02/2024" class="movie-info--option"
                        id="movie-info--option12"
                        onclick="toggleFocusMIO(this), sliderChange(this.dataset.value), updateSticky2('movie-info--option12')">
                        <p>Saturday</p>
                        <span>21</span>
                        <p>February</p>
                      </div>
                    </li>
                    <li class="movie-info--date" onclick="toggleMIH()">
                      <div data-value="676" data-value1="22/02/2024" class="movie-info--option"
                        id="movie-info--option13"
                        onclick="toggleFocusMIO(this), sliderChange(this.dataset.value), updateSticky2('movie-info--option13')">
                        <p>Sunday</p>
                        <span>22</span>
                        <p>February</p>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="swiper-slide">
                  <ul class="movie-info--dates-list">
                    <li class="movie-info--date" onclick="toggleMIH()">
                      <div data-value="36" data-value1="23/02/2024" class="movie-info--option"
                        id="movie-info--option11"
                        onclick="toggleFocusMIO(this), sliderChange(this.dataset.value), updateSticky2('movie-info--option11')">
                        <p>Monday</p>
                        <span>23</span>
                        <p>February</p>
                      </div>
                    </li>
                    <li class="movie-info--date" onclick="toggleMIH()">
                      <div data-value="139" data-value1="24/02/2024" class="movie-info--option"
                        id="movie-info--option12"
                        onclick="toggleFocusMIO(this), sliderChange(this.dataset.value), updateSticky2('movie-info--option12')">
                        <p>Tuesday</p>
                        <span>24</span>
                        <p>February</p>
                      </div>
                    </li>
                    <li class="movie-info--date" onclick="toggleMIH()">
                      <div data-value="250" data-value1="25/02/2024" class="movie-info--option"
                        id="movie-info--option13"
                        onclick="toggleFocusMIO(this), sliderChange(this.dataset.value), updateSticky13('movie-info--option2')">
                        <p>Wednesday</p>
                        <span>25</span>
                        <p>February</p>
                      </div>
                    </li>
                    <li class="movie-info--date" onclick="toggleMIH()">
                      <div data-value="366" data-value1="26/02/2024" class="movie-info--option"
                        id="movie-info--option14"
                        onclick="toggleFocusMIO(this), sliderChange(this.dataset.value), updateSticky2('movie-info--option14')">
                        <p>Thursday</p>
                        <span>26</span>
                        <p>February</p>
                      </div>
                    </li>
                    <li class="movie-info--date" onclick="toggleMIH()">
                      <div data-value="471" data-value1="27/02/2024" class="movie-info--option"
                        id="movie-info--option15"
                        onclick="toggleFocusMIO(this), sliderChange(this.dataset.value), updateSticky2('movie-info--option15')">
                        <p>Friday</p>
                        <span>27</span>
                        <p>February</p>
                      </div>
                    </li>
                    <li class="movie-info--date" onclick="toggleMIH()">
                      <div data-value="574" data-value1="28/02/2024" class="movie-info--option"
                        id="movie-info--option16"
                        onclick="toggleFocusMIO(this), sliderChange(this.dataset.value), updateSticky2('movie-info--option16')">
                        <p>Saturday</p>
                        <span>28</span>
                        <p>February</p>
                      </div>
                    </li>
                    <li class="movie-info--date" onclick="toggleMIH()">
                      <div data-value="676" data-value1="29/02/2024" class="movie-info--option"
                        id="movie-info--option17"
                        onclick="toggleFocusMIO(this), sliderChange(this.dataset.value), updateSticky2('movie-info--option17')">
                        <p>Sunday</p>
                        <span>29</span>
                        <p>February</p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- If we need navigation buttons -->
              <div id="swiper-button" class="swiper-button-prev"></div>
              <div id="swiper-button" class="swiper-button-next"></div>
            </div>

            <div class="movie-info--slider">
              <input type="range" min="0" max="700" value="1" class="slider" id="myRange" onclick="tell()">
            </div>

            <div class="movie-info--hours" id="movie-info--hours-1">
              <div class="movie-info--hours-type">
                <p>2D - Subtitles</p>
              </div>

              <ul class="movie-info--hours-ulist">
                <li class="movie-info--hours-list">
                  <button value="2D - Subtitles" data-value1="Screen 01" data-value2="10:25"
                    class="movie-info--hours-option" id="movie-info--hours-option1"
                    onclick="toggleFocusMFH(this), updateSticky('movie-info--hours-option1')">10:25</button>
                </li>
                <li class="movie-info--hours-list">
                  <button value="2D - Subtitles" data-value1="Screen 02" data-value2="11:40"
                    class="movie-info--hours-option" id="movie-info--hours-option2"
                    onclick="toggleFocusMFH(this), updateSticky('movie-info--hours-option2')">11:40</button>
                </li>
                <li class="movie-info--hours-list">
                  <button value="2D - Subtitles" data-value1="Screen 03" data-value2="12:45"
                    class="movie-info--hours-option" id="movie-info--hours-option3"
                    onclick="toggleFocusMFH(this), updateSticky('movie-info--hours-option3')">12:45</button>
                </li>
                <li class="movie-info--hours-list">
                  <button value="2D - Subtitles" data-value1="Screen 04" data-value2="16:05"
                    class="movie-info--hours-option" id="movie-info--hours-option4"
                    onclick="toggleFocusMFH(this), updateSticky('movie-info--hours-option4')">16:05</button>
                </li>
                <li class="movie-info--hours-list">
                  <button value="2D - Subtitles" data-value1="Screen 05" data-value2="18:45"
                    class="movie-info--hours-option" id="movie-info--hours-option5"
                    onclick="toggleFocusMFH(this), updateSticky('movie-info--hours-option5')">18:45</button>
                </li>
              </ul>
            </div>

            <div class="movie-info--hours" id="movie-info--hours-2">
              <div class="movie-info--hours-type">
                <p>2D - Voiceover</p>
              </div>

              <ul class="movie-info--hours-ulist">
                <li class="movie-info--hours-list">
                  <button value="2D - Voiceover" data-value1="Screen 02" data-value2="10:35"
                    class="movie-info--hours-option" id="movie-info--hours-option6"
                    onclick="toggleFocusMFH(this), updateSticky('movie-info--hours-option6')">10:35</button>
                </li>
                <li class="movie-info--hours-list">
                  <button value="2D - Voiceover" data-value1="Screen 03" data-value2="14:55"
                    class="movie-info--hours-option" id="movie-info--hours-option7"
                    onclick="toggleFocusMFH(this), updateSticky('movie-info--hours-option7')">14:55</button>
                </li>
                <li class="movie-info--hours-list">
                  <button value="2D - Voiceover" data-value1="Screen 04" data-value2="15:20"
                    class="movie-info--hours-option" id="movie-info--hours-option8"
                    onclick="toggleFocusMFH(this), updateSticky('movie-info--hours-option8')">15:20</button>
                </li>
                <li class="movie-info--hours-list">
                  <button value="2D - Voiceover" data-value1="Screen 05" data-value2="17:45"
                    class="movie-info--hours-option" id="movie-info--hours-option9"
                    onclick="toggleFocusMFH(this), updateSticky('movie-info--hours-option9')">17:45</button>
                </li>
                <li class="movie-info--hours-list">
                  <button value="2D - Voiceover" data-value1="Screen 01" data-value2="19:10"
                    class="movie-info--hours-option" id="movie-info--hours-option0"
                    onclick="toggleFocusMFH(this), updateSticky('movie-info--hours-option0')">19:10</button>
                </li>
              </ul>
            </div>
            <!-- </div> -->
          </div>
        </div>
      </div>

      <div class="select-ticket col l-12 m-12 c-12">
        <div class="row sm-gutter">
          <div class="select-ticket--container col l-12 m-4 c-6">
            <h1 class="select-ticket--heading">SELECT TICKET(S)</h1>

            <div class="select-ticket--content">
              <div class="ticket">
                <h2>Student</h2>
                <h4>Single</h4>
                <h2>45.000đ</h2>
                <div class="buy-ticket">
                  <div class="minus-btn" onclick="decrByOne('quantity-field1'), tempPriceCalc()">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="buy-ticket--svg">
                      <path
                        d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                    </svg>
                  </div>
                  <input type="number" step="1" value="0" name="quantity" readonly id="quantity-field1">
                  <div class="plus-btn" onclick="checkTicketAmount('quantity-field1'), tempPriceCalc()">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="buy-ticket--svg">
                      <path
                        d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                    </svg>
                  </div>
                </div>
              </div>
              <div class="ticket">
                <h2>Adult</h2>
                <h4>Single</h4>
                <h2>90.000đ</h2>
                <div class="buy-ticket">
                  <div class="minus-btn" onclick="decrByOne('quantity-field2'), tempPriceCalc()">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="buy-ticket--svg">
                      <path
                        d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                    </svg>
                  </div>
                  <input type="number" step="1" value="0" name="quantity" readonly id="quantity-field2">
                  <div class="plus-btn" onclick="checkTicketAmount('quantity-field2'), tempPriceCalc()">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="buy-ticket--svg">
                      <path
                        d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                    </svg>
                  </div>
                </div>
              </div>
              <div class="ticket">
                <h2>Adult</h2>
                <h4>Couple</h4>
                <h2>180.000đ</h2>
                <div class="buy-ticket">
                  <div class="minus-btn" onclick="decrByOne('quantity-field3'), tempPriceCalc()">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="buy-ticket--svg">
                      <path
                        d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                    </svg>
                  </div>
                  <input type="number" step="1" value="0" name="quantity" readonly id="quantity-field3">
                  <div class="plus-btn" onclick="checkTicketAmount('quantity-field3'), tempPriceCalc()">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="buy-ticket--svg">
                      <path
                        d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                    </svg>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="choose-seat col l-12 m-12 c-12">
        <div class="row sm-gutter">
          <div class="choose-seat--container col l-12 m-4 c-6">
            <h1 class="choose-seat--heading">CHOOSE YOUR SEAT(S)</h1>

            <div class="choose-seat--screen">
              <p>SCREEN</p>
            </div>

            <div class="choose-seat--content">
              <div class="choose-seat--row">
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat1')" id="seat1"
                  class="choose-seat--seat norm">A1</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat2')" id="seat2"
                  class="choose-seat--seat norm">A2</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat3')" id="seat3"
                  class="choose-seat--seat norm">A3</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat4')" id="seat4"
                  class="choose-seat--seat norm">A4</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat5')" id="seat5"
                  class="choose-seat--seat norm">A5</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat6')" id="seat6"
                  class="choose-seat--seat norm">A6</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat7')" id="seat7"
                  class="choose-seat--seat norm">A7</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat8')" id="seat8"
                  class="choose-seat--seat norm">A8</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat9')" id="seat9"
                  class="choose-seat--seat norm">A9</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat10')" id="seat10"
                  class="choose-seat--seat selected">A10</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat11')" id="seat11"
                  class="choose-seat--seat selected">A11</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat12')" id="seat12"
                  class="choose-seat--seat selected">A12</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat13')" id="seat13"
                  class="choose-seat--seat selected">A13</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat14')" id="seat14"
                  class="choose-seat--seat norm">A14</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat15')" id="seat15"
                  class="choose-seat--seat norm">A15</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat16')" id="seat16"
                  class="choose-seat--seat norm">A16</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat17')" id="seat17"
                  class="choose-seat--seat norm">A17</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat18')" id="seat18"
                  class="choose-seat--seat norm">A18</div>
              </div>
              <div class="choose-seat--row">
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat19')" id="seat19"
                  class="choose-seat--seat norm">B1</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat20')" id="seat20"
                  class="choose-seat--seat norm">B2</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat21')" id="seat21"
                  class="choose-seat--seat selected">B3</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat22')" id="seat22"
                  class="choose-seat--seat selected">B4</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat23')" id="seat23"
                  class="choose-seat--seat selected">B5</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat24')" id="seat24"
                  class="choose-seat--seat norm">B6</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat25')" id="seat25"
                  class="choose-seat--seat norm">B7</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat26')" id="seat26"
                  class="choose-seat--seat norm">B8</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat27')" id="seat27"
                  class="choose-seat--seat norm">B9</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat28')" id="seat28"
                  class="choose-seat--seat norm">B10</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat29')" id="seat29"
                  class="choose-seat--seat norm">B11</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat30')" id="seat30"
                  class="choose-seat--seat norm">B12</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat31')" id="seat31"
                  class="choose-seat--seat norm">B13</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat32')" id="seat32"
                  class="choose-seat--seat norm">B14</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat33')" id="seat33"
                  class="choose-seat--seat norm">B15</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat34')" id="seat34"
                  class="choose-seat--seat norm">B16</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat35')" id="seat35"
                  class="choose-seat--seat norm">B17</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat36')" id="seat36"
                  class="choose-seat--seat norm">B18</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat37')" id="seat37"
                  class="choose-seat--seat norm">B19</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat38')" id="seat38"
                  class="choose-seat--seat norm">B20</div>
              </div>
              <div class="choose-seat--row">
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat39')" id="seat39"
                  class="choose-seat--seat norm">C1</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat40')" id="seat40"
                  class="choose-seat--seat norm">C2</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat41')" id="seat41"
                  class="choose-seat--seat norm">C3</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat42')" id="seat42"
                  class="choose-seat--seat norm">C4</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat43')" id="seat43"
                  class="choose-seat--seat norm">C5</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat44')" id="seat44"
                  class="choose-seat--seat norm">C6</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat45')" id="seat45"
                  class="choose-seat--seat norm">C7</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat46')" id="seat46"
                  class="choose-seat--seat norm">C8</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat47')" id="seat47"
                  class="choose-seat--seat norm">C9</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat48')" id="seat48"
                  class="choose-seat--seat norm">C10</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat49')" id="seat49"
                  class="choose-seat--seat norm">C11</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat50')" id="seat50"
                  class="choose-seat--seat selected">C12</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat51')" id="seat51"
                  class="choose-seat--seat selected">C13</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat52')" id="seat52"
                  class="choose-seat--seat selected">C14</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat53')" id="seat53"
                  class="choose-seat--seat norm">C15</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat54')" id="seat54"
                  class="choose-seat--seat norm">C16</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat55')" id="seat55"
                  class="choose-seat--seat norm">C17</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat56')" id="seat56"
                  class="choose-seat--seat norm">C18</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat57')" id="seat57"
                  class="choose-seat--seat norm">C19</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat58')" id="seat58"
                  class="choose-seat--seat norm">C20</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat59')" id="seat59"
                  class="choose-seat--seat norm">C21</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat60')" id="seat60"
                  class="choose-seat--seat norm">C22</div>
              </div>
              <div class="choose-seat--row">
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat61')" id="seat61"
                  class="choose-seat--seat norm">D1</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat62')" id="seat62"
                  class="choose-seat--seat norm">D2</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat63')" id="seat63"
                  class="choose-seat--seat norm">D3</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat64')" id="seat64"
                  class="choose-seat--seat norm">D4</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat65')" id="seat65"
                  class="choose-seat--seat selected">D5</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat66')" id="seat66"
                  class="choose-seat--seat selected">D6</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat67')" id="seat67"
                  class="choose-seat--seat vip">D7</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat68')" id="seat68"
                  class="choose-seat--seat vip">D8</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat69')" id="seat69"
                  class="choose-seat--seat vip">D9</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat70')" id="seat70"
                  class="choose-seat--seat vip">D10</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat71')" id="seat71"
                  class="choose-seat--seat vip">D11</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat72')" id="seat72"
                  class="choose-seat--seat vip">D12</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat73')" id="seat73"
                  class="choose-seat--seat vip">D13</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat74')" id="seat74"
                  class="choose-seat--seat vip">D14</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat75')" id="seat75"
                  class="choose-seat--seat selected">D15</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat76')" id="seat76"
                  class="choose-seat--seat selected">D16</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat77')" id="seat77"
                  class="choose-seat--seat vip">D17</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat78')" id="seat78"
                  class="choose-seat--seat norm">D18</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat79')" id="seat79"
                  class="choose-seat--seat norm">D19</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat80')" id="seat80"
                  class="choose-seat--seat norm">D20</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat81')" id="seat81"
                  class="choose-seat--seat norm">D21</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat82')" id="seat82"
                  class="choose-seat--seat norm">D22</div>
              </div>
              <div class="choose-seat--row">
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat83')" id="seat83"
                  class="choose-seat--seat norm">E1</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat84')" id="seat84"
                  class="choose-seat--seat norm">E2</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat85')" id="seat85"
                  class="choose-seat--seat norm">E3</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat86')" id="seat86"
                  class="choose-seat--seat norm">E4</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat87')" id="seat87"
                  class="choose-seat--seat norm">E5</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat88')" id="seat88"
                  class="choose-seat--seat norm">E6</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat89')" id="seat89"
                  class="choose-seat--seat norm">E7</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat90')" id="seat90"
                  class="choose-seat--seat selected">E8</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat91')" id="seat91"
                  class="choose-seat--seat selected">E9</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat92')" id="seat92"
                  class="choose-seat--seat selected">E10</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat93')" id="seat93"
                  class="choose-seat--seat selected">E11</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat94')" id="seat94"
                  class="choose-seat--seat selected">E12</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat95')" id="seat95"
                  class="choose-seat--seat vip">E13</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat96')" id="seat96"
                  class="choose-seat--seat vip">E14</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat97')" id="seat97"
                  class="choose-seat--seat vip">E15</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat98')" id="seat98"
                  class="choose-seat--seat vip">E16</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat99')" id="seat99"
                  class="choose-seat--seat vip">E17</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat100')" id="seat100"
                  class="choose-seat--seat vip">E18</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat101')" id="seat101"
                  class="choose-seat--seat norm">E19</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat102')" id="seat102"
                  class="choose-seat--seat norm">E20</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat103')" id="seat103"
                  class="choose-seat--seat norm">E21</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat104')" id="seat104"
                  class="choose-seat--seat norm">E22</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat105')" id="seat105"
                  class="choose-seat--seat norm">E23</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat106')" id="seat106"
                  class="choose-seat--seat norm">E24</div>

              </div>
              <div class="choose-seat--row">
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat107')" id="seat107"
                  class="choose-seat--seat norm">F1</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat108')" id="seat108"
                  class="choose-seat--seat norm">F2</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat109')" id="seat109"
                  class="choose-seat--seat norm">F3</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat110')" id="seat110"
                  class="choose-seat--seat norm">F4</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat111')" id="seat111"
                  class="choose-seat--seat norm">F5</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat112')" id="seat112"
                  class="choose-seat--seat norm">F6</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat113')" id="seat113"
                  class="choose-seat--seat norm">F7</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat114')" id="seat114"
                  class="choose-seat--seat vip">F8</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat115')" id="seat115"
                  class="choose-seat--seat vip">F9</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat116')" id="seat116"
                  class="choose-seat--seat vip">F10</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat117')" id="seat117"
                  class="choose-seat--seat vip">F11</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat118')" id="seat118"
                  class="choose-seat--seat selected">F12</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat119')" id="seat119"
                  class="choose-seat--seat vip">F13</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat120')" id="seat120"
                  class="choose-seat--seat vip">F14</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat121')" id="seat121"
                  class="choose-seat--seat selected">F15</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat122')" id="seat122"
                  class="choose-seat--seat vip">F16</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat123')" id="seat123"
                  class="choose-seat--seat vip">F17</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat124')" id="seat124"
                  class="choose-seat--seat vip">F18</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat125')" id="seat125"
                  class="choose-seat--seat norm">F19</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat126')" id="seat126"
                  class="choose-seat--seat norm">F20</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat127')" id="seat127"
                  class="choose-seat--seat norm">F21</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat128')" id="seat128"
                  class="choose-seat--seat norm">F22</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat129')" id="seat129"
                  class="choose-seat--seat norm">F23</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat130')" id="seat130"
                  class="choose-seat--seat norm">F24</div>
              </div>
              <div class="choose-seat--row">
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat131')" id="seat131"
                  class="choose-seat--seat norm">G1</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat132')" id="seat132"
                  class="choose-seat--seat norm">G2</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat133')" id="seat133"
                  class="choose-seat--seat norm">G3</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat134')" id="seat134"
                  class="choose-seat--seat norm">G4</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat135')" id="seat135"
                  class="choose-seat--seat norm">G5</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat136')" id="seat136"
                  class="choose-seat--seat norm">G6</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat137')" id="seat137"
                  class="choose-seat--seat norm">G7</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat138')" id="seat138"
                  class="choose-seat--seat vip">G8</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat139')" id="seat139"
                  class="choose-seat--seat vip">G9</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat140')" id="seat140"
                  class="choose-seat--seat vip">G10</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat141')" id="seat141"
                  class="choose-seat--seat vip">G11</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat142')" id="seat142"
                  class="choose-seat--seat vip">G12</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat143')" id="seat143"
                  class="choose-seat--seat vip">G13</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat144')" id="seat144"
                  class="choose-seat--seat vip">G14</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat145')" id="seat145"
                  class="choose-seat--seat vip">G15</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat146')" id="seat146"
                  class="choose-seat--seat selected">G16</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat147')" id="seat147"
                  class="choose-seat--seat selected">G17</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat148')" id="seat148"
                  class="choose-seat--seat selected">G18</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat149')" id="seat149"
                  class="choose-seat--seat norm">G19</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat150')" id="seat150"
                  class="choose-seat--seat norm">G20</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat151')" id="seat151"
                  class="choose-seat--seat selected">G21</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat152')" id="seat152"
                  class="choose-seat--seat selected">G22</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat153')" id="seat153"
                  class="choose-seat--seat selected">G23</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat154')" id="seat154"
                  class="choose-seat--seat norm">G24</div>

              </div>
              <div class="choose-seat--row">
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat155')" id="seat155"
                  class="choose-seat--seat norm">H1</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat156')" id="seat156"
                  class="choose-seat--seat norm">H2</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat157')" id="seat157"
                  class="choose-seat--seat norm">H3</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat158')" id="seat158"
                  class="choose-seat--seat norm">H4</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat159')" id="seat159"
                  class="choose-seat--seat norm">H5</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat160')" id="seat160"
                  class="choose-seat--seat norm">H6</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat161')" id="seat161"
                  class="choose-seat--seat norm">H7</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat162')" id="seat162"
                  class="choose-seat--seat vip">H8</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat163')" id="seat163"
                  class="choose-seat--seat selected">H9</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat164')" id="seat164"
                  class="choose-seat--seat selected">H10</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat165')" id="seat165"
                  class="choose-seat--seat selected">H11</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat166')" id="seat166"
                  class="choose-seat--seat selected">H12</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat167')" id="seat167"
                  class="choose-seat--seat selected">H13</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat168')" id="seat168"
                  class="choose-seat--seat selected">H14</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat169')" id="seat169"
                  class="choose-seat--seat selected">H15</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat170')" id="seat170"
                  class="choose-seat--seat selected">H16</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat171')" id="seat171"
                  class="choose-seat--seat selected">H17</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat172')" id="seat172"
                  class="choose-seat--seat vip">H18</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat173')" id="seat173"
                  class="choose-seat--seat norm">H19</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat174')" id="seat174"
                  class="choose-seat--seat norm">H20</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat175')" id="seat175"
                  class="choose-seat--seat norm">H21</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat176')" id="seat176"
                  class="choose-seat--seat norm">H22</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat177')" id="seat177"
                  class="choose-seat--seat norm">H23</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat178')" id="seat178"
                  class="choose-seat--seat norm">H24</div>
              </div>
              <div class="choose-seat--row">
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat179')" id="seat179"
                  class="choose-seat--seat norm">I1</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat180')" id="seat180"
                  class="choose-seat--seat norm">I2</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat181')" id="seat181"
                  class="choose-seat--seat norm">I3</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat182')" id="seat182"
                  class="choose-seat--seat norm">I4</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat183')" id="seat183"
                  class="choose-seat--seat norm">I5</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat184')" id="seat184"
                  class="choose-seat--seat selected">I6</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat185')" id="seat185"
                  class="choose-seat--seat selected">I7</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat186')" id="seat186"
                  class="choose-seat--seat selected">I8</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat187')" id="seat187"
                  class="choose-seat--seat selected">I9</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat188')" id="seat188"
                  class="choose-seat--seat selected">I10</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat189')" id="seat189"
                  class="choose-seat--seat selected">I11</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat190')" id="seat190"
                  class="choose-seat--seat selected">I12</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat191')" id="seat191"
                  class="choose-seat--seat selected">I13</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat192')" id="seat192"
                  class="choose-seat--seat selected">I14</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat193')" id="seat193"
                  class="choose-seat--seat selected">I15</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat194')" id="seat194"
                  class="choose-seat--seat selected">I16</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat195')" id="seat195"
                  class="choose-seat--seat norm">I17</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat196')" id="seat196"
                  class="choose-seat--seat norm">I18</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat197')" id="seat197"
                  class="choose-seat--seat norm">I19</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat198')" id="seat198"
                  class="choose-seat--seat norm">I20</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat199')" id="seat199"
                  class="choose-seat--seat norm">I21</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat200')" id="seat200"
                  class="choose-seat--seat norm">I22</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat201')" id="seat201"
                  class="choose-seat--seat norm">I23</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat202')" id="seat202"
                  class="choose-seat--seat norm">I24</div>

              </div>
              <div class="choose-seat--row">
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat203')" id="seat203"
                  class="choose-seat--seat norm">J1</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat204')" id="seat204"
                  class="choose-seat--seat norm">J2</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat205')" id="seat205"
                  class="choose-seat--seat norm">J3</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat206')" id="seat206"
                  class="choose-seat--seat norm">J4</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat207')" id="seat207"
                  class="choose-seat--seat norm">J5</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat208')" id="seat208"
                  class="choose-seat--seat selected">J6</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat209')" id="seat209"
                  class="choose-seat--seat selected">J7</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat210')" id="seat210"
                  class="choose-seat--seat selected">J8</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat211')" id="seat211"
                  class="choose-seat--seat selected">J9</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat212')" id="seat212"
                  class="choose-seat--seat selected">J10</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat213')" id="seat213"
                  class="choose-seat--seat selected">J11</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat214')" id="seat214"
                  class="choose-seat--seat selected">J12</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat215')" id="seat215"
                  class="choose-seat--seat selected">J13</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat216')" id="seat216"
                  class="choose-seat--seat selected">J14</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat217')" id="seat217"
                  class="choose-seat--seat selected">J15</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat218')" id="seat218"
                  class="choose-seat--seat selected">J16</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat219')" id="seat219"
                  class="choose-seat--seat norm">J17</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat220')" id="seat220"
                  class="choose-seat--seat norm">J18</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat221')" id="seat221"
                  class="choose-seat--seat norm">J19</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat222')" id="seat222"
                  class="choose-seat--seat norm">J20</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat223')" id="seat223"
                  class="choose-seat--seat norm">J21</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat224')" id="seat224"
                  class="choose-seat--seat norm">J22</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat225')" id="seat225"
                  class="choose-seat--seat norm">J23</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat226')" id="seat226"
                  class="choose-seat--seat norm">J24</div>
              </div>
              <div class="choose-seat--row">
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat227')" id="seat227"
                  class="choose-seat--seat norm">K1</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat228')" id="seat228"
                  class="choose-seat--seat norm">K2</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat229')" id="seat229"
                  class="choose-seat--seat norm">K3</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat230')" id="seat230"
                  class="choose-seat--seat norm">K4</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat231')" id="seat231"
                  class="choose-seat--seat norm">K5</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat232')" id="seat232"
                  class="choose-seat--seat norm">K6</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat233')" id="seat233"
                  class="choose-seat--seat selected">K7</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat234')" id="seat234"
                  class="choose-seat--seat selected">K8</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat235')" id="seat235"
                  class="choose-seat--seat selected">K9</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat236')" id="seat236"
                  class="choose-seat--seat selected">K10</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat237')" id="seat237"
                  class="choose-seat--seat selected">K11</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat238')" id="seat238"
                  class="choose-seat--seat selected">K12</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat239')" id="seat239"
                  class="choose-seat--seat selected">K13</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat240')" id="seat240"
                  class="choose-seat--seat selected">K14</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat241')" id="seat241"
                  class="choose-seat--seat selected">K15</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat242')" id="seat242"
                  class="choose-seat--seat selected">K16</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat243')" id="seat243"
                  class="choose-seat--seat selected">K17</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat244')" id="seat244"
                  class="choose-seat--seat selected">K18</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat245')" id="seat245"
                  class="choose-seat--seat norm">K19</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat246')" id="seat246"
                  class="choose-seat--seat norm">K20</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat247')" id="seat247"
                  class="choose-seat--seat norm">K21</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat248')" id="seat248"
                  class="choose-seat--seat norm">K22</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat249')" id="seat249"
                  class="choose-seat--seat norm">K23</div>
                <div onclick="toggleFocusCSS(this), updateStickySingleSeats('seat250')" id="seat250"
                  class="choose-seat--seat norm">K24</div>
              </div>
              <div class="choose-seat--row">
                <div onclick="toggleFocusCSS(this), updateStickyCoupleSeats('seat251')" id="seat251"
                  class="choose-seat--seat double">L1</div>
                <div onclick="toggleFocusCSS(this), updateStickyCoupleSeats('seat252')" id="seat252"
                  class="choose-seat--seat double">L2</div>
                <div onclick="toggleFocusCSS(this), updateStickyCoupleSeats('seat253')" id="seat253"
                  class="choose-seat--seat double selected">L3</div>
                <div onclick="toggleFocusCSS(this), updateStickyCoupleSeats('seat254')" id="seat254"
                  class="choose-seat--seat double">L4</div>
                <div onclick="toggleFocusCSS(this), updateStickyCoupleSeats('seat255')" id="seat255"
                  class="choose-seat--seat double">L5</div>
                <div onclick="toggleFocusCSS(this), updateStickyCoupleSeats('seat256')" id="seat256"
                  class="choose-seat--seat double selected">L6</div>
                <div onclick="toggleFocusCSS(this), updateStickyCoupleSeats('seat257')" id="seat257"
                  class="choose-seat--seat double selected">L7</div>
                <div onclick="toggleFocusCSS(this), updateStickyCoupleSeats('seat258')" id="seat258"
                  class="choose-seat--seat double">L8</div>
                <div onclick="toggleFocusCSS(this), updateStickyCoupleSeats('seat259')" id="seat259"
                  class="choose-seat--seat double">L9</div>
              </div>
              <div class="choose-seat--glossary">
                <div class="choose-seat--glossary-row">
                  <div class="choose-seat--seat gloss-norm norm"></div>
                  <span>Regular Seat</span>
                  <div class="choose-seat--seat gloss-double double"></div>
                  <span>Double Seat (2 People)</span>
                  <div class="choose-seat--seat gloss-vip vip"></div>
                  <span>VIP Seat</span>
                  <div class="choose-seat--seat gloss-selecting selecting"></div>
                  <span>Selected Seat</span>
                  <div class="choose-seat--seat gloss-selected selected"></div>
                  <span>Reserved Seat</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="buy-popcorn col l-12 m-12 c-12">
        <div class="row sm-gutter">
          <div class="buy-popcorn--container col l-12 m-4 c-6">
            <h1 class="buy-popcorn--heading">BUY POPCORN & DRINKS</h1>

            <div class="buy-popcorn--content">
              <div class="col l-3 m-4 c-6">
                <div class="buy-popcorn--single">
                  <img src="/le cinéma/assets/img/temp logo.png" alt="" class="buy-popcorn--img">

                  <div class="buy-popcorn--info">
                    <h3>COMBO 01</h3>
                    <p>1 Popcorn M - Caramel Flavored</p>
                    <p>1 Coke 32Oz</p>
                    <p>60.000đ</p>

                    <div class="buy-popcorn--btn">
                      <div class="minus-btn" onclick="decrPopOne('popcorn-combo-1'), tempPriceCalc()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                          <path
                            d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                        </svg>
                      </div>
                      <input readonly value="0" id="popcorn-combo-1"></input>
                      <div class="plus-btn" onclick="incrPopOne('popcorn-combo-1'), tempPriceCalc()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                          <path
                            d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col l-3 m-4 c-6">
                <div class="buy-popcorn--single">
                  <img src="/le cinéma/assets/img/temp logo.png" alt="" class="buy-popcorn--img">

                  <div class="buy-popcorn--info">
                    <h3>COMBO 02</h3>
                    <p>1 Popcorn M - Cheese Flavored</p>
                    <p>1 Coke 32Oz</p>
                    <p>60.000đ</p>

                    <div class="buy-popcorn--btn">
                      <div class="minus-btn" onclick="decrPopOne('popcorn-combo-2'), tempPriceCalc()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                          <path
                            d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                        </svg>
                      </div>
                      <input readonly value="0" id="popcorn-combo-2"></input>
                      <div class="plus-btn" onclick="incrPopOne('popcorn-combo-2'), tempPriceCalc()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                          <path
                            d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col l-3 m-4 c-6">
                <div class="buy-popcorn--single">
                  <img src="/le cinéma/assets/img/temp logo.png" alt="" class="buy-popcorn--img">

                  <div class="buy-popcorn--info">
                    <h3>COMBO 03</h3>
                    <p>1 Popcorn M - Mixed</p>
                    <p>1 Coke 32Oz</p>
                    <p>63.000đ</p>

                    <div class="buy-popcorn--btn">
                      <div class="minus-btn" onclick="decrPopOne('popcorn-combo-3'), tempPriceCalc()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                          <path
                            d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                        </svg>
                      </div>
                      <input readonly value="0" id="popcorn-combo-3"></input>
                      <div class="plus-btn" onclick="incrPopOne('popcorn-combo-3'), tempPriceCalc()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                          <path
                            d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col l-3 m-4 c-6">
                <div class="buy-popcorn--single">
                  <img src="/le cinéma/assets/img/temp logo.png" alt="" class="buy-popcorn--img">

                  <div class="buy-popcorn--info">
                    <h3>COMBO 04</h3>
                    <p>1 Popcorn L - Caramel Flavored</p>
                    <p>1 Coke 32Oz</p>
                    <p>68.000đ</p>

                    <div class="buy-popcorn--btn">
                      <div class="minus-btn" onclick="decrPopOne('popcorn-combo-4'), tempPriceCalc()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                          <path
                            d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                        </svg>
                      </div>
                      <input readonly value="0" id="popcorn-combo-4"></input>
                      <div class="plus-btn" onclick="incrPopOne('popcorn-combo-4'), tempPriceCalc()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                          <path
                            d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col l-3 m-4 c-6">
                <div class="buy-popcorn--single">
                  <img src="/le cinéma/assets/img/temp logo.png" alt="" class="buy-popcorn--img">

                  <div class="buy-popcorn--info">
                    <h3>COMBO 05</h3>
                    <p>1 Popcorn M - Cheese Flavored</p>
                    <p>1 Coke 32Oz</p>
                    <p>68.000đ</p>

                    <div class="buy-popcorn--btn">
                      <div class="minus-btn" onclick="decrPopOne('popcorn-combo-5'), tempPriceCalc()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                          <path
                            d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                        </svg>
                      </div>
                      <input readonly value="0" id="popcorn-combo-5"></input>
                      <div class="plus-btn" onclick="incrPopOne('popcorn-combo-5'), tempPriceCalc()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                          <path
                            d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col l-3 m-4 c-6">
                <div class="buy-popcorn--single">
                  <img src="/le cinéma/assets/img/temp logo.png" alt="" class="buy-popcorn--img">

                  <div class="buy-popcorn--info">
                    <h3>COMBO 06</h3>
                    <p>1 Popcorn M - Mixed</p>
                    <p>1 Coke 32Oz</p>
                    <p>71.000đ</p>

                    <div class="buy-popcorn--btn">
                      <div class="minus-btn" onclick="decrPopOne('popcorn-combo-6'), tempPriceCalc()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                          <path
                            d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                        </svg>
                      </div>
                      <input readonly value="0" id="popcorn-combo-6"></input>
                      <div class="plus-btn" onclick="incrPopOne('popcorn-combo-6'), tempPriceCalc()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                          <path
                            d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col l-3 m-4 c-6">
                <div class="buy-popcorn--single">
                  <img src="/le cinéma/assets/img/temp logo.png" alt="" class="buy-popcorn--img">

                  <div class="buy-popcorn--info">
                    <h3>COMBO 07</h3>
                    <p>1 Popcorn M - Caramel Flavored</p>
                    <p>1 Coke 64Oz</p>
                    <p>66.000đ</p>

                    <div class="buy-popcorn--btn">
                      <div class="minus-btn" onclick="decrPopOne('popcorn-combo-7'), tempPriceCalc()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                          <path
                            d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                        </svg>
                      </div>
                      <input readonly value="0" id="popcorn-combo-7"></input>
                      <div class="plus-btn" onclick="incrPopOne('popcorn-combo-7'), tempPriceCalc()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                          <path
                            d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col l-3 m-4 c-6">
                <div class="buy-popcorn--single">
                  <img src="/le cinéma/assets/img/temp logo.png" alt="" class="buy-popcorn--img">

                  <div class="buy-popcorn--info">
                    <h3>COMBO 08</h3>
                    <p>1 Popcorn M - Cheese Flavored</p>
                    <p>1 Coke 64Oz</p>
                    <p>66.000đ</p>

                    <div class="buy-popcorn--btn">
                      <div class="minus-btn" onclick="decrPopOne('popcorn-combo-8'), tempPriceCalc()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                          <path
                            d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                        </svg>
                      </div>
                      <input readonly value="0" id="popcorn-combo-8"></input>
                      <div class="plus-btn" onclick="incrPopOne('popcorn-combo-8'), tempPriceCalc()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                          <path
                            d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col l-3 m-4 c-6">
                <div class="buy-popcorn--single">
                  <img src="/le cinéma/assets/img/temp logo.png" alt="" class="buy-popcorn--img">

                  <div class="buy-popcorn--info">
                    <h3>COMBO 09</h3>
                    <p>1 Popcorn M - Mixed</p>
                    <p>1 Coke 64Oz</p>
                    <p>69.000đ</p>

                    <div class="buy-popcorn--btn">
                      <div class="minus-btn" onclick="decrPopOne('popcorn-combo-9'), tempPriceCalc()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                          <path
                            d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                        </svg>
                      </div>
                      <input readonly value="0" id="popcorn-combo-9"></input>
                      <div class="plus-btn" onclick="incrPopOne('popcorn-combo-9'), tempPriceCalc()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                          <path
                            d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col l-3 m-4 c-6">
                <div class="buy-popcorn--single">
                  <img src="/le cinéma/assets/img/temp logo.png" alt="" class="buy-popcorn--img">

                  <div class="buy-popcorn--info">
                    <h3>COMBO 10</h3>
                    <p>1 Popcorn L - Caramel Flavored</p>
                    <p>1 Coke 64Oz</p>
                    <p>72.000đ</p>

                    <div class="buy-popcorn--btn">
                      <div class="minus-btn" onclick="decrPopOne('popcorn-combo-10'), tempPriceCalc()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                          <path
                            d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                        </svg>
                      </div>
                      <input readonly value="0" id="popcorn-combo-10"></input>
                      <div class="plus-btn" onclick="incrPopOne('popcorn-combo-10'), tempPriceCalc()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                          <path
                            d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col l-3 m-4 c-6">
                <div class="buy-popcorn--single">
                  <img src="/le cinéma/assets/img/temp logo.png" alt="" class="buy-popcorn--img">

                  <div class="buy-popcorn--info">
                    <h3>COMBO 11</h3>
                    <p>1 Popcorn L - Cheese Flavored</p>
                    <p>1 Coke 64Oz</p>
                    <p>72.000đ</p>

                    <div class="buy-popcorn--btn">
                      <div class="minus-btn" onclick="decrPopOne('popcorn-combo-11'), tempPriceCalc()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                          <path
                            d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                        </svg>
                      </div>
                      <input readonly value="0" id="popcorn-combo-11"></input>
                      <div class="plus-btn" onclick="incrPopOne('popcorn-combo-11'), tempPriceCalc()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                          <path
                            d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col l-3 m-4 c-6">
                <div class="buy-popcorn--single">
                  <img src="/le cinéma/assets/img/temp logo.png" alt="" class="buy-popcorn--img">

                  <div class="buy-popcorn--info">
                    <h3>COMBO 12</h3>
                    <p>1 Popcorn L - Mixed</p>
                    <p>1 Coke 64Oz</p>
                    <p>74.000đ</p>

                    <div class="buy-popcorn--btn">
                      <div class="minus-btn" onclick="decrPopOne('popcorn-combo-12'), tempPriceCalc()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                          <path
                            d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                        </svg>
                      </div>
                      <input readonly value="0" id="popcorn-combo-12"></input>
                      <div class="plus-btn" onclick="incrPopOne('popcorn-combo-12'), tempPriceCalc()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                          <path
                            d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                        </svg>
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

  <div class="sticky-info">
    <div class="grid wide">
      <div class="sm-gutter">
        <div class="sticky-info--container">
          <div class="sticky-info--movie-info col l-6 m-6 c-6">
            <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/jf3YO8hOqGHCupsREf5qymYq1n.jpg" alt=""
              class="sticky-info--img">

            <div class="sticky-info--movie">
              <p>TAYLOR SWIFT | THE ERAS TOUR</p>
              <p id="movie-type">-</p>
              <p id="movie-cinema-location">Brand Cinema Location</p>
              <span>Selected Seats: </span>
              <span id="movie-seats"></span>
              <p>
                <span id="movie-screen">-</span> |
                <span id="movie-time">-</span> |
                <span id="movie-date">-</span>
              </p>
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
              </div>

              <div class="sticky-info--buy-ticket" onclick="transfer('checkout')">
                <p>Buy ticket(s)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

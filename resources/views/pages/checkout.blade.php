@extends('layout')
@section('content')


<div class="content">
    <div class="grid wide">


        <div class="content-details">
          <div class="cd-path">
            <div class="cd-path--step cd-path--step-active">
              <h1>1</h1>
              <p>CUSTOMER INFO</p>
            </div>
            <div class="cd-path--separator"></div>
            <div class="cd-path--step">
              <h1>2</h1>
              <p>PAYMENT</p>
            </div>
            <div class="cd-path--separator"></div>
            <div class="cd-path--step">
              <h1>3</h1>
              <p>MOVIE TICKET INFO</p>
            </div>
          </div>

          <div class="cd-container">
            <div class="cd-info-field">
              <div class="cd-info-fied--heading">
                <h1>Contact Details</h1>
                <h4>(*): Field must be filled</h4>
              </div>
              <div class="cd-input-field--name-age">
                <div class="cd-input-field--div cd-input-field--name">
                <p>Name <span>*</span></p>
                <input type="text" class="cd-input cd-name" width="100%">
              </div>
              <div class="cd-input-field--div cd-input-field--age">
                  <p>Age <span>*</span></p>
                  <input type="text" class="cd-input cd-age">
                  </div>
              </div>
              <div class="cd-input-field--div cd-input-field--email">
                <p>E-mail <span>*</span></p>
                <input type="text" class="cd-input cd-email">
              </div>
              <div class="cd-input-field--div cd-input-field--phone-num">
                  <p>Phone Number <span>*</span></p>
                  <div class="cd-input-field--double">
                    <input type="text" class="cd-input cd-phone-num">
                  </div>
              </div>
              <div class="cd-input-field--proceed">
                <button>PROCEED</button>
              </div>
            </div>

            <div class="cd-receipt">
                @foreach ( $list_movie as $key => $movie)
              <h1 id="cd-movie-name">{{ $movie->movie_name }}</h1>
              @endforeach
              <span>TICKET HOLDING TIME:</span>
              <span id="cd-timer">05:00</span>
              <p id="cd-location">CINOVA CINEMA</p>
              <p id="cd-exact-location">Hàn Thuyên Street, Neighborhood 6, Linh Trung Ward, Thủ Đức District, Ho Chi Minh City</p>
              <p id="cd-date">Date and Time</p>
              <p id="cd-exact-date">{{  $movie_date }}-{{ $movie_time  }}</p>
              <p>
                <table id="cd-guest-info">
                  <tr>
                    <td>Room</td>
                    <td>Amount</td>
                    <td>Type</td>
                    <td>Seat Number</td>
                  </tr>
                  <?php
                    if ($quantity_ticket1 != 0 || $quantity_ticket2 != 0 ){
                  ?>
                      <tr>
                        <td>{{ $movie_screen }}</td>
                        <td> <?php if ($quantity_ticket1 != 0 ){ ?>
                          {{ $quantity_ticket1 }} Student
                            <?php } ?>
                            <?php if ($quantity_ticket2 != 0 ){ ?>
                                {{ $quantity_ticket2 }} Adult
                            <?php } ?>
                        </td>
                        <td>Single</td>
                        <td>{{ $movie_seats}}</td>
                      </tr>
                    <?php
                    }
                    ?>
                  <?php
                    if ($quantity_ticket3 != 0){
                  ?>
                      <tr>
                        <td>{{ $movie_screen }}</td>
                        <td>{{ $quantity_ticket3 }} Adult</td>
                        <td>Couple</td>
                        <td>{{ $movie_seats_couple }}</td>
                      </tr>
                    <?php
                    }
                    ?>

                </table>
              </p>
              <p>
                <table id="cd-popcorn">
                  <tr>
                    <td>Popcorn Combo</td>
                    <td>Quantity</td>
                  </tr>
                  <tr>
                    <?php
                    if ($quantity_popcorn1 != 0  ){
                  ?>
                    <td>COMBO 01</td>
                    <td>{{ $quantity_popcorn1 }}</td>
                  </tr>
                  <?php
                }
                ?>
                 <tr>
                    <?php
                    if ($quantity_popcorn2 != 0  ){
                  ?>
                    <td>COMBO 02</td>
                    <td>{{ $quantity_popcorn2 }}</td>
                  </tr>
                  <?php
                }
                ?>
                 <tr>
                    <?php
                    if ($quantity_popcorn3 != 0  ){
                  ?>
                    <td>COMBO 03</td>
                    <td>{{ $quantity_popcorn3 }}</td>
                  </tr>
                  <?php
                }
                ?>
                </table>
              </p>
              <div class="cd-total">
                <h1>TOTAL</h1>
                <p id="cd-total">{{ $temp_price_calc }}</p>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>

@endsection

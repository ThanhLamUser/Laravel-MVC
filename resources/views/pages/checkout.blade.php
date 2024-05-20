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
              <form action="">
              <div class="cd-input-field--div cd-input-field--email">
                <p>Name <span>*</span></p>
                <input type="text" class="cd-input cd-email" name="ticketbooked_name">
              </div>
              <div class="cd-input-field--div cd-input-field--email">
                <p>E-mail <span>*</span></p>
                <input type="text" class="cd-input cd-email" name="ticketbooked_email">
              </div>
              <div class="cd-input-field--div cd-input-field--phone-num" >
                  <p>Phone Number <span>*</span></p>
                  <div class="cd-input-field--double">
                    <input type="text" class="cd-input cd-phone-num" name="ticketbooked_phone">
                  </div>
              </div>
              <div class="cd-input-field--proceed">
                <button>PROCEED</button>
              </div>
            </form>
            </div>

            <div class="cd-receipt">
                @foreach ( $list_movie as $key => $movie)
              <h1 id="cd-movie-name">{{ $movie->movie_name }}</h1>
              <p style="font-size: 1.6rem;
              font-weight: 500;
              margin-bottom: 14px; color:#bdb431">
              <?php
              if($movie->movie_age == 'P'){
              ?>
              The film is allowed to be popular with viewers of all ages
              <?php
              }
              ?>
              <?php
              if($movie->movie_age == 'T13'){
              ?>
              The film is popular with viewers aged 13 and over (13+)
              <?php
              }
              ?>
                <?php
                if($movie->movie_age == 'T16'){
                ?>
                The film is popular with viewers aged 16 years and older (16+)
                <?php
                }
                ?>
                <?php
                if($movie->movie_age == 'T18'){
                ?>
                The film is popular with viewers aged 18 years or older (18+)
                <?php
                }
                ?>
                <?php
                if($movie->movie_age == 'K'){
                ?>
                The film is intended for viewers under 13 years old and is accompanied by a guardian
                <?php
                }
                ?>
              </p>

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
                    <td style="padding-right: 18px;">Room</td>
                    <td style="padding-right: 18px;">Amount</td>
                    <td style="padding-right: 18px;">Type</td>
                    <td style="padding-right: 18px;">Seat Number</td>
                  </tr >
                  <?php
                    if ($quantity_ticket1 != 0 || $quantity_ticket2 != 0 ){
                  ?>
                      <tr style="font-size: 1.4rem;">
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
                      <tr style="font-size: 1.4rem;">
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
                <?php if ($quantity_popcorn1 != 0 || $quantity_popcorn2 != 0 || $quantity_popcorn2 != 0  ){ ?>
                <table id="cd-popcorn">
                  <tr>
                    <td style="padding-right: 18px;">Popcorn Combo</td>
                    <td style="padding-right: 18px;">Quantity</td>
                  </tr>
                  <tr style="font-size: 1.4rem;">
                    <?php
                    if ($quantity_popcorn1 != 0  ){
                  ?>
                    <td>COMBO 01</td>
                    <td>{{ $quantity_popcorn1 }}</td>
                  </tr>
                  <?php
                }
                ?>
                 <tr style="font-size: 1.4rem;">
                    <?php
                    if ($quantity_popcorn2 != 0  ){
                  ?>
                    <td>COMBO 02</td>
                    <td>{{ $quantity_popcorn2 }}</td>
                  </tr>
                  <?php
                }
                ?>
                 <tr style="font-size: 1.4rem;">
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
                <?php
                }
                ?>
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

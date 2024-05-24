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
              <form role="form" id="form1" action="{{ URL::to('/payment') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                @if(Session::get('user_id')!=NULL)
                @foreach ($list_user as $key=>$user)
                @if($user->user_id==Session::get('user_id'))
                <div class="cd-input-field--div cd-input-field--email">
                    <p>Name <span>*</span></p>
                  <input type="text" class="cd-input cd-email" name="user_name" value="{{$user->user_name}}">
                </div>
                <div class="cd-input-field--div cd-input-field--email">
                  <p>E-mail <span>*</span></p>
                  <input type="text" class="cd-input cd-email" name="user_email" value="{{$user->user_email}}">
                </div>
                <div class="cd-input-field--div cd-input-field--phone-num" >
                    <p>Phone Number <span>*</span></p>
                    <div class="cd-input-field--double">
                      <input type="text" class="cd-input cd-phone-num" name="user_phone" value="{{$user->user_phone}}">
                    </div>
                </div>
                <input type="hidden" class="cd-input cd-phone-num" name="user_isguest" value="0">
                <div class="cd-input-field--proceed">
                  <button>PROCEED</button>
                </div>
              </div>
                @endif
                @endforeach
                @else
                <div class="cd-input-field--div cd-input-field--email">
                    <p>Name <span>*</span></p>
                  <input type="text" class="cd-input cd-email" name="user_name" >
                </div>
                <div class="cd-input-field--div cd-input-field--email">
                  <p>E-mail <span>*</span></p>
                  <input type="text" class="cd-input cd-email" name="user_email" >
                </div>
                <div class="cd-input-field--div cd-input-field--phone-num" >
                    <p>Phone Number <span>*</span></p>
                    <div class="cd-input-field--double">
                      <input type="text" class="cd-input cd-phone-num" name="user_phone" >
                    </div>
                </div>
                <input type="hidden" class="cd-input cd-phone-num" name="user_isguest" value="1">
                <div class="cd-input-field--proceed">
                  <button>PROCEED</button>
                </div>
              </div>
                @endif

              </form>
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
              @foreach($time_movie as $key => $time)
              <p id="cd-exact-date">{{  $time->showtime_date }}-{{ $time->showtime_timeslot}} </p>
              @endforeach
              <p>
                <table id="cd-guest-info">
                    <tr>
                      <td style="padding-right: 18px;">Room</td>
                      <td style="padding-right: 18px;">Amount</td>
                      <td style="padding-right: 18px;">Type</td>
                      <td style="padding-right: 18px;">Seat Number</td>
                    </tr >
                    <?php
                      if ($ticketQuantities[1] != 0 || $ticketQuantities[2] != 0 ){
                    ?>
                        <tr style="font-size: 1.4rem;">
                            @foreach ($screen_movie as $key => $room)
                            <td>{{$room->room_name }}</td>
                            @endforeach
                            <td>
                            <?php if ($ticketQuantities[1] != 0 ){
                            ?>
                            {{ $ticketQuantities[1] }} Student
                                  <?php } ?>
                                  <?php if ($ticketQuantities[2] != 0 ){ ?>
                                      {{ $ticketQuantities[2] }} Adult
                                  <?php } ?>
                              </td>
                          <td>Single</td>

                            <td> @foreach ($seat_single as $seat){{ $seat->seat_name }} @endforeach</td>

                          </tr>
                      <?php
                      }
                      ?>
                    <?php
                      if ($ticketQuantities[3] != 0){
                    ?>
                        <tr style="font-size: 1.4rem;">
                            @foreach ($screen_movie as $key => $room)
                            <td>{{$room->room_name }}</td>
                            @endforeach
                          <td>{{ $ticketQuantities[3] }} Adult</td>
                          <td>Couple</td>

                          <td> @foreach ($seat_couple as $seat){{ $seat->seat_name }} @endforeach</td>

                        </tr>
                      <?php
                      }
                      ?>

                  </table>
            </p>

            <p>
                @if (!empty($popcornQuantities))
                <table id="cd-popcorn">
                    <tr>
                        <td style="padding-right: 18px;">Popcorn Combo</td>
                        <td style="padding-right: 18px;">Quantity</td>
                    </tr>
                    @foreach ($popcornQuantities as $key => $quantity)
                    @if ($quantity != 0)
                    <tr style="font-size: 1.4rem;">
                        <td>COMBO {{ $key }}</td>
                        <td>{{ $quantity }}</td>
                    </tr>
                    @endif
                    @endforeach
                </table>
                @endif
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

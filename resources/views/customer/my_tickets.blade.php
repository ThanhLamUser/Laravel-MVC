@extends('layout')
@section('content')

<div class="content">
    <div class="grid wide">
        <div class="acc-details-page col l-12 m-12 c-12" style="display: flex;">
          <div class="user-buttons col l-2 m-4 c-6">
            <div class="row sm-gutter">
              <div>
                <button class="account-details"  onclick="transfer('customer')">ACCOUNT DETAILS</button>
                <button class="user-buttons--active my-tickets">MY TICKETS</button>
              </div>
            </div>
          </div>

          <div class="transaction-history col l-10 m-4 c-6">
            <h1>TRANSACTION HISTORY</h1>
            @foreach ($list_payment as $key=>$list)
            @if($list->showtime_date > now()->subDays(1))
            <div class="th-ticket ">
            @else
            <div class="th-ticket th-ticket--used">
            @endif
              <div class="th-ticket-left">
                <span id="th-ticket-left-namescreen">
                  <span id="th-ticket-left-name">{{ $list->movie_name }}</span>
                  <span id="th-ticket-left-screen">{{ $list->room_name  }}</span>
                </span>
                <span id="th-ticket-left-barcode">
                  <div class="th-ticket-left-barcode"></div>
                  <span id="th-ticket-left-barcode-num">{{ $list->ticketbooked_id }}</span>
                </span>
              </div>
              <div class="th-ticket-right">
                <img src="{{ $list->movie_poster }}" alt="" id="th-ticket-right-img">
                <div class="th-ticket-right-info">
                  <div class="th-ticket-right-seat">
                    <p>SEAT</p>
                    <p>@foreach ($list_seat as $key=>$seat)
                        @if($seat->ticketbooked_id==$list->ticketbooked_id)
                        {{ $seat  ->seat_name}}
                        @endif
                    @endforeach</p>
                  </div>
                  <div class="th-ticket-right-date">
                    <p>DATE</p>
                    <p>{{ $list->showtime_date }}</p>
                  </div>
                  <div class="th-ticket-right-time">
                    <p>TIME</p>
                    <p>{{ $list->showtime_timeslot }}</p>
                  </div>
                </div>
            </div>

              <div class="used-ticket">
                  <div class="used-ticket2">
                    <div class="used-ticket3">
                      <div class="used-ticket4">
                        <p>USED TICKET</p>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            @endforeach
            {{-- <div class="th-ticket">
              <div class="th-ticket-left">
                <span id="th-ticket-left-namescreen">
                  <span id="th-ticket-left-name">BARBIE</span>
                  <span id="th-ticket-left-screen">SCREEN 03</span>
                </span>
                <span id="th-ticket-left-barcode">
                  <div class="th-ticket-left-barcode"></div>
                  <span id="th-ticket-left-barcode-num">1234567890</span>
                </span>
              </div>
              <div class="th-ticket-right">
                <img src="https://image.tmdb.org/t/p/original/llZSAx6YW0y9tV4iMKmbUBNh70I.jpg" alt="" id="th-ticket-right-img">
                <div class="th-ticket-right-info">
                  <div class="th-ticket-right-row">
                    <p>ROW</p>
                    <p>G</p>
                  </div>
                  <div class="th-ticket-right-seat">
                    <p>SEAT</p>
                    <p>1, 2</p>
                  </div>
                  <div class="th-ticket-right-date">
                    <p>DATE</p>
                    <p>10 Feb</p>
                  </div>
                  <div class="th-ticket-right-time">
                    <p>TIME</p>
                    <p>15:20</p>
                  </div>
                </div>
              </div>

              <div class="used-ticket">
                  <div class="used-ticket2">
                    <div class="used-ticket3">
                      <div class="used-ticket4">
                          <p>USED TICKET</p>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="th-ticket th-ticket--used">
              <div class="th-ticket-left">
                <span id="th-ticket-left-namescreen">
                  <span id="th-ticket-left-name">THE LAST WIFE</span>
                  <span id="th-ticket-left-screen">SCREEN 04</span>
                </span>
                <span id="th-ticket-left-barcode">
                  <div class="th-ticket-left-barcode"></div>
                  <span id="th-ticket-left-barcode-num">1234567890</span>
                </span>
              </div>
              <div class="th-ticket-right">
                <img src="https://image.tmdb.org/t/p/original/mkv2cz71iLvpYjUWCfBPh6nZaaD.jpg" alt="" id="th-ticket-right-img">
                <div class="th-ticket-right-info">
                  <div class="th-ticket-right-row">
                    <p>ROW</p>
                    <p>G</p>
                  </div>
                  <div class="th-ticket-right-seat">
                    <p>SEAT</p>
                    <p>1, 2</p>
                  </div>
                  <div class="th-ticket-right-date">
                    <p>DATE</p>
                    <p>10 Feb</p>
                  </div>
                  <div class="th-ticket-right-time">
                    <p>TIME</p>
                    <p>15:20</p>
                  </div>
                </div>
              </div>

              <div class="used-ticket">
                  <div class="used-ticket2">
                    <div class="used-ticket3">
                      <div class="used-ticket4">
                          <p>USED TICKET</p>
                      </div>
                    </div>
                  </div>
              </div>
            </div> --}}
      </div>
        </div>
    </div>
  </div>

@endsection

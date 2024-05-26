@extends('layout')
@section('content')

<div class="content">
    <div class="grid wide">


        <div class="content-details">
          <div class="cd-path">
            <div class="cd-path--step">
              <h1>1</h1>
              <p>CUSTOMER INFO</p>
            </div>
            <div class="cd-path--separator"></div>
            <div class="cd-path--step">
              <h1>2</h1>
              <p>PAYMENT</p>
            </div>
            <div class="cd-path--separator"></div>
            <div class="cd-path--step cd-path--step-active">
              <h1>3</h1>
              <p>MOVIE TICKET INFO</p>
            </div>
          </div>

          <div class="movie-ticket-info">
            <div class="mti-up">
              <img src="https://image.tmdb.org/t/p/original/qrkFlypxQ23Ca9iZ1h4uRysIByj.jpg" alt="" class="mti-up--img">
              <div class="mti-up--container">
                <div class="mti-up--info">
                  <p id="mti-up--name">TAYLOR SWIFT | THE ERAS TOUR</p>
                  <p>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                      <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
                    </svg>
                    <span id="mti-up--location">ABC Cinema</span>
                  </p>
                  <div class="mti-up--information">
                    <div class="mti-up--part">
                      <p>Date</p>
                      <p id="mti-up--date">asdf</p>
                    </div>
                    <div class="mti-up--part">
                      <p>Time</p>
                      <p id="mti-up--time">asdf</p>
                    </div>
                    <div class="mti-up--part">
                      <p>Seat(s)</p>
                      <p id="mti-up--seats">asdf</p>
                    </div>
                    <div class="mti-up--part">
                      <p>Screen</p>
                      <p id="mti-up--screen">asdf</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mti-down">
              <div class="mti-down--container">
                <p>Ticket ID</p>
                <p>19070457778021</p>
                <div>
                  <div class="mti-down--barcode"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>



@endsection

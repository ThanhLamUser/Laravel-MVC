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
            <div class="cd-path--step cd-path--step-active">
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
              <div class="cd-info-field--heading">
                <h1>Payment</h1>
              </div>
              <div class="cd-info-field--payment">
                <img src="/le cinéma/assets/img/momo.png" alt="" class="cd-img-momo">
                <p>Pay with Momo</p>
              </div>
              <div class="cd-info-field--payment">
                <img src="/le cinéma/assets/img/mastercard.png" alt="" class="cd-img-mc">
                <p>Payment via Domestic Card</p>
              </div>
              <div class="cd-info-field--payment">
                <img src="/le cinéma/assets/img/mastercard.png" alt="" class="cd-img-mc">
                <p>Payment via International Card</p>
              </div>
              <div class="cd-info-field-voucher">
                <p>Enter voucher (if owned)</p>
                <div class="cd-info-field--enter-voucher">
                  <input type="text" name="" id="voucher">
                  <button>Apply</button>
                </div>
              </div>
              <div class="cd-input-field--proceed">
                <button>SUBMIT PAYMENT</button>
              </div>
            </div>

            <div class="cd-receipt">
              <h1 id="cd-movie-name">TAYLOR SWIFT | THE ERAS TOUR</h1>
              <span>TICKET HOLDING TIME:</span>
              <span id="cd-timer">05:00</span>
              <p id="cd-location">ABC CINEMA</p>
              <p id="cd-exact-location">Abc Xyz Lmnop</p>
              <p id="cd-date">Date and Time</p>
              <p id="cd-exact-date">Sunday 10/09/2024 00:00</p>
              <p>
                <table id="cd-guest-info">
                  <tr>
                    <td>Screen</td>
                    <td>Ticket Amount</td>
                    <td>Ticket Type</td>
                    <td>Seat Number</td>
                  </tr>
                </table>
              </p>
              <p>
                <table id="cd-popcorn">
                  <tr>
                    <td>Popcorn Combo</td>
                    <td>Quantity</td>
                  </tr>
                </table>
              </p>
              <div class="cd-total">
                <h1>TOTAL</h1>
                <p id="cd-total">109.000đ</p>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>


@endsection

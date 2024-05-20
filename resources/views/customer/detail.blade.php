@extends('layout')
@section('content')

<div class="content">
    <div class="grid wide">
        <div class="acc-details-page col l-12 m-12 c-12" style="display: flex;">
          <div class="user-buttons col l-2 m-4 c-6">
            <div class="row sm-gutter">
              <div>
                <button class="user-buttons--active account-details">ACCOUNT DETAILS</button>
                <button class="my-tickets" onclick="transfer('my-tickets')">MY TICKETS</button>
              </div>
            </div>
          </div>

          <div class="account-details-container col l-5 m-4 c-6">
                <h1>ACCOUNT DETAILS</h1>
                @foreach ($user as $key=>$user_pro)
                <div class="ad-img-barcode">
                  <div class="ad-img">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <path d="M406.5 399.6C387.4 352.9 341.5 320 288 320H224c-53.5 0-99.4 32.9-118.5 79.6C69.9 362.2 48 311.7 48 256C48 141.1 141.1 48 256 48s208 93.1 208 208c0 55.7-21.9 106.2-57.5 143.6zm-40.1 32.7C334.4 452.4 296.6 464 256 464s-78.4-11.6-110.5-31.7c7.3-36.7 39.7-64.3 78.5-64.3h64c38.8 0 71.2 27.6 78.5 64.3zM256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-272a40 40 0 1 1 0-80 40 40 0 1 1 0 80zm-88-40a88 88 0 1 0 176 0 88 88 0 1 0 -176 0z"/>
                    </svg>
                  </div>
                  <div class="edit-pfp">Change Photo</div>
                  <div class="ad-barcode">
                    <div class="ad-barcode--code th-ticket-left-barcode"></div>
                    <p class="ad-barcode--num">000000000{{ $user_pro->user_id }}</p>
                  </div>
                </div>

                <div class="ad-basic-info">
                  <h2>BASIC INFO</h2>
                  <p>Name<span>*</span></p>
                  <input type="text" name="" id="" value="{{ $user_pro->user_name}}">
                  <p>Phone Number<span>*</span></p>
                  <input type="text" name="" id="" value="{{ $user_pro->user_phone}}">
                  <p>E-mail<span>*</span></p>
                  <input type="text" name="" id="" value="{{ $user_pro->user_email}}">
                  <p>Address</p>
                  <input type="text" name="" id="">
                </div>
                @endforeach
          </div>

          <div class="account-details-buttons col l-2 m-4 c-6">
            <button>Cancel</button>
            <input type="submit" name="" id="" value="Save">
          </div>
        </div>
    </div>
  </div>

@endsection

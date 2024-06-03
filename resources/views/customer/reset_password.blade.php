@extends('layout')
@section('content')

<div class="content">
    <div class="grid wide">
        <div class="acc-details-page col l-12 m-12 c-12" style="display: flex;">
          <div class="user-buttons col l-2 m-4 c-6">
            <div class="row sm-gutter">
              <div>
                <button class="account-details " onclick="transfer('customer')">ACCOUNT DETAILS</button>
                <button class="my-tickets" onclick="transfer('my-tickets')">MY TICKETS</button>
                <button class="my-tickets user-buttons--active " >RESET PASSWORD</button>
            </div>
            </div>
          </div>

          <div class="account-details-container col l-5 m-4 c-6">
            <form  action="{{ URL::to('/reset-password') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <h1>RESET PASSWORD</h1>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <div class="ad-basic-info">
                  <p>Current Password<span>*</span></p>
                  <input type="password" name="current_password"  required>
                  <p>New Password<span>*</span></p>
                  <input type="password" name="new_password"  required>
                  <p>Confirm New Password<span>*</span></p>
                  <input type="password" name="confirm_password"  required>
                </div>
          </div>

          <div class="account-details-buttons col l-2 m-4 c-6">
            <button type="button" onclick="window.location.href='{{ URL::to('/customer') }}'">Cancel</button>
            <input type="submit" value="Save">
          </div>
        </div>
        </form>
    </div>
  </div>

@endsection

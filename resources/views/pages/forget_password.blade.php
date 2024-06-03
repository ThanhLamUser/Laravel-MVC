@extends('layout')
@section('content')

<div class="content">
    <div class="grid wide">
        <div class="content-details">
            <div class="cd-container" style="background-color: #f7f1dc; justify-content:center;margin-top: 20px;">
                <div class="register">
                    <div class="account" style="height: 500px;">
                        <div class="account_container">
                            <h2 class="account_container-header-register" style="margin-top: 40px;margin-bottom: 30px;">
                                Forgot Password</h2>
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

                                <form class="account_container-form" action="{{ URL::to('/forgot-password') }}" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                                    {{ csrf_field() }}
                                    <div class="account_container-form--group">
                                        <p style="margin:0; font-size:1rem">Email <span style="color:red;font-weight:700">*</span></p>
                                        <input type="text" id="user_email" name="user_email" onchange="validateEmail()" required>
                                        <span id="emailError" class="error-message">Please enter a valid email address.</span>
                                    </div>
                                    <div class="button_container" style="margin-top:15px">
                                        <button class="btn">SUBMIT</button>
                                    </div>
                                </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

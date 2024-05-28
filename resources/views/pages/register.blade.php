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
                                    Create your account</h2>
                                    <form class="account_container-form" action="{{ URL::to('/save-user') }}" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                                        {{ csrf_field() }}
                                        <div class="account_container-form--group">
                                            <p style="margin:0; font-size:1rem">FullName <span style="color:red;font-weight:700">*</span></p>
                                            <input type="text" id="user_name" name="user_name" onchange="validateFullName()">
                                            <span id="nameError" class="error-message">Full name is required.</span>
                                        </div>
                                        <div class="account_container-form--group">
                                            <p style="margin:0; font-size:1rem">Phone <span style="color:red;font-weight:700">*</span></p>
                                            <input type="text" id="user_phone" name="user_phone" onchange="validatePhone()">
                                            <span id="phoneError" class="error-message">Please enter a valid phone number.</span>
                                        </div>
                                        <div class="account_container-form--group">
                                            <p style="margin:0; font-size:1rem">Email <span style="color:red;font-weight:700">*</span></p>
                                            <input type="text" id="user_email" name="user_email" onchange="validateEmail()">
                                            <span id="emailError" class="error-message">Please enter a valid email address.</span>
                                        </div>
                                        <div class="account_container-form--group">
                                            <p style="margin:0; font-size:1rem">Password <span style="color:red;font-weight:700">*</span></p>
                                            <input type="password" id="user_password" name="user_password" onchange="validatePassword()">
                                            <span id="passwordError" class="error-message">Password cannot be empty.</span>
                                        </div>
                                        <div class="button_container" style="margin-top:15px">
                                            <button class="btn">CREATE ACCOUNT</button>
                                        </div>
                                    </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

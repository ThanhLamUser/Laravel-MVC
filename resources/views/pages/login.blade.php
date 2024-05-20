@extends('layout')
@section('content')
    <div class="content">
        <div class="grid wide">
            <div class="content-details">
                <div class="cd-path">
                </div>

                <div class="cd-container" style="background-color: #f7f7f7; justify-content:center">
                    <div class="account">
                        <div class="account_container">
                            <h1 class="account_container-header">Login into your account</h1>
                            <form class="account_container-form" action="{{ URL::to('/login-account') }}" method="post"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="account_container-form--group-login">
                                    <label for="email">Email</label>
                                    <input type="text" id="email" name="user_email">
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="img_email"
                                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z" />
                                </svg>

                                <div class="account_container-form--group-login">
                                    <label for="Password">Password</label>
                                    <input type="password" id="Password" name="user_password">
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="img_lock"
                                    viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z" />
                                </svg>
                                <div class="FAQ">
                                    <div class="FAQ_remember">
                                        <input type="checkbox" style="box-shadow: none" id="remember">
                                        <label>Remember Me</label>
                                    </div>
                                    <div class="FAQ_forgot">
                                        <a href="">Forgot Password?</a>
                                    </div>
                                </div>
                                <div class="button_container ">
                                    <button class="btn btn_LOGIN">LOGIN NOW</button>
                                </div>
                                <div class="OR_container">
                                    <div class="line"></div>
                                    <p class="OR">OR</p>
                                    <div class="line"></div>
                                </div>
                            </form>
                            <div class="button_container">
                                <button id="signup-button" onclick="RegisterForm()" class="btn">SIGN UP NOW</button>
                            </div>
                        </div>
                    </div>
                    <div class="register" style="display:none">
                        <div class="account" style="height: 500px;">
                            <div class="account_container">
                                <h2 class="account_container-header-register" style="margin-top: 40px;margin-bottom: 30px;">
                                    Create your account</h2>
                                <form class="account_container-form" action="{{ URL::to('/save-user') }}" method="post"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="account_container-form--group">
                                        <p style="margin:0; font-size:1 rem">FullName <span
                                                style="color:red;font-weight:700">*</span></p>
                                        <input type="text" id="user_name" name="user_name">
                                    </div>
                                    <div class="account_container-form--group">
                                        <p style="margin:0; font-size:1 rem">Phone <span
                                                style="color:red;font-weight:700">*</span></p>
                                        <input type="text" id="user_phone" name="user_phone">
                                    </div>
                                    <div class="account_container-form--group">
                                        <p style="margin:0; font-size:1rem">Email <span
                                                style="color:red;font-weight:700">*</span></p>
                                        <input type="text" id="user_email" name="user_email">
                                    </div>
                                    <div class="account_container-form--group">
                                        <p style="margin:0; font-size:1 rem">Password <span
                                                style="color:red;font-weight:700">*</span></p>
                                        <input type="password" id="user_password" name="user_password">
                                    </div>
                                    <div class="button_container">
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

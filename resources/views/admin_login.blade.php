<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Login Admin</title>
<link rel="icon" href="favicon.ico.png" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="./public/backend/css/bootstrap.min.css" >
<link href="./public/backend/css/style.css" rel='stylesheet' type='text/css' />
<link href="./public/backend/css/style-responsive.css" rel="stylesheet"/>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="./public/backend/css/font.css" type="text/css"/>
<link href="./public/backend/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<div class="log-w3">
<div class="w3layouts-main">
	<h2>Sign In Now</h2>
    <?php
        $message = Session::get('message');
        if($message){
            echo $message;
            $message = Session::get('message',null);
        }
         Session::forget('message')
    ?>
		<form action="{{ URL::to('./admin-dashboard') }}" method="post">
            {{ csrf_field() }}
			<input type="email" class="ggg" name="admin_email" placeholder="E-MAIL" required="">
			<input type="password" class="ggg" name="admin_password" placeholder="PASSWORD" required="">
			{{-- <span><input type="checkbox" />Remember Me</span> --}}
			{{-- <h6><a href="#">Forgot Password?</a></h6> --}}
				<div class="clearfix"></div>
				<input type="submit" value="Sign In" name="login">
		</form>
		{{-- <p>Don't Have an Account ?<a href="registration.html">Create an account</a></p> --}}
</div>
</div>
<script src="{{asset('./public/backend/js/scripts.js')}}"></script>

</body>
</html>

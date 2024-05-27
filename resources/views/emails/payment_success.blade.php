<!DOCTYPE html>
<html>
<head>
    <title>Payment Successful</title>
</head>
<body>
    <h1>Hi, {{ $user->user_name }}</h1>
    <p>Your payment was successful. Here are the details:</p>
    <p>{{ $orderDetails }}</p>
</body>
</html>

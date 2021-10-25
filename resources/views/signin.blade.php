<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Login Page</title>
</head>
<body>
    <form action="signin" method="POST">
        @csrf
        <div class="login-box">
            <h1>Admin Login</h1>
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Admin Email" name="email" value="" required>
            </div>
            <div class="textbox"><i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password" name="password" value="" required>
            </div>
            <button class="button" type="submit">Sign In</button>
        </div>
    </form>
</body>
</html>
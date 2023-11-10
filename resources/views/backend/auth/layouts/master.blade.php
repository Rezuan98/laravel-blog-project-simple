<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('auth/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container1">

        <h3>Please login</h3>
        <form action="">
            @csrf
            <input class="form-control" placeholder="enter your email" type="email" name="email" id=""><br>
            <input class="form-control" placeholder="enter your password" type="password" name="password" id=""><br>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>


    <p class="text-success">Dont have Account? <a href="{{route('register')}}">Register Now</a></p>
    <p class="text-danger">Forgot password? <a href="{{route('password.request')}}">Reset Password</a></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</body>
</html>
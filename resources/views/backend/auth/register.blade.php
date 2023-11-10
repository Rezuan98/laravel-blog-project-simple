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

        <h3>Please Register</h3>
        <form action="{{route('register')}}" method="POST">
            @csrf
            <input placeholder="Enter Your Name" class="form-control" type="name" name="name" id=""><br>
            <input placeholder="Enter Your email" class="form-control" type="email" name="email" id=""><br>
            <input placeholder="Create a password" class="form-control" type="password" name="password" id=""><br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


    <p class="text-success">Already Registered? <a href="{{route('login')}}">Login Now</a></p>
    <p class="text-danger">Forgot password? <a href="{{route('password.request')}}">Reset Password</a></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</body>
</html>
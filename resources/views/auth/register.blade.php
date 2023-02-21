<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bordash - Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/media/image/favicon.png"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="{{asset("tae")}}/vendors/bundle.css" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="{{asset("tae")}}/assets/css/app.min.css" type="text/css">
</head>
<body class="form-membership">

<!-- begin::preloader-->
<div class="preloader">
    <div class="preloader-icon"></div>
</div>
<!-- end::preloader -->

<div class="form-wrapper">

    <!-- logo -->
    <div id="logo">
        <img class="logo" src="{{asset("tae")}}/assets/media/image/logo.png" alt="image">
        <img class="logo-dark" src="{{asset("tae")}}/assets/media/image/logo-dark.png" alt="image">
    </div>
    <!-- ./ logo -->

    <h5>Create account</h5>

    <!-- form -->
    <form action="{{url("/register")}}" method="POST">
        @csrf
        <validation-errors/>
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Full Name" required autofocus>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation" required>
        </div>
        <button class="btn btn-primary btn-block" type="submit">Register</button>
        <hr>
        <p class="text-muted">Already have an account?</p>
        <a href="{{url("/login")}}" class="btn btn-outline-light btn-sm">Sign in!</a>
    </form>
    <!-- ./ form -->

</div>

<!-- Plugin scripts -->
<script src="{{asset("tae")}}/vendors/bundle.js"></script>

<!-- App scripts -->
<script src="{{asset("tae")}}/assets/js/app.min.js"></script>
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bordash - Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset("tae")}}/assets/media/image/favicon.png"/>

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

    <h5>Sign in</h5>

    <!-- form -->
    <form action="{{url("/login")}}" method="POST">
        @csrf
        <x-validation-errors />
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Email" name="email"  required autofocus>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="password" required>
        </div>
        <div class="form-group d-flex justify-content-between">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" value="1" name="remember_me" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
            </div>
            <a href="recover-password.html">Reset password</a>
        </div>
        <button class="btn btn-primary btn-block" type="submit">Sign in</button>
        <hr>
        <p class="text-muted">Login with your social media account.</p>
        <ul class="list-inline">
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-facebook">
                    <i class="fa fa-facebook"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-twitter">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-dribbble">
                    <i class="fa fa-dribbble"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-linkedin">
                    <i class="fa fa-linkedin"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-google">
                    <i class="fa fa-google"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-behance">
                    <i class="fa fa-behance"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-instagram">
                    <i class="fa fa-instagram"></i>
                </a>
            </li>
        </ul>
        <hr>
        <p class="text-muted">Don't have an account?</p>
        <a href="{{url("/register")}}" class="btn btn-outline-light btn-sm">Register now!</a>
    </form>
    <!-- ./ form -->

</div>

<!-- Plugin scripts -->
<script src="{{asset("tae")}}/vendors/bundle.js"></script>

<!-- App scripts -->
<script src="{{asset("tae")}}/assets/js/app.min.js"></script>
</body>
</html>

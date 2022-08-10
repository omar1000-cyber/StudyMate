@extends('welcome')
<link href="{{asset('frontend/css/registration.css')}}"  rel="stylesheet">
@section('content')



    <!DOCTYPE html>
    <!-- === Coding by CodingLab | www.codinglabweb.com === -->
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== Iconscout CSS ===== -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="style.css">

        <!--<title>Login & Registration Form</title>-->
    </head>
    <body>

    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>

                <form action="hello">
                    <div class="input-field">
                        <input type="text" placeholder="Enter your email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Enter your password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>

                        <a href="#" class="text">Forgot password?</a>
                    </div>

                    <div class="input-field button">
                        <input type="button" value="Login">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Not a member?
                        <a class="text signup-link">Signup Now</a>
                    </span>
                </div>
            </div>
        </div>

    </div>

    <script src="{{asset('frontend/js/main.js')}}">

    </script>

{{--    <form method="GET" action="registration">--}}
{{--        <input type="search" placeholder="Enter name" name="q" id="q"/>--}}
{{--        <input type="submit" value="search" id="submit-btn">--}}
{{--    </form>--}}
    </body>
    </html>





@endsection


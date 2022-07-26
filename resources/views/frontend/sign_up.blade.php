@extends('welcome')

<link href="{{asset('frontend/css/sign_up.css')}}"  rel="stylesheet">

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

    <div class="form sign_up">
        <span class="title">Registration</span>

        <form action="sign_up">
            <div class="input-field">
                <input type="text" placeholder="Enter your name" required>
                <i class="uil uil-user"></i>
            </div>
            <div class="input-field">
                <input type="text" placeholder="Enter your email" required>
                <i class="uil uil-envelope icon"></i>
            </div>
            <div class="input-field">
                <input type="password" class="password" placeholder="Create a password" required>
                <i class="uil uil-lock icon"></i>
            </div>
            <div class="input-field">
                <input type="password" class="password" placeholder="Confirm a password" required>
                <i class="uil uil-lock icon"></i>
                <i class="uil uil-eye-slash showHidePw"></i>
            </div>

            <div class="checkbox-text">
                <div class="checkbox-content">
                    <input type="checkbox" id="termCon">
                    <label for="termCon" class="text">I accepted all terms and conditions</label>
                </div>
            </div>

            <div class="input-field button">
                <input type="button" value="Signup">
            </div>
        </form>

        <div class="login-signup">
                    <span class="text">Already a member?
                        <a href="registration" class="text login-link">Login Now</a>
                    </span>
        </div>
    </div>
    </body>
    </html>




@endsection

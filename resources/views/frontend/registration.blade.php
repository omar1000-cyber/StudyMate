@extends('welcome')
<link href="{{asset('frontend/css/registration.css')}}"  rel="stylesheet">
@section('content')

{{--    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">--}}
{{--        <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">--}}
{{--            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>CS STUDYMATE</h2>--}}
{{--        </a>--}}
{{--        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}
{{--        <div class="collapse navbar-collapse" id="navbarCollapse">--}}
{{--            <div id="nav" class="navbar-nav ms-auto p-4 p-lg-0">--}}
{{--                <a href="/" class="nav-item nav-link active">Home</a>--}}
{{--                <a href="about" class="nav-item nav-link">About</a>--}}
{{--                <a href="courses" class="nav-item nav-link">Courses</a>--}}
{{--                <a href="find_mates" class="nav-item nav-link">Find_Mates</a>--}}
{{--                <div class="nav-item dropdown">--}}
{{--                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>--}}
{{--                    <div class="dropdown-menu fade-down m-0">--}}
{{--                        <a href="team" class="dropdown-item">Our Team</a>--}}
{{--                        <a href="testimonial" class="dropdown-item">Testimonial</a>--}}
{{--                                                <a href="find mates" class="dropdown-item">Find Mates</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <a href="contact" class="nav-item nav-link">Contact</a>--}}
{{--            </div>--}}
{{--            <a href="registration" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a>--}}
{{--        </div>--}}
{{--    </nav>--}}


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

                <form action="#">
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
                        <a href="form sign_up" class="text signup-link">Signup Now</a>
                    </span>
                </div>
            </div>

            <!-- Registration Form -->
            <div class="form signup">
                <span class="title">Registration</span>

                <form action="#" method="post">
                    <div class="input-field">
                        <input type="text" placeholder="Enter your name" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Enter your email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Enter your school" required>
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
                        <a href="#" class="text login-link">Login Now</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('frontend/js/main.js')}}">

    </script>
    </body>
    </html>





@endsection

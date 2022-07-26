@extends('welcome')

@section('content')
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>CS STUDYMATE</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div id="nav" class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link ">Home</a>
                <a href="about" class="nav-item nav-link active">About</a>
                <a href="courses" class="nav-item nav-link">Courses</a>
                <a href="find_mates" class="nav-item nav-link">Find_Mates</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team" class="dropdown-item">Our Team</a>
                        <a href="testimonial" class="dropdown-item">Testimonial</a>
{{--                        <a href="404" class="dropdown-item">404 Page</a>--}}
                    </div>
                </div>
                <a href="contact" class="nav-item nav-link">Contact</a>
            </div>
            <a href="registration" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3">Skilled Instructors</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3">Online Classes</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3">Home Projects</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <h5 class="mb-3">Book Library</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{asset('frontend/img/about.jpg')}}" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to CS STUDYMATE</h1>
                    <p class="mb-4">Compputer Science Studymate is a web application which serves as a social networking platform for all computer science students across the country to share ideas and experiences.</p>
                    <p class="mb-4">The network also aims at ensuring engaged learning and offer students and lecturers the opportunity to discussa number of academic issues that will help clear some fears and challenges that have constituted barriers to the various courses offered as part of the computer science program</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Book Library</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Home Projects</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Find Studymates</p>
                        </div>
{{--                        <div class="col-sm-6">--}}
{{--                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-6">--}}
{{--                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificate</p>--}}
{{--                        </div>--}}
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
{{--                <h6 class="section-title bg-white text-center text-primary px-3">Instructors</h6>--}}
{{--                <h1 class="mb-5">Expert Instructors</h1>--}}
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
{{--                        <div class="overflow-hidden">--}}
{{--                            <img class="img-fluid" src="{{asset('frontend/img/team-1.jpg')}}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">--}}
{{--                            <div class="bg-light d-flex justify-content-center pt-2 px-1">--}}
{{--                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>--}}
{{--                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>--}}
{{--                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="text-center p-4">--}}
{{--                            <h5 class="mb-0">Instructor Name</h5>--}}
{{--                            <small>Designation</small>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
{{--                        <div class="overflow-hidden">--}}
{{--                            <img class="img-fluid" src="{{asset('frontend/img/team-2.jpg')}}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">--}}
{{--                            <div class="bg-light d-flex justify-content-center pt-2 px-1">--}}
{{--                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>--}}
{{--                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>--}}
{{--                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="text-center p-4">--}}
{{--                            <h5 class="mb-0">Instructor Name</h5>--}}
{{--                            <small>Designation</small>--}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
{{--                            <img class="img-fluid" src="{{asset('frontend/img/team-3.jpg')}}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">--}}
{{--                            <div class="bg-light d-flex justify-content-center pt-2 px-1">--}}
{{--                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>--}}
{{--                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>--}}
{{--                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="text-center p-4">--}}
{{--                            <h5 class="mb-0">Instructor Name</h5>--}}
{{--                            <small>Designation</small>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
{{--                            <img class="img-fluid" src="{{asset('frontend/img/team-4.jpg')}}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">--}}
{{--                            <div class="bg-light d-flex justify-content-center pt-2 px-1">--}}
{{--                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>--}}
{{--                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>--}}
{{--                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="text-center p-4">--}}
{{--                            <h5 class="mb-0">Instructor Name</h5>--}}
{{--                            <small>Designation</small>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->



@endsection

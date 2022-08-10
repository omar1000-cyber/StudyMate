@extends('welcome')

@section('content')

    <link href="{{asset('frontend/css/profile.css')}}"  rel="stylesheet">
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>CS STUDYMATE</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div id="nav" class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link">Home</a>
                <a href="about" class="nav-item nav-link">About</a>
                <a href="courses" class="nav-item nav-link">Courses</a>
                <a href="find_mates" class="nav-item nav-link">Find_Mates</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team" class="dropdown-item">Our Team</a>
                        <a href="testimonial" class="dropdown-item">Testimonial</a>
                        <a href="book_library" class="dropdown-item">Book Library</a>
                        <a href="project" class="dropdown-item">Projects</a>
                    </div>
                </div>
                <a href="contact" class="nav-item nav-link">Contact</a>
            </div>
            <a href="registration" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>


    <div class="wrapper">
        <div class="left">
            <img src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                 alt="user" width="100">
            <h4>Alex William</h4>
            <p>UI Developer</p>
        </div>
        <div class="right">
            <div class="info">
                <h3>Information</h3>
                <div class="info_data">
                    <div class="data">
                        <h4>Email</h4>
                        <p>alex@gmail.com</p>
                    </div>
                    <div class="data">
                        <h4>Phone</h4>
                        <p>0001-213-998761</p>
                    </div>

                </div>
            </div>

            <div class="projects">
{{--                <h3>Projects</h3>--}}
                <div class="projects_data">
                    <div class="data">
                        <h4><a href="project" class="dropdown-item">send request</a></h4>
{{--                        <a href="project" class="dropdown-item">Projects</a>--}}
                        <p>ask to be a friend</p>
                    </div>
                    <div class="data">
                        <h4>Most Viewed</h4>
                        <p>dolor sit amet.</p>
                    </div>
                </div>
            </div>

            <div class="social_media">
                <ul
                    style="display: flex;align-items: center"
                >

                    <li
                        style="display: flex;flex-direction: column;gap: -200px;align-items: center"
                    ><a

                            href="#"><i class="fa fa-comments"></i>

                        </a>

                    </li>
                    <p style="color: black; font-size: 20px;text-align: center">message</p>
                </ul>
            </div>
        </div>
    </div>


@endsection



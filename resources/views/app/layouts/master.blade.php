<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>وبسایت شخصی</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('app/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('app/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('app/css/style-dark-rtl.css') }}" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('app/css/style.css') }}">
</head>

<body>

@if (!request()->is(['login','register']))
    <!-- Navbar STart -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo container-->
        <div>
            <a class="logo" href="">
                <span class="text-dark">Learnpars</span>
            </a>
        </div>
        <div class="buy-button">
            @auth
            <form action="{{ route('logout') }}" method="post">
            @csrf
            <button class="btn-sm btn-danger" type="submit">خروج</button>
            </form>
            @endauth
                @guest
                <a href="{{ route('login') }}">
                    <div class="btn btn-primary login-btn-primary">ورود</div>
                    <div class="btn btn-light login-btn-light">ورود</div>
                </a>
            @endguest
        </div><!--end login button-->
        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

@include('app.layouts.topnav')
    </div><!--end container-->
</header><!--end header-->
<!-- Navbar End -->


<!-- Hero Start -->
<section class="bg-half w-100" style="background: url({{ asset('app/images/landing/bg.png') }}) center center;">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="page-next-level">
                    <h4 class="title text-white title-dark"> پروژه وبسایت شخصی - دوره جامع متخصص لاراول </h4>
                    <div class="page-next">
                        <nav aria-label="breadcrumb" class="d-inline-block">
                            <ul class="breadcrumb bg-white rounded shadow mb-0">
                                <li class="breadcrumb-item"><a href="index.html">لرن پارس</a> </li>
                                <li class="breadcrumb-item"><a href="index.html">وبسایت شخصی</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div> <!--end container-->
</section><!--end section-->
<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
@endif
<!-- Hero End -->


@yield('content')




@if (!request()->is(['login','register']))
    <!-- Footer Start -->
<footer class="footer footer-bar">
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="text-sm-left justify-content-center d-flex">
                    <p class="mb-0">طراحی شده توسط : <i class="mdi mdi-heart text-danger"></i> <a href="http://www.shreethemes.in/" target="_blank" class="text-reset">mohamad_wd10@</a></p>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</footer><!--end footer-->
<!-- Footer End -->
@endif

<!-- Back to top -->
<a href="#" class="btn btn-icon btn-soft-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
<!-- Back to top -->

<script src="{{ asset('app/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('app/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('app/js/scrollspy.min.js') }}"></script>
<script src="{{ asset('app/js/app.js') }}"></script>
</body>
</html>

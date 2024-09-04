<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>{{ env('APP_NAME') }} - We welcome our investors with huge love</title>

    <!-- Fav Icon -->
    <link rel="icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&amp;display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <!-- Stylesheets List -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/odometer.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

</head>

<body>

    <x-alert />

    <div class="boxed_wrapper">


        <!-- Preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Preloader End -->


        <!-- Main Header -->
        <header class="main-header">
            <div class="outer-container">
                <div class="outer-box">
                    <div class="logo-box">
                        <figure class="logo"><a href="{{ route('Welcome') }}"
                                style="text-decoration: none;color: white;"><img
                                    src="{{ asset('assets/images/logo.png') }}"
                                    style="height: 150px;width: 150px;margin-right: 7px;"></a>
                        </figure>
                    </div>
                    <div class="menu-area">
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="{{ request()->is('/') ? 'current' : '' }}"><a
                                            href="{{ route('Welcome') }}">Home</a></li>
                                    <li class="{{ request()->is('Welcome/Plans') ? 'current' : '' }}"><a
                                            href="{{ route('Plans') }}">Plans</a>
                                    </li>
                                    <li class="{{ request()->is('About-Us') ? 'current' : '' }}"><a
                                            href="{{ route('About') }}">About Us</a>
                                    </li>
                                    <li class="{{ request()->is('Contact-Us') ? 'current' : '' }}"><a
                                            href="{{ route('Contact') }}">Contact</a>
                                    </li>
                                    @if (auth()->user())
                                        <li class="dropdown"><a href="#">Auth</a>
                                            <ul>
                                                {{-- adding logout button with icon --}}
                                                <li><a href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                        <i class="fa fa-sign-out"></i>
                                                        Logout</a>
                                                    <form id="logout-form" action="{{ route('logout') }}"
                                                        method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                    @else
                                        <li class="dropdown"><a href="#">Auth</a>
                                            <ul>
                                                <li><a href="{{ route('login') }}">Sign In</a></li>
                                                <li><a href="{{ route('register') }}">Sign Up</a></li>
                                            </ul>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </nav>
                    </div>
                    @if (auth()->user())
                        <div class="btn-box"><a href="{{ route('User.Dashboard') }}">Dashboard</a></div>
                    @else
                        <div class="btn-box"><a href="{{ route('register') }}">Get Started</a></div>
                    @endif
                </div>
            </div>

            <div class="sticky-header">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="{{ route('Welcome') }}"><img
                                        src="{{ asset('assets/images/logo.png') }}" height="150px" width="150px"
                                        alt=""></a>
                            </figure>
                        </div>
                        <div class="menu-area">
                            <nav class="main-menu">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        @if (auth()->user())
                            <div class="btn-box"><a href="{{ route('User.Dashboard') }}">Dashboard</a></div>
                        @else
                            <div class="btn-box"><a href="{{ route('register') }}">Get Started</a></div>
                        @endif
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Header End -->


        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="{{ route('Welcome') }}"
                        style="margin-right: 16px;color: white;text-decoration: none;">
                        <img src="{{ asset('assets/images/logo.png') }}" height="160px" width="160px">
                    </a>
                </div>
                <div class="menu-outer">
                </div>
            </nav>
        </div>
        <!-- End Mobile Menu -->

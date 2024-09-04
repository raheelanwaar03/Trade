<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Trades Sphere - We welcome our investors with huge love</title>
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

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
    <link href="{{ asset('assets/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/odometer.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

</head>

<body>
    <x-alert />
    <div class="boxed_wrapper">
        <header class="dashboard-header">
            <div class="outer-container">
                <figure class="logo-box"><a href="{{ route('User.Dashboard') }}"><img
                            src="{{ asset('assets/images/logo.png') }}" height="150px" width="150px"></a>
                </figure>
                <div class="header-content">
                    <div class="left-content">
                        <div class="menu-text mobile-nav-toggler"><img
                                src="{{ asset('assets/images/icons/icon-23.svg') }}" alt="">
                            <span>Menu</span>
                        </div>
                        <div class="right-content" style="margin-left: 180px">
                            <div class="admin-box">
                                <span>{{ auth()->user()->name }}</span>
                                <figure class="image-box"><img src="{{ asset('assets/images/resource/admin.png') }}"
                                        alt="">
                                </figure>
                                <ul class="dropdown-box">
                                    <li><a href="#"><img src="{{ asset('assets/images/icons/icon-28.svg') }}"
                                                alt="">Profile</a>
                                    </li>
                                    <li><a href="#">
                                            <img src="{{ asset('assets/images/icons/icon-29.svg') }}" alt="">
                                            Password</a>
                                    </li>
                                    <li>
                                        {{-- adding logout button with icon --}}
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <img src="{{ asset('assets/images/icons/icon-30.svg') }}"
                                                alt="">Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Mobile Menu  -->
        <div class="mobile-menu dashboard-mobile-menu">
            <div class="close-btn"><i class="fas fa-times"></i></div>
            <div class="dashboard-sidebar">
                <figure class="logo-box"><a href="index-2.html"><img src="{{ asset('assets/images/logo.png') }}"
                            alt=""></a></figure>
                <ul class="dashboard-category-list">
                    <li><a href="{{ route('User.Dashboard') }}" class="current"><img
                                src="{{ asset('assets/images/icons/icon-31.svg') }}" alt="">Dashboard</a></li>
                    <li><a href="{{ route('User.Deposit') }}"><img
                                src="{{ asset('assets/images/icons/icon-32.svg') }}" alt="">Deposit</a></li>
                    <li><a href="{{ route('User.Deposit.Report') }}"><img
                                src="{{ asset('assets/images/icons/icon-40.svg') }}" alt="">Deposit Reqort</a>
                    </li>
                    <li><a href="{{ route('User.Plans') }}"><img src="{{ asset('assets/images/icons/icon-33.svg') }}"
                                alt="">Buy Plans</a>
                    </li>
                    <li><a href="{{ route('User.Purchased.Plans') }}"><img
                                src="{{ asset('assets/images/icons/icon-34.svg') }}" alt="">Purchased Plans</a>
                    </li>
                    <li><a href="{{ route('User.All.Rewards') }}"><img
                                src="{{ asset('assets/images/icons/icon-39.svg') }}" alt="">All Rewards</a>
                    </li>
                    <li><a href="{{ route('User.Refer.New.User') }}"><img
                                src="{{ asset('assets/images/icons/icon-36.svg') }}" alt="">Refer Member</a>
                    </li>
                    <li><a href="{{ route('User.My.Team') }}"><img
                                src="{{ asset('assets/images/icons/icon-37.svg') }}" alt="">My Team</a>
                    </li>
                    <li><a href="{{ route('User.Apply.Withdraw') }}"><img
                                src="{{ asset('assets/images/icons/icon-35.svg') }}" alt="">Withdraw</a></li>
                    <li><a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><img
                                src="{{ asset('assets/images/icons/icon-42.svg') }}" alt="">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End Mobile Menu -->


        <section class="dashboard-section">
            <div class="outer-container">
                <div class="dashboard-content">
                    <div class="pricing-dashboard">
                        <div class="upper-box d-flex justify-content-between align-items-center">
                            <div class="">
                                <ul class="text-list clearfix">
                                    <li>User ID : {{ auth()->user()->user_id }}</li>
                                    <li>User Name : <span
                                            style="text-transform:uppercase;">{{ auth()->user()->name }}</span>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <button type="button" class="theme-btn" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">Invest Now</button>
                            </div>
                        </div>
                        <div class="row clearfix">
                            @forelse ($plans as $item)
                                <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                                    <div class="pricing-block-one wow fadeInUp animated">
                                        <div class="inner-box" data-wow-delay="00ms" data-wow-duration="1500ms"
                                            style="background-image: url('{{ asset('plans/' . $item->image) }}');background-size: cover;background-position: center;background-repeat: no-repeat;color:#deff10;font-size:20px;">
                                            <span class="upper-text">{{ $item->name }}</span>
                                            <h2>{{ $item->min }}-100000</h2>
                                            <ul class="list-item clearfix">
                                                <li>1 business account</li>
                                                <li>Lifetime</li>
                                            </ul>
                                            <span class="key-text">Key Features :</span>
                                            <ul class="feature-list clearfix">
                                                <li>Basic Moderate Returns</li>
                                                <li>Expected Return {{ $item->percentage }}%</li>
                                                <li>Daily Profit {{ $item->daily_profit }}%</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <h4 class="text-center text-white">Empty</h4>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Buy Any Plan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{ route('User.Buy.Plan') }}">
                            @csrf
                            <div class="form-group">
                                <label>Amount</label>
                                <input type="number" class="form-control bg-transparent"
                                    style="border-radius: 7px;border:1px solid rgb(83, 82, 82);color:white"
                                    name="amount" placeholder="$00000">
                            </div>
                            <div class="form-group">
                                <label>Select Plan</label>
                                <div class="select-box">
                                    <select class="wide" name="plan">
                                        <option data-display="Select Plan">Select Plan</option>
                                        @foreach ($plans as $item)
                                            <option value="{{ $item->name }}">{{ $item->name }}(
                                                {{ $item->min }} )</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="theme-btn">Purchase</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Scroll Top -->
        <button class="scroll-top scroll-to-target" data-target="html"><i class="icon-4"></i></button>

    </div>

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/odometer.js') }}"></script>
    <script src="{{ asset('assets/js/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/parallax-scroll.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>

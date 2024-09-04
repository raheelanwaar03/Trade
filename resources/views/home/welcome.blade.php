@extends('layouts.app')

@section('content')
    <section class="banner-section text-center">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url({{ asset('assets/images/shape/shape-1.png') }});"></div>
            <div class="pattern zoom-fade" style="background-image: url({{ asset('assets/images/shape/shape.png') }});"></div>
            <div class="pattern-3 rotate-me" style="background-image: url({{ asset('assets/images/shape/shape-3.png') }});">
            </div>
            <div class="pattern-4 zoom-fade" style="background-image: url({{ asset('assets/images/shape/shape-4.png') }});">
            </div>
        </div>
        <div class="parallax-scene parallax-scene-1">
            <div data-depth="0.40" class="bitcoin-1"
                style="background-image: url({{ asset('assets/images/icons/bitcoin-1.png') }});"></div>
            <div data-depth="0.50" class="bitcoin"
                style="background-image: url({{ asset('assets/images/icons/bitcoin.png') }});">
            </div>
            <div data-depth="0.40" class="bitcoin-3"
                style="background-image: url({{ asset('assets/images/icons/bitcoin-3.png') }});"></div>
            <div data-depth="0.60" class="bitcoin-4"
                style="background-image: url({{ asset('assets/images/icons/bitcoin-4.png') }});"></div>
            <div data-depth="0.50" class="bitcoin-5"
                style="background-image: url({{ asset('assets/images/icons/bitcoin-5.png') }});"></div>
        </div>
        <div class="auto-container">
            <div class="content-box">
                <div class="inner-box">
                    <span class="sub-title">Trusted Investment</span>
                    <h2>Updates, Regulations, & Your Investment Journey</h2>
                    <div class="btn-box">
                        @if (auth()->user())
                            <a href="{{ route('User.Dashboard') }}" class="theme-btn"><span>Dashboard</span></a>
                            <a href="{{ asset('assets/images/resource/vector-1.png') }}" class="lightbox-image video-btn"
                                data-caption=""><i class="icon-3"></i></a>
                        @else
                            <a href="{{ route('Plans') }}" class="theme-btn"><span>Plans</span></a>
                            <a href="{{ asset('assets/images/resource/vector-1.png') }}" class="lightbox-image video-btn"
                                data-caption=""><i class="icon-3"></i></a>
                        @endif
                    </div>
                </div>
                <figure class="image-box float-bob-y"><img src="{{ asset('assets/images/resource/vector-1.png') }}"
                        alt="">
                </figure>
            </div>
        </div>
    </section>
    <section class="about-section">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-12 col-sm-12 image-column">
                    <div class="image-box">
                        <div class="image-shape">
                            <div class="shape-1 rotate-me"
                                style="background-image: url({{ asset('assets/images/shape/shape-5.png') }});"></div>
                            <div class="shape"
                                style="background-image: url({{ asset('assets/images/shape/shape-6.png') }});">
                            </div>
                            <div class="shape-3"
                                style="background-image: url({{ asset('assets/images/shape/shape-7.png') }});">
                            </div>
                            <div class="shape-4 float-bob-x"
                                style="background-image: url({{ asset('assets/images/shape/shape-8.png') }});"></div>
                        </div>
                        <figure class="image float-bob-y"><img src="{{ asset('assets/images/resource/vector.png') }}"
                                alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="content-shape"
                            style="background-image: url({{ asset('assets/images/shape/shape-10.png') }});">
                        </div>
                        <div class="section-title">
                            <span class="sub-title">About Us</span>
                            <h2>Integrity, Transparency, and Investor Satisfaction</h2>
                        </div>
                        <div class="text-box">
                            <p>Creating content for a High-Yield Investment Program website requires careful
                                consideration of legal and ethical guidelines. Trades Sphere can be risky
                                investments</p>
                            <a href="about.html" class="theme-btn">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="service-section">
        <div class="pattern-layer">
            <div class="pattern-1" data-parallax='{"x": -100}'
                style="background-image: url({{ asset('assets/images/shape/shape-4.png') }});"></div>
            <div class="pattern" data-parallax='{"x": 100}'
                style="background-image: url({{ asset('assets/images/shape/shape-9.png') }});"></div>
        </div>
        <div class="auto-container">
            <div class="section-title text-center">
                <span class="sub-title">Our Services</span>
                <h2>Our Advisory Services</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><img src="{{ asset('assets/images/icons/icon-1.svg') }}" alt="">
                            </div>
                            <div class="light-icon"><img src="{{ asset('assets/images/icons/icon-1.png') }}"
                                    alt=""></div>
                            <h3><a href="service-details.html">Investment Plans</a></h3>
                            <p>Offer various investment plans with different durations and expected</p>
                            <div class="link"><a href="service-details.html">View Details <i class="icon-4"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><img src="{{ asset('assets/images/icons/icon.svg') }}" alt="">
                            </div>
                            <div class="light-icon"><img src="{{ asset('assets/images/icons/icon.png') }}"
                                    alt="">
                            </div>
                            <h3><a href="service-details.html">Portfolio Management</a></h3>
                            <p>Provide professional portfolio was in services, where investors' funds.</p>
                            <div class="link"><a href="service-details.html">View Details <i class="icon-4"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><img src="{{ asset('assets/images/icons/icon-3.svg') }}"
                                    alt=""></div>
                            <div class="light-icon"><img src="{{ asset('assets/images/icons/icon-3.png') }}"
                                    alt=""></div>
                            <h3><a href="service-details-3.html">Risk Analysis</a></h3>
                            <p>Conduct thorough risk assessments and analysis of investment</p>
                            <div class="link"><a href="service-details-3.html">View Details <i class="icon-4"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><img src="{{ asset('assets/images/icons/icon-4.svg') }}"
                                    alt=""></div>
                            <div class="light-icon"><img src="{{ asset('assets/images/icons/icon-4.png') }}"
                                    alt=""></div>
                            <h3><a href="service-details-4.html">Security Features</a></h3>
                            <p>Implement robust security measures to protect investors' personal</p>
                            <div class="link"><a href="service-details-4.html">View Details <i class="icon-4"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><img src="{{ asset('assets/images/icons/icon-5.svg') }}"
                                    alt=""></div>
                            <div class="light-icon"><img src="{{ asset('assets/images/icons/icon-5.png') }}"
                                    alt=""></div>
                            <h3><a href="service-details-5.html">Withdrawal Services</a></h3>
                            <p>Facilitate quick & secure withdrawals for investors to access their funds</p>
                            <div class="link"><a href="service-details-5.html">View Details <i class="icon-4"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><img src="{{ asset('assets/images/icons/icon-6.svg') }}"
                                    alt=""></div>
                            <div class="light-icon"><img src="{{ asset('assets/images/icons/icon-6.png') }}"
                                    alt=""></div>
                            <h3><a href="service-details-6.html">Referral Programs</a></h3>
                            <p>Offer referral programs or affiliate commissions to incentivize investors</p>
                            <div class="link"><a href="service-details-6.html">View Details <i class="icon-4"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="chooseus-section">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="content-shape zoom-fade"
                            style="background-image: url({{ asset('assets/images/shape/shape-11.png') }});"></div>
                        <div class="section-title">
                            <span class="sub-title">Why Choose Us</span>
                            <h2>Proven Track Record of Success</h2>
                        </div>
                        <div class="text-box">
                            <p>Creating content for a High-Yield Investment Program website requires careful
                                consideration.</p>
                            <div class="inner-box clearfix">
                                <div class="single-item">
                                    <div class="inner">
                                        <span>No. 1</span>
                                        <p>Transparent Reporting</p>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="inner">
                                        <span>No. 2</span>
                                        <p>Withdrawal Services</p>
                                    </div>
                                </div>
                            </div>
                            <a href="about.html" class="theme-btn">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 image-column">
                    <div class="image-box">
                        <div class="image-shape">
                            <div class="shape-1"
                                style="background-image: url({{ asset('assets/images/shape/shape-6.png') }});">
                            </div>
                            <div class="shape"
                                style="background-image: url({{ asset('assets/images/shape/shape-12.png') }});">
                            </div>
                            <div class="shape-3 zoom-fade"
                                style="background-image: url({{ asset('assets/images/shape/shape-13.png') }});"></div>
                            <div class="shape-4 float-bob-y"
                                style="background-image: url({{ asset('assets/images/shape/shape-14.png') }});"></div>
                            <div class="shape-5"
                                style="background-image: url({{ asset('assets/images/shape/shape-7.png') }});">
                            </div>
                        </div>
                        <figure class="image"><img src="{{ asset('assets/images/resource/vector-3.png') }}"
                                alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="funfact-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="funfact-block-one">
                    <div class="inner-box">
                        <div class="count-outer">
                            <span class="odometer" data-count="99">00</span><span class="symble">%</span>
                        </div>
                        <p>Customer satisfaction</p>
                    </div>
                </div>
                <div class="funfact-block-one">
                    <div class="inner-box">
                        <div class="count-outer">
                            <span class="odometer" data-count="32">00</span><span class="symble">M</span>
                        </div>
                        <p>Active users</p>
                    </div>
                </div>
                <div class="funfact-block-one">
                    <div class="inner-box">
                        <div class="count-outer">
                            <span class="odometer" data-count="125">00</span><span class="symble">+</span>
                        </div>
                        <p>Team members</p>
                    </div>
                </div>
                <div class="funfact-block-one">
                    <div class="inner-box">
                        <div class="count-outer">
                            <span class="odometer" data-count="240">00</span><span class="symble">%</span>
                        </div>
                        <p>Company growth</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pricing-section">
        <div class="pattern-layer">
            <div class="pattern-1" data-parallax='{"x": -100}'
                style="background-image: url({{ asset('assets/images/shape/shape-4.png') }});"></div>
            <div class="pattern" data-parallax='{"x": 100}'
                style="background-image: url({{ asset('assets/images/shape/shape-9.png') }});"></div>
            <div class="pattern-3" style="background-image: url({{ asset('assets/images/shape/shape-15.png') }});"></div>
        </div>
        <div class="auto-container">
            <div class="section-title text-center">
                <span class="sub-title">Pricing Plan</span>
                <h2>Choose Your Best <br>Plan For Investing</h2>
            </div>
            <div class="row clearfix">
                @forelse ($plans as $item)
                    <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                        <div class="pricing-block-one wow fadeInUp animated" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <span class="upper-text">{{ $item->name }}</span>
                                <h2>{{ $item->min }}-100000
                                </h2>
                                <a href="{{ route('User.Plans') }}" class="theme-btn">Get It Now</a>
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
                    <h3 class="text-center text-white">Empty</h3>
                @endforelse
            </div>
        </div>
    </section>
    <section class="faq-section">
        <div class="pattern-layer" style="background-image: url({{ asset('assets/images/shape/shape-19.png') }});"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="section-title">
                            <span class="sub-title">FAQ</span>
                            <h2>Frequently <br>Asked Question</h2>
                        </div>
                        <div class="text-box">
                            <p>Holisticly predominate revolutionar value without robust manufacturey products
                                <br>credibly evisculate.
                            </p>
                            <a href="contact.html" class="theme-btn">Contact us</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 accordion-column">
                    <div class="accordion-inner">
                        <div class="content-shape">
                            <div class="shape-1 zoom-fade"
                                style="background-image: url({{ asset('assets/images/shape/shape-17.png') }});"></div>
                            <div class="shape zoom-fade"
                                style="background-image: url({{ asset('assets/images/shape/shape-18.png') }});"></div>
                        </div>
                        <ul class="accordion-box">
                            <li class="accordion block active-block">
                                <div class="acc-btn active">
                                    <h3>How Can I Pay?</h3>
                                </div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humou, or
                                            words which don't look even slightly believable.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <h3>How Does It Work?</h3>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humou, or
                                            words which don't look even slightly believable.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <h3>What Is Process To Get Expert Team?</h3>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humou, or
                                            words which don't look even slightly believable.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <h3>How Can I Migrate To Another Site?</h3>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humou, or
                                            words which don't look even slightly believable.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial-section">
        <div class="pattern-layer">
            <div class="pattern-1 zoom-fade"
                style="background-image: url({{ asset('assets/images/shape/shape0.png') }});"></div>
            <div class="pattern zoom-fade" style="background-image: url({{ asset('assets/images/shape/shape1.png') }});">
            </div>
        </div>
        <div class="auto-container">
            <div class="section-title text-center">
                <span class="sub-title">Testimonials</span>
                <h2>Our Clients Feedback</h2>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme owl-nav-none">
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><img src="{{ asset('assets/images/icons/icon-7.png') }}" alt="">
                        </div>
                        <p>“ I’ve been investing with for several months now, and I've been consistently impressed ”
                        </p>
                        <ul class="rating">
                            <li><i class="icon-8"></i></li>
                            <li><i class="icon-8"></i></li>
                            <li><i class="icon-8"></i></li>
                            <li><i class="icon-8"></i></li>
                            <li><i class="icon-8"></i></li>
                        </ul>
                        <h3>Annette Black</h3>
                        <span class="designation">Solar Panel</span>
                    </div>
                </div>
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><img src="{{ asset('assets/images/icons/icon-7.png') }}" alt="">
                        </div>
                        <p>“ I was initially skeptical about investing in s, but after doing my research and
                            speaking ”</p>
                        <ul class="rating">
                            <li><i class="icon-8"></i></li>
                            <li><i class="icon-8"></i></li>
                            <li><i class="icon-8"></i></li>
                            <li><i class="icon-8"></i></li>
                            <li><i class="icon-8"></i></li>
                        </ul>
                        <h3>Kathryn Murphy</h3>
                        <span class="designation">Real State</span>
                    </div>
                </div>
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><img src="{{ asset('assets/images/icons/icon-7.png') }}" alt="">
                        </div>
                        <p>“ As a seasoned investor, I'm always on the lookout for new opportunities, and ”</p>
                        <ul class="rating">
                            <li><i class="icon-8"></i></li>
                            <li><i class="icon-8"></i></li>
                            <li><i class="icon-8"></i></li>
                            <li><i class="icon-8"></i></li>
                            <li><i class="icon-8"></i></li>
                        </ul>
                        <h3>Robert Fox</h3>
                        <span class="designation">Bitcoin Mining</span>
                    </div>
                </div>
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><img src="{{ asset('assets/images/icons/icon-7.png') }}" alt="">
                        </div>
                        <p>“ I’ve been investing with for several months now, and I've been consistently impressed ”
                        </p>
                        <ul class="rating">
                            <li><i class="icon-8"></i></li>
                            <li><i class="icon-8"></i></li>
                            <li><i class="icon-8"></i></li>
                            <li><i class="icon-8"></i></li>
                            <li><i class="icon-8"></i></li>
                        </ul>
                        <h3>Annette Black</h3>
                        <span class="designation">Real State</span>
                    </div>
                </div>
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><img src="{{ asset('assets/images/icons/icon-7.png') }}" alt="">
                        </div>
                        <p>“ I was initially skeptical about investing in s, but after doing my research and
                            speaking ”</p>
                        <ul class="rating">
                            <li><i class="icon-8"></i></li>
                            <li><i class="icon-8"></i></li>
                            <li><i class="icon-8"></i></li>
                            <li><i class="icon-8"></i></li>
                            <li><i class="icon-8"></i></li>
                        </ul>
                        <h3>Kathryn Murphy</h3>
                        <span class="designation">Solar Panel</span>
                    </div>
                </div>
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><img src="{{ asset('assets/images/icons/icon-7.png') }}" alt="">
                        </div>
                        <p>“ As a seasoned investor, I'm always on the lookout for new opportunities, and ”</p>
                        <ul class="rating">
                            <li><i class="icon-8"></i></li>
                            <li><i class="icon-8"></i></li>
                            <li><i class="icon-8"></i></li>
                            <li><i class="icon-8"></i></li>
                            <li><i class="icon-8"></i></li>
                        </ul>
                        <h3>Robert Fox</h3>
                        <span class="designation">Bitcoin Mining</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.app')

@section('content')
    <section class="pricing-section pricing-page">
        <div class="pattern-layer">
            <div class="pattern-1" data-parallax='{"x": -100}' style="background-image: url(assets/images/shape/shape-4.png);">
            </div>
            <div class="pattern-2" data-parallax='{"x": 100}' style="background-image: url(assets/images/shape/shape-9.png);">
            </div>
            <div class="pattern-3" style="background-image: url(assets/images/shape/shape-15.png);"></div>
            <div class="pattern-4" style="background-image: url(assets/images/shape/shape-42.png);"></div>
        </div>
        <div class="auto-container">
            <div class="section-title text-center">
                <span class="sub-title">Pricing Plan</span>
                <h2>Choose Your Best <br>Plan For Investing</h2>
            </div>
            <div class="upper-content">
                <div class="row clearfix">
                    @foreach ($plans as $item)
                        <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                            <div class="pricing-block-one wow fadeInUp animated" data-wow-delay="00ms"
                                data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <span class="upper-text">{{ $item->name }}</span>
                                    <h2>{{ $item->min }}-100000
                                    </h2>
                                    @if (auth()->user())
                                        <a href="{{ route('User.Plans') }}" class="theme-btn">Get It Now</a>
                                    @else
                                        <a href="{{ route('login') }}" class="theme-btn">Get It Now</a>
                                    @endif
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
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection

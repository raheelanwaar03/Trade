@extends('user.layout.app')

@section('content')
    <section class="dashboard-section">
        <div class="outer-container">
            <div class="dashboard-content">
                <div class="pricing-dashboard">
                    <div class="upper-box">
                        <ul class="text-list clearfix">
                            <li>User ID : {{ auth()->user()->user_id }}</li>
                            <li>User Name : <span style="text-transform:uppercase;">{{ auth()->user()->name }}</span></li>
                        </ul>
                    </div>
                    <div class="row clearfix">
                        @forelse ($plans as $item)
                            <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                                <div class="pricing-block-one wow fadeInUp animated" data-wow-delay="00ms"
                                    data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <span class="upper-text">{{ $item->name }}</span>
                                        <h2>{{ $item->min }}</h2>
                                        <a href="index-2.html" class="theme-btn">Get It Now</a>
                                        <ul class="list-item clearfix">
                                            <li>1 business account</li>
                                            <li>Lifetime</li>
                                        </ul>
                                        <span class="key-text">Key Features :</span>
                                        <ul class="feature-list clearfix">
                                            <li>Basic Moderate Returns</li>
                                            <li>Expected Return 5% to 25%</li>
                                            <li>General Support</li>
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
@endsection

@extends('user.layout.app')
@section('content')
    <section class="dashboard-section">
        <div class="outer-container">
            <div class="dashboard-content">
                <div class="pricing-dashboard">
                    <div class="upper-box d-flex justify-content-between align-items-center">
                        <div class="">
                            <ul class="text-list clearfix">
                                <li>User Name : <span style="text-transform:uppercase;">{{ auth()->user()->name }}</span>
                                </li>
                                <li>Purchased Plans </li>
                                <li>Balance {{ auth()->user()->balance }} </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row clearfix">
                        @forelse ($purchasedPlans as $item)
                            <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                                <div class="pricing-block-one wow fadeInUp animated" data-wow-delay="00ms"
                                    data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <span class="upper-text">{{ $item->plan_name }}</span>
                                        <h2>{{ $item->amount }}</h2>
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
@endsection

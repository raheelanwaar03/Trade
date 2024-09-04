@extends('admin.layout.app')

@section('content')
    <section class="dashboard-section">
        <div class="outer-container">
            <div class="dashboard-content">
                <div class="pricing-dashboard">
                    <div class="upper-box">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 style="color: yellow">Hi <span style="text-transform:uppercase;">{{ auth()->user()->name }}
                                    Welcome to Plans
                                    Page</span></h5>
                            <a href="{{ route('Admin.Add.Plan') }}" class="btn btn-warning text-white">Add New Plan</a>
                        </div>
                    </div>
                    <div class="row clearfix">
                        @forelse ($plans as $item)
                            <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                                <div class="pricing-block-one wow fadeInUp animated" data-wow-delay="00ms"
                                    data-wow-duration="1500ms"
                                    style="background-image: url('{{ asset('plans/' . $item->image) }}');background-size: cover;background-position: center;background-repeat: no-repeat;color:#deff10;font-size:20px;">
                                    <div class="inner-box">
                                        <span class="upper-text">{{ $item->name }}</span>
                                        <h2>{{ $item->min }}-1000000</h2>
                                        <a href="{{ route('Admin.Edit.Plan', $item->id) }}" class="theme-btn">Update</a>
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

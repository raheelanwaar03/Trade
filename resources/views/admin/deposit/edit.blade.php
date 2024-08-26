@extends('admin.layout.app')

@section('content')
    <section class="dashboard-section">
        <div class="outer-container">
            <div class="dashboard-content">
                <div class="activites-content">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                            <div class="single-item">
                                <span>Account Number</span>
                                <h2>{{ $deposit->account_num }}</h2>
                                <span>Account Title</span>
                                <h2>{{ $deposit->title }}</h2>
                                <span>Amount</span>
                                <h2>{{ $deposit->amount }}</h2>
                                <span>TID</span>
                                <h2>{{ $deposit->tid }}</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                            <div class="single-item text-center">
                                <img src="{{ asset('deposit/' . $deposit->img) }}" class="img-fluid"
                                    style="border-radius: 20px;height:285px;width:400px;">
                            </div>
                        </div>
                    </div>

                    {{-- form for deposit request --}}
                    <div class="row clearfix mt-4">
                        <div class="col-lg-12 col-md-12 col-sm-12 column">
                            <div class="card single-item">
                                <div class="card-body">
                                    <div class="d-flex justify-content-around align-items-center">
                                        <h5 class="card-title text-center" style="color:yellow">Enter Amount To Deposit</h5>
                                        <a href="{{ route('Admin.Approve.Deposit', $deposit->id) }}"
                                            class="btn btn-success">Approve</a>
                                    </div>
                                    <form action="{{ route('Admin.Update.Deposit', $deposit->id) }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="amount">Amount</label>
                                            <input type="number" id="amount" name="amount"
                                                value="{{ $deposit->amount }}"
                                                class="form-control bg-transparent text-white">
                                        </div>
                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-warning text-white">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection

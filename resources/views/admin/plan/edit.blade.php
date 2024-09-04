@extends('admin.layout.app')

@section('content')
    <section class="dashboard-section">
        <div class="outer-container">
            <div class="dashboard-content">
                <div class="activites-content">
                    {{-- form for deposit request --}}
                    <div class="row clearfix mt-4">
                        <div class="col-lg-12 col-md-12 col-sm-12 column">
                            <div class="card single-item">
                                {{-- add title --}}
                                <div class="card-header">
                                    <h3 class="card-title text-center" style="color: #deff10">Add New Plan</h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('Admin.Update.Plan', $plan->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name">Plan Name</label>
                                            <input type="text" id="name" name="name"
                                                class="form-control bg-transparent text-white" value="{{ $plan->name }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="min">Minimum Amount</label>
                                            <input type="number" id="min" name="min"
                                                class="form-control bg-transparent text-white" value="{{ $plan->min }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="percentage">Plan Percentage</label>
                                            <input type="number" id="percentage" name="percentage"
                                                class="form-control bg-transparent text-white"
                                                value="{{ $plan->percentage }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="daily_profit">Daily Profit</label>
                                            <input type="number" step="0.025" id="daily_profit" name="daily_profit"
                                                class="form-control bg-transparent text-white"
                                                value="{{ $plan->daily_profit }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <input type="file" id="image" name="image"
                                                class="form-control bg-transparent text-white" value="{{ $plan->image }}">
                                            <img src="{{ asset('plans/' . $plan->image) }}" class="img-fluid mt-3"
                                                height="80px" width="80px">
                                        </div>
                                        <div class="mt-2" style="float: right">
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

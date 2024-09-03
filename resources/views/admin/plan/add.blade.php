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
                                <div class="card-body">
                                    <form action="{{ route('Admin.Update.Deposit',auth()->user()->id) }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="amount">Amount</label>
                                            <input type="number" id="amount" name="amount"
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

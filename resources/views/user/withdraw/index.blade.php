@extends('user.layout.app')

@section('content')
    <section class="dashboard-section">
        <div class="outer-container">
            <div class="dashboard-content">
                <div class="activites-content">
                    <div class="row clearfix mt-4">
                        <div class="col-lg-12 col-md-12 col-sm-12 column">
                            <div class="card single-item">
                                <div class="card-body">
                                    <h5 class="card-title text-center" style="color:yellow">Apply Withdrawal
                                        ({{ auth()->user()->balance }})</h5>
                                    <form action="{{ route('User.Store.Withdraw') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="amount" style="color:yellow">Amount</label>
                                            <input type="number" id="amount" name="amount"
                                                class="form-control bg-transparent text-white"
                                                style="border: 1px solid yellow" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="number" style="color:yellow">Account Number</label>
                                            <input type="number" id="number" name="number"
                                                style="border: 1px solid yellow"
                                                class="form-control bg-transparent text-white" required min="11">
                                        </div>
                                        <div class="form-group">
                                            <label for="title" style="color:yellow">Account Title</label>
                                            <input type="text" id="title" name="title"
                                                style="border: 1px solid yellow"
                                                class="form-control bg-transparent text-white" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="bank" style="color:yellow">Bank Name</label>
                                            <input type="text" name="bank" id="bank"
                                                class="form-control bg-transparent text-white"
                                                style="border: 1px solid yellow">
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

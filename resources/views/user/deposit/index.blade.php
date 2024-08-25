@extends('user.layout.app')

@section('content')
    <section class="dashboard-section">
        <div class="outer-container">
            <div class="dashboard-content">
                <div class="activites-content">
                    <div class="row clearfix">
                        @forelse ($account as $item)
                            <div class="col-lg-6 col-md-6 col-sm-12 column">
                                <div class="single-item">
                                    <div class="icon-box">
                                        <p onclick="copyToClipboard('{{ $item->account_num }}')">
                                            <i class="fa fa-clone text-white" aria-hidden="true" id="copy-icon"
                                                class="copy-icon"></i>
                                        </p>
                                    </div>
                                    <span>Account Number</span>
                                    <h2>{{ $item->account_num }}
                                    </h2>
                                    <span>Account Title</span>
                                    <h2>{{ $item->user_name }}</h2>
                                    <span>Bank</span>
                                    <h2>{{ $item->bank_name }}</h2>
                                </div>
                            </div>
                        @empty
                            <h4 class="text-center text-white">Empty</h4>
                        @endforelse
                    </div>

                    {{-- form for deposit request --}}
                    <div class="row clearfix mt-4">
                        <div class="col-lg-12 col-md-12 col-sm-12 column">
                            <div class="card single-item">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Deposit Request</h5>
                                    <form action="{{ route('User.Deposit.Request') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="account_num">Account Number</label>
                                            <input type="number" id="account_num" name="account_num" class="form-control"
                                                required min="11">
                                        </div>
                                        <div class="form-group">
                                            <label for="amount">Amount</label>
                                            <input type="number" id="amount" name="amount" class="form-control"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="title">Account Title</label>
                                            <input type="text" id="title" name="title" class="form-control"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tid">TID</label>
                                            <input type="number" id="tid" name="tid" class="form-control"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="img">Payment Screen-Shot</label>
                                            <input type="file" id="img" name="img" class="form-control"
                                                required>
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

@section('scripts')
    <script>
        function copyToClipboard(account_num) {
            // Create a temporary input element
            var tempInput = document.createElement("input");
            // Set the input's value to the email
            tempInput.value = account_num;
            // Append the input to the body
            document.body.appendChild(tempInput);
            // Select the input's value
            tempInput.select();
            // Copy the value to the clipboard
            document.execCommand("copy");
            // Remove the temporary input
            document.body.removeChild(tempInput);
            alert("Account Copied: " + account_num);
        }
    </script>
@endsection

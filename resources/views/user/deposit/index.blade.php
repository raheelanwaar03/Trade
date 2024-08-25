@extends('user.layout.app')

@section('content')
    <section class="dashboard-section">
        <div class="outer-container">
            <div class="dashboard-content">
                <div class="activites-content">
                    <div class="row clearfix">
                        @forelse ($account as $item)
                            <div class="col-lg-6 col-md-6 col-sm-12 column">
                                <a href="#" class="single-item">
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
                                </a>
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

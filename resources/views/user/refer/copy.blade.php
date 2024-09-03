@extends('user.layout.app')

@section('content')
    <section class="dashboard-section">
        <div class="outer-container">
            <div class="dashboard-content">
                <div class="referral-content">
                    <div class="title-box">
                        <h6>Referral Link</h6>
                        <p>You can also share your referral link by copying and sending it or sharing it on your
                            social media</p>
                    </div>
                    <div class="reffer-box">
                        <input type="text" name="reffer-code"
                            value="{{ route('register', ['referral' => Auth::user()->user_id]) }}" id="myInput" readonly>
                        <div class="btn-box">
                            <button type="button" class="btn btn-primary" onclick="copy()">Copy</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        function copy() {
            // Get the text field
            var copyText = document.getElementById("myInput");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(copyText.value);
            // Alert the copied text
            alert("Copied the text: " + copyText.value);
        }
    </script>
@endsection

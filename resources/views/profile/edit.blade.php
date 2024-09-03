@extends('user.layout.app')

@section('content')
    <section class="dashboard-section">
        <div class="outer-container">
            <div class="dashboard-content">
                <div class="profile-content">
                    <div class="title-box">
                        <h5 class="text-center mb-3">Profile Details</h5>
                    </div>
                    <form method="post" class="p-4 mt-3">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input type="text" name="name" value="{{ auth()->user()->name }}" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="email" name="email" value="{{ auth()->user()->email }}" readonly>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Referral Link</label>
                                    <input type="text"
                                        value="{{ route('register', ['referral' => Auth::user()->user_id]) }}"
                                        id="myInput" readonly>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="btn-box">
                                    <button type="button" class="theme-btn btn-one" onclick="copy()">Copy</button>
                                </div>
                            </div>
                        </div>
                    </form>
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

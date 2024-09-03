@extends('user.layout.app')

@section('content')
    <section class="dashboard-section">
        <div class="outer-container">
            <div class="dashboard-content">
                <div class="profile-content">
                    <div class="title-box">
                        <h5 class="text-center mb-3">Change Password</h5>
                    </div>
                    <form action="{{ route('User.Update.Password', auth()->user()->id) }}" method="post" class="p-4 mt-3">
                        @csrf
                        <div class="row">
                            <div class="mx-auto col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>New Password</label>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <input type="password" name="password" id="password" required>
                                        <i class="fa fa-eye" id="togglePassword"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="btn-box">
                                    <button type="submit" class="theme-btn btn-one">Change</button>
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
        document.getElementById("togglePassword").addEventListener("click", function() {
            var passwordField = document.getElementById("password");
            var icon = this;

            // Toggle the type attribute
            if (passwordField.type === "password") {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        });
    </script>
@endsection

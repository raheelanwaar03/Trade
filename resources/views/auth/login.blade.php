@extends('layouts.app')
@section('content')
    <section class="form-section signin-form text-center">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url({{ asset('assets/images/shape/shape-57.png') }}') }});"></div>
            <div class="pattern-2" style="background-image: url({{ asset('assets/images/shape/shape-59.png') }}') }});"></div>
            <div class="pattern-3" style="background-image: url({{ asset('assets/images/shape/shape-60.png') }}') }});"></div>
            <div class="pattern-4" style="background-image: url({{ asset('assets/images/shape/shape-61.png') }}') }});"></div>
            <div class="pattern-5" style="background-image: url({{ asset('assets/images/shape/shape-62.png') }}') }});">
            </div>
        </div>
        <div class="auto-container">
            <div class="section-title">
                <span class="sub-title">Sign In</span>
                <h2>Welcome To {{ env('APP_NAME') }}</h2>
            </div>
            <div class="form-box">
                <h4>Sign In to your account</h4>
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your email" required>
                    </div>
                    <div class="form-group">
                        <div class="icon-box"><span id="togglePassword" style="cursor: pointer;"><img
                                    src="{{ asset('assets/images/icons/icon-21.svg') }}"></span>
                        </div>
                        <input type="password" name="password" id="password" placeholder="Password" required>
                    </div>
                    <div class="option-box">
                        <div class="check-box">
                            {{-- add remember me name --}}
                            <input type="checkbox" name="remember" id="remember">
                            <label for="remember">Remember me</label>
                        </div>
                        <a href="{{ route('password.email') }}" style="font-size:12px;color:white">Forgot Password</a>
                    </div>
                    <div class="btn-box">
                        <button type="submit" class="theme-btn">Login</button>
                    </div>
                </form>
            </div>
            <div class="text">Can’t login? <a href="{{ route('register') }}">Sign up for new user?</a></div>
        </div>
    </section>

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

@endsection

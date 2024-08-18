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
                <span class="sub-title">Sign Up</span>
                <h2>Welcome To Hipre</h2>
            </div>
            <div class="form-box">
                <h4>Sign Up to your account</h4>
                <form method="post" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Your name" required>
                    </div>
                    <div class="form-group">
                        <div class="icon-box"><span class="toggle-password" data-target="password1"
                                style="cursor: pointer;"><img src="{{ asset('assets/images/icons/icon-21.svg') }}"
                                    alt=""></span>
                        </div>
                        <input type="password" id="password1" name="password" placeholder="Your Password" required>
                    </div>
                    <div class="form-group">
                        <div class="icon-box"><span class="toggle-password" data-target="password2"
                                style="cursor: pointer;"><img src="{{ asset('assets/images/icons/icon-21.svg') }}"
                                    alt=""></span>
                        </div>
                        <input type="password" id="password2" name="password_confirmation" placeholder="Confirm Password"
                            required>
                    </div>
                    <p>By signing up, you confirm that you’ve read and accepted our Privacy Policy.</p>
                    <div class="btn-box">
                        <button type="submit" class="theme-btn">Register</button>
                    </div>
                </form>
                <div class="text">Already have an account? <a href="{{ route('login') }}">Log in</a></div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        function togglePasswordVisibility(icon) {
            var targetId = icon.getAttribute('data-target');
            var passwordField = document.getElementById(targetId);

            if (passwordField.type === "password") {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        }

        // Add event listener to all elements with the class "toggle-password"
        document.querySelectorAll('.toggle-password').forEach(function(icon) {
            icon.addEventListener('click', function() {
                togglePasswordVisibility(this);
            });
        });
    </script>
@endsection

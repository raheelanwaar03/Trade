@extends('layouts.app')

@section('content')
    <section class="form-section text-center">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url(assets/images/shape/shape-57.png);"></div>
            <div class="pattern-2" style="background-image: url(assets/images/shape/shape-59.png);"></div>
            <div class="pattern-3" style="background-image: url(assets/images/shape/shape-60.png);"></div>
            <div class="pattern-4" style="background-image: url(assets/images/shape/shape-61.png);"></div>
            <div class="pattern-5" style="background-image: url(assets/images/shape/shape-62.png);"></div>
        </div>
        <div class="auto-container">
            <div class="section-title">
                <span class="sub-title">Forget Password</span>
                <h2>Recover Password</h2>
            </div>
            <div class="form-box">
                <h4>Send Reset Link</h4>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your email" :value="old('email')" required>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="login-text"><a href="{{ route('login') }}">Login Here</a></div>
                    <div class="btn-box">
                        <button type="submit" class="theme-btn">Send Link</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
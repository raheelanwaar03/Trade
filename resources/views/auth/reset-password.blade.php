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
                <form method="POST" action="{{ route('password.store') }}">
                    @csrf
                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <div class="form-group">
                        <x-text-input id="email" type="email" name="email"
                            :value="old('email', $request->email)" required readonly autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="form-group">
                        <input type="password" id="password" type="password" placeholder="Enter New Password" name="password" required
                            autocomplete="new-password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="form-group">
                        <input type="password" id="password_confirmation" class="block mt-1 w-full" placeholder="Confirm Password" type="password"
                            name="password_confirmation" required autocomplete="new-password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
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

{{-- <form method="POST" action="{{ route('password.store') }}">
    @csrf

    <!-- Password Reset Token -->
    <input type="hidden" name="token" value="{{ $request->route('token') }}">

    <!-- Email Address -->
    <div>
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required
            autofocus autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-input-label for="password" :value="__('Password')" />
        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
            autocomplete="new-password" />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
            required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    <div class="flex items-center justify-end mt-4">
        <x-primary-button>
            {{ __('Reset Password') }}
        </x-primary-button>
    </div>
</form> --}}

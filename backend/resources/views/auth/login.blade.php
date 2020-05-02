@extends('auth.layouts.app')

@section('content')

<div class="form login_form">
    <section class="login_content">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1>{{ __('Login') }}</h1>
            <div>
                <input id="email" type="email" 
                class="form-control @error('email') 
                is-invalid @enderror" name="email" 
                value="{{ old('email') }}" 
                placeholder="{{ __('E-Mail Address') }}" 
                required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                @if (Route::has('password.request'))
                    <a class="reset_pass" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>

            <div class="clearfix"></div>

            <div class="separator">
                <p class="change_link">New to site?
                    <a href="{{ route('register') }}" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />
                <div>
                    <p>©2020 All Rights Reserved. No Naem Inc.</p>
                </div>
            </div>
        </form>
    </section>
</div>
@endsection

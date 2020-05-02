@extends('auth.layouts.app')

@section('content')
<div id="register" class="form login_form">
    <section class="login_content">
        <form>
            <h1>{{ __('Register') }}</h1>
            <div>
                <input id="name" type="text" class="form-control 
                    @error('name') is-invalid @enderror" name="name" 
                    value="{{ old('name') }}" required autocomplete="name" 
                    placeholder="{{ __('Name') }}" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div>
                <input id="email" type="email" class="form-control 
                    @error('email') is-invalid @enderror" name="email" 
                    value="{{ old('email') }}"required autocomplete="email"
                    placeholder="{{ __('E-Mail Address') }}">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div>
                <input id="password" type="password" class="form-control 
                    @error('password') is-invalid @enderror" name="password" 
                    required autocomplete="new-password" placeholder="{{ __('Password') }}">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div>
                <input id="password-confirm" type="password" class="form-control 
                    @error('password') is-invalid @enderror" name="password_confirmation" 
                    required autocomplete="new-password" placeholder="{{ __('Confirm Password') }}">
            </div>
            <div>
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
                <p class="change_link">Already a member ?
                    <a href="{{ route('login') }}" class="to_register"> {{ __('Login') }} </a>
                </p>
            </div>
        </form>
    </section>
</div>
@endsection

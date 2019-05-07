@extends('layouts.app')

@section('content')
<div class="page-content--bge5">
    <div class="container">
        <div class="login-wrap">
            <div class="login-content">
                <h1>
                    {{ __('Login') }}
                </h1>
                <br>
                <div class="login-form">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            @if ($errors->has('email'))
                                <div class="badge badge-danger" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </div>
                            @endif
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input id="email" class="au-input au-input--full {{ $errors->has('email') ? ' is-invalid form-control' : '' }}" name="email" value="{{ old('email') }}" type="email" name="email" placeholder="Email" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" class="au-input au-input--full{{ $errors->has('email') ? ' is-invalid form-control' : '' }}" type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="login-checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>{{ __('Remember Me') }}
                            </label>
                            <label>
                                <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                            </label>
                        </div>
                        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">{{ __('Login') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="page-content--bge5">
    <div class="container">
        <div class="login-wrap">
            <div class="login-content">
                <h1>
                    {{ __('Forgot Password') }}
                </h1>
                <br>
                @if (session('status'))
                    <div class="badge badge-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                @if ($errors->has('email'))
                    <span class="badge badge-danger" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <div class="login-form">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group">
                            <label>{{ __('E-Mail Address') }}</label>
                            <input id="email" class="au-input au-input--full{{ $errors->has('email') ? ' alert alert-danger' : '' }}" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                        </div>
                        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">{{ __('Send Password Reset Link') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.Auth.app')

@section('content')
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
            <div class="account-center">
                <div class="account-box">
                    <form action="{{ route('login') }}" class="form-signin" method="post">
                        @csrf
                        <div class="account-logo">
                            <a href="/"><img src="{{ asset('assets/img/user.png') }}" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label>Username or Email</label>
                            <input type="email" name="email" autofocus="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        {{-- <div class="form-group text-right">
                            <a href="forgot-password.html">Forgot your password?</a>
                        </div> --}}
                        <div class="form-group text-center">
                            <button type="submit" name="login" class="btn btn-primary account-btn">Login</button>
                        </div>
                        <div class="text-center register-link">
                            Don’t have an account? <a href="{{ route('register_form') }}">Register Now</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
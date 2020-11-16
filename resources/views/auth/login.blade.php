@extends('layouts.app')


@section('content')

    <div id="layoutAuthentication_content">
        <main>
            <div class="container">

                <div class="row">
                    <div class="col-sm-4 ">
                        <a class="btn btn-info" href="/">&laquo; Back</a>

                    </div>
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-4  text-right menu-1">
                    </div>

                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="login-logo" style="text-align: center">
                            <img class="my-3" height="120" src="assets/img/CHI-logo.png" alt="MYCHI Logo">
                        </div>


                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header justify-content-center">
                                <h3 class="font-weight-light my-4">Admin Login</h3>
                            </div>
                            <div class="card-body">
                                <form id="login-form" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <!-- Login Error -->
                                    <div id="login-error"></div>

                                    <div class="form-group">
                                        <label class="small mb-1" for="inputEmailAddress">Username</label>

                                        <input type="text" class="form-control py-4 @error('username') is-invalid @enderror"
                                            name="username" />
                                        @error('username')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                    <div class="form-group">
                                        <label class="small mb-1" for="inputPassword">Password</label>

                                        <input type="password"
                                            class="form-control py-4 @error('username') is-invalid @enderror"
                                            name="password" />
                                        @error('password')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox"><input class="custom-control-input"
                                               name="remember" id="rememberPasswordCheck" type="checkbox" /><label
                                                class="custom-control-label" for="rememberPasswordCheck">Remember
                                                password</label></div>
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <a class="small" href="{{route('password.request')}}">Forgot Password?</a>
                                        <button class="btn btn-primary" type="submit" name="login-btn"
                                            id="login-btn">Login</button>
                                        <!-- <a class="btn btn-primary" href="">Login</a> -->
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <div class="small"><a href="/register">Need an account? Sign up!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

@endsection

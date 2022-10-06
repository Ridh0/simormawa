@extends('auth.layouts.app')
@section('content')
<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
    <div class="container">
        <div class="row">
            <style>
                .auth-wrapper .auth-content3 {
                    position: relative;
                    padding: 0px;
                    z-index: 5;
                }
            </style>
            <div class="col-md-4 mb-3 mt-2">
                <div class="auth-content3">
                    <div class="card">
                        <div class="row align-items-center text-center">
                            <div class="col-md-12">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="card-body">
                                     
                                        <img src="{{asset('logo-polsri.png')}}" width="40%" alt="" class="img-fluid mb-4">
                                        <h3>Registrasi </h3>
                                        <!-- <p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.html" class="f-w-400">Signup</a></p> -->
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                .auth-wrapper .auth-content2 {
                    position: relative;
                    padding: 0px;
                    z-index: 5;
                }
            </style>
            <div class="col-md-8 mb-3 mt-2">
                <div class="auth-content2">
                    <div class="card">
                        <div class="row align-items-center text-center">
                            <div class="col-md-12">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="card-body">
                                        @if(Session::has('errors'))
                                        <div class="bg-danger p-3 rounded text-center mb-4 text-sm text-white">
                                            {{ Session::get('errors')->first() }}
                                        </div>
                                        @endif
                                        <div class="form-group mb-3">
                                            <label class="floating-label" for="Username">Nama</label>
                                            <input value="{{ old('name') }}" type="text" name="name" class="form-control" id="Username" placeholder="">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="floating-label" for="Username">Username</label>
                                            <input value="{{ old('username') }}" type="text" name="username" class="form-control" id="Username" placeholder="">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="floating-label" for="Email">Email address</label>
                                            <input value="{{ old('email') }}" type="text" name="email" class="form-control" id="Email" placeholder="">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label class="floating-label" for="Password">Password</label>
                                            <input type="text" name="password" class="form-control" id="Password" placeholder="">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label class="floating-label" for="Password">Konfirmasi Password</label>
                                            <input type="text" name="password_confirmation" class="form-control" id="Password" placeholder="">
                                        </div>
                                        <button type="submit" class="btn btn-block btn-primary mb-4">Signin</button>
                                        <p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html" class="f-w-400">Reset</a></p>
                                        <!-- <p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.html" class="f-w-400">Signup</a></p> -->
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
<!-- [ auth-signin ] end -->
@endsection
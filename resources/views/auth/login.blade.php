@extends('layouts.header')
<!-- ======= Login ======= -->
@guest
    <section id="login" class="login">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Login</h2>
                <p>Untuk melanjutkan transaksi</p>
            </div>

            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
                integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="{!! asset('register/css/my-login.css') !!}">
            <!-- </head> -->

            <body class="my-login-page">
                <section class="h-100">
                    <div class="container h-100">
                        <div class="row justify-content-md-center h-100">
                            <div class="card-wrapper">
                                <div class="brand">
                                    {{-- <img src="assets/img/logo1.png" class="img-fluid animated" alt=""> --}}
                                </div>
                                <div class="card fat">
                                    <div class="card-body">
                                        <h4 class="card-title">Login</h4>
                                        <form action="{{ Route('login') }}" class="my-login-validation" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="email">E-Mail Address</label>
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                <div class="invalid-feedback">
                                                    Email is invalid
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="password">Password
                                                </label>
                                                <input id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" autocomplete="current-password" required data-eye>
                                                <div class="invalid-feedback">
                                                    Password is required
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" name="remember" id="remember"
                                                        class="custom-control-input">
                                                    <label for="remember" class="custom-control-label">Remember
                                                        Me</label>
                                                </div>
                                            </div>

                                            <div class="form-group m-0">
                                                <button type="submit" class="btn btn-primary btn-block">
                                                    Login
                                                </button>

                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                            <div class="mt-4 text-center">
                                                Don't have an account? <a href="{{ route('register') }}">Create
                                                    One</a>
                                            </div>

                                            <div class="mt-4 text-center">
                                                Mari bergabung bersama kami dengan <a href="/registerpenjual"> daftar sebagai penjual</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="footer">
                                    Copyright &copy; 2023 &mdash; e-khasmayu
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
                </script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
                </script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
                </script>
                <script src="{!! asset('register/js/my-login.js') !!}"></script>
            </body>
        @endguest
        <!--</login> End login -->
        {{-- @endsection --}}

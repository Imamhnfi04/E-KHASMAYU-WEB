@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        {{-- <form method="POST" action="{{ route('register') }}"> --}}
                            {{-- @csrf --}}
                            <!-- ======= regis ======= -->
                            <section id="register" class="register">
                                <link rel="stylesheet"
                                    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
                                    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
                                    crossorigin="anonymous">
                                <link rel="stylesheet" type="text/css" href="{!! asset('register/css/my-login.css') !!}">

                                <body class="my-login-page">
                                    <section class="h-100">
                                        <div class="container h-100">
                                            <div class="row justify-content-md-center h-100">
                                                <div class="card-wrapper">
                                                    <div class="brand">
                                                        <img src="{!! asset('/image/logofiks.PNG') !!}" alt="">
                                                    </div>
                                                    <div class="card fat">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Register Penjual</h4>
                                                            <!-- <form method="POST" class="my-login-validation" action="/register"> -->
                                                            <form method="POST" class="my-login-validation"
                                                                action="/registerpenjuals">
                                                                @csrf

                                                                <div class="form-group">
                                                                    <label for="nama">Nama</label>
                                                                    <input id="nama" type="text"
                                                                        class="form-control @error('nama') is-invalid @enderror"
                                                                        name="nama" placeholder="What's your name?"
                                                                        value="{{ old('nama') }}" tabindex="2" required
                                                                        autofocus>
                                                                    @error('nama')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="nama_toko">Nama Toko</label>
                                                                    <input id="nama_toko" type="text"
                                                                        class="form-control @error('nama_toko') is-invalid @enderror"
                                                                        name="nama_toko" placeholder="What's your name?"
                                                                        value="{{ old('nama_toko') }}" tabindex="2"
                                                                        required autofocus>
                                                                    @error('nama')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>

                                                                {{-- <div
                                                                    class="form-group{{ $errors->has('kategori_1') ? ' has-error' : '' }}">
                                                                    <select class="form-select"
                                                                        aria-label="Default select example" id="kategori_1"
                                                                        name="kategori_1">
                                                                        <option selected>Pilih jenis produk yang Anda jual
                                                                        </option>
                                                                        <option value="1">Makanan&Minuman</option>
                                                                        <option value="2">Pakaian</option>
                                                                        <option value="3">Kerajinan</option>
                                                                    </select>
                                                                </div> --}}

                                                                <div class="form-group">
                                                                    <label for="alamat">alamat</label>
                                                                    <input id="alamat" type="text"
                                                                        class="form-control @error('alamat') is-invalid @enderror"
                                                                        name="alamat" placeholder="alamat"
                                                                        value="{{ old('alamat') }}" tabindex="2" required
                                                                        autofocus>
                                                                    @error('alamat')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="nomor_hp">nomor_hp</label>
                                                                    <input id="nomor_hp" type="text"
                                                                        class="form-control @error('nomor_hp') is-invalid @enderror"
                                                                        name="nomor_hp" placeholder="nomor_hp"
                                                                        value="{{ old('nomor_hp') }}" tabindex="2"
                                                                        required autofocus>
                                                                    @error('nomor_hp')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>

                                                                <div
                                                                    class="form-group{{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
                                                                    <label for="jenis_kelamin"
                                                                        class="col-md-4 control-label">Jenis
                                                                        Kelamin</label>
                                                                    <select class="form-control" name="jenis_kelamin">
                                                                        <option value="laki-laki">Laki - Laki</option>
                                                                        <option value="perempuan">Perempuan</option>
                                                                    </select>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="kode_pos">kode pos</label>
                                                                    <input id="kode_pos" type="text"
                                                                        class="form-control @error('kode_pos') is-invalid @enderror"
                                                                        name="kode_pos" placeholder="kode_pos"
                                                                        value="{{ old('kode_pos') }}" tabindex="2"
                                                                        required autofocus>
                                                                    @error('kode_pos')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group">
                                                                    <label
                                                                        for="email">{{ __('Email Address') }}</label>
                                                                    <input id="email" type="email"
                                                                        class="form-control @error('email') is-invalid @enderror"
                                                                        name="email" value="{{ old('email') }}"
                                                                        placeholder="Email" tabindex="2" required
                                                                        autofocus>

                                                                    @error('email')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror

                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="password">{{ __('Password') }}</label>

                                                                    <input id="password" type="password"
                                                                        class="form-control @error('password') is-invalid @enderror"
                                                                        name="password" required
                                                                        autocomplete="new-password">

                                                                    @error('password')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group">
                                                                    <label
                                                                        for="password-confirm">{{ __('Confirm Password') }}</label>

                                                                    <input id="password-confirm" type="password"
                                                                        class="form-control" name="password_confirmation"
                                                                        required autocomplete="new-password">
                                                                </div>

                                                                <div class="form-group m-0">
                                                                    <button type="submit"
                                                                        class="btn btn-primary btn-block">
                                                                        Register
                                                                    </button>
                                                                </div>
                                                                <div class="mt-4 text-center">
                                                                    Already have an account? <a href="/index">Login</a>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                                        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
                                    </script>
                                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                                        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
                                    </script>
                                    <script src="{!! asset('register/js/my-login.js') !!}"></script>
                                </body>
                                <!-- ======= end regis ======= -->
                            @endsection

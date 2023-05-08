 @extends('layouts.app')

 @section('content')
     {{-- }}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register sebagai penjual') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nama lengkap') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="tgl_lahir"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Tanggal lahir') }}</label>

                                <div class="col-md-6">
                                    <input id="tgl_lahir" type="text"
                                        class="form-control @error('tgl_lahir') is-invalid @enderror" tgl_lahir="tgl_lahir"
                                        value="{{ old('tgl_lahir') }}" required autocomplete="tgl_lahir" autofocus>

                                    @error('tgl_lahir')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="nohp"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nomor HP') }}</label>

                                <div class="col-md-6">
                                    <input id="nohp" type="text"
                                        class="form-control @error('nohp') is-invalid @enderror" nohp="nohp"
                                        value="{{ old('nohp') }}" required autocomplete="nohp" autofocus>

                                    @error('nohp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="namatoko"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nama Toko') }}</label>

                                <div class="col-md-6">
                                    <input id="namatoko" type="text"
                                        class="form-control @error('namatoko') is-invalid @enderror" name="namatoko"
                                        value="{{ old('namatoko') }}" required autocomplete="namatoko" autofocus>

                                    @error('namatoko')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="jeniskelamin"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Jenis kelamin') }}</label>
                                <div class="col-md-6">
                                    <input class="form-check-input" type="radio" name="laki-laki" id="laki-laki">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Laki-laki
                                    </label>
                                    <input class="form-check-input" type="radio" name="perempuan" id="perempuan"
                                        checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Perempuan
                                    </label>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="alamat"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Alamat') }}</label>

                                <div class="col-md-6">
                                    <input id="alamat" type="text"
                                        class="form-control @error('alamat') is-invalid @enderror" alamat="alamat"
                                        value="{{ old('alamat') }}" required autocomplete="alamat" autofocus>

                                    @error('alamat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="kodepos"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Kode Pos') }}</label>

                                <div class="col-md-6">
                                    <input id="kodepos" type="text"
                                        class="form-control @error('kodepos') is-invalid @enderror" kodepos="kodepos"
                                        value="{{ old('kodepos') }}" required autocomplete="kodepos" autofocus>

                                    @error('kodepos')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


     {{-- <form method="POST" class="my-login-validation" action="{{ route('register') }}">
         @csrf --}}

     {{-- <div class="row mb-3">
                                                    <label for="name" class="col-md-4 col-from-label text-md-end">{{ __('Name') }}</label>
                                                    <div class="col-md-6">
                                                        <input id="name" type="text" class="from-control @error('nmae') is-invalid @enderror" name="nmae" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                        @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div> --}}


     {{-- <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input id="name" type="text" class="form-control"
                                                        name="name" value="{{ old('name') }}" required
                                                        autocomplete="name" autofocus>
                                                    <div class="invalid-feedback">
                                                        What's your name?
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="email">E-Mail</label>
                                                    <input id="email" type="email" class="form-control"
                                                        name="email" value="{{ old('email') }}" required>
                                                    <div class="invalid-feedback">
                                                        Your email is invalid
                                                    </div>
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input id="password" type="password" class="form-control"
                                                        name="password" required data-eye>
                                                    <div class="invalid-feedback">
                                                        Password is required
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="jeniskelamin">Jenis Kelamin</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            value="{{ old('laki-laki') }}" name="laki-laki"
                                                            id="laki-laki">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Laki-laki
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="perempuan" value="{{ old('perempuan') }}"
                                                            id="perempuan" checked>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Perempuan
                                                        </label>
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        What's your name?
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="nohp">Nomor HP</label>
                                                    <input id="nohp" type="text" class="form-control"
                                                        name="nohp" value="{{ old('nohp') }}" required
                                                        autofocus>
                                                    <div class="invalid-feedback">
                                                        What's your name?
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Tandai sebagai</option>
                                                        <option value="Rumah">Rumah</option>
                                                        <option value="Kantor">Kantor</option>
                                                        <option value="Apartemen">Apartemen</option>
                                                        <option value="Kos">Kos</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="alamat">Alamat</label>
                                                    <input id="alamat" type="text" class="form-control"
                                                        name="alamat" value="{{ old('alamat') }}" required
                                                        autofocus>
                                                    <div class="invalid-feedback">
                                                        What's your name?
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="kodepos">Kode Pos</label>
                                                    <input id="kodepos" type="text" class="form-control"
                                                        name="kodepos" value="{{ old('kodepos') }}" required
                                                        autofocus>
                                                    <div class="invalid-feedback">
                                                        What's your name?
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" name="agree" id="agree"
                                                            class="custom-control-input" required="">
                                                        <label for="agree" class="custom-control-label">I agree to
                                                            the <a href="#">Terms and Conditions</a></label>
                                                        <div class="invalid-feedback">
                                                            You must agree with our Terms and Conditions
                                                        </div>
                                                    </div>
                                                </div> --}}

     {{-- <div class="row mb-3">
             <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

             <div class="col-md-6">
                 <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                     value="{{ old('name') }}" required autocomplete="name" autofocus>

                 @error('name')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                 @enderror
             </div>
         </div>

         <div class="form-group">
             <label for="nama_pembeli">nama_pembeli</label>
             <input id="nama_pembeli" type="text" class="form-control @error('nama_pembeli') is-invalid @enderror"
                 name="nama_pembeli" placeholder="Masukkan nama_pembeli" value="{{ old('nama_pembeli') }}" tabindex="2"
                 required autofocus>
             @error('nama_pembeli')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
         </div>

         <div class="form-group">
             <label for="kode_pos">kode_pos</label>
             <input id="kode_pos" type="text" class="form-control @error('kode_pos') is-invalid @enderror"
                 name="kode_pos" placeholder="Masukkan kode_pos" value="{{ old('kode_pos') }}" tabindex="2" required
                 autofocus>
             @error('kode_pos')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
         </div>

         <div class="form-group">
             <label for="alamat">alamat</label>
             <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                 placeholder="Masukkan alamat" value="{{ old('alamat') }}" tabindex="2" required autofocus>
             @error('alamat')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
         </div>

         <div class="form-group">
             <label for="nomor_hp">nomor_hp</label>
             <input id="nomor_hp" type="text" class="form-control @error('nomor_hp') is-invalid @enderror"
                 name="nomor_hp" placeholder="Masukkan nomor_hp" value="{{ old('nomor_hp') }}" tabindex="2" required
                 autofocus>
             @error('nomor_hp')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
         </div>

         <div class="form-group{{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
             <label for="dender" class="col-md-4 control-label">Jenis Kelamin</label>
             <select class="form-control" name="jenis_kelamin">
                 <option value="laki-laki">Laki - Laki</option>
                 <option value="perempuan">Perempuan</option>
             </select>
         </div>

         <div class="form-group{{ $errors->has('tandai_lokasi') ? ' has-error' : '' }}">
             <label for="dender" class="col-md-4 control-label">Jenis Kelamin</label>
             <select class="form-control" name="tandai_lokasi">
                 <option value="laki-laki">Laki - Laki</option>
                 <option value="perempuan">Perempuan</option>
             </select>
         </div>


         <div class="row mb-3">
             <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

             <div class="col-md-6">
                 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                     name="email" value="{{ old('email') }}" required autocomplete="email">

                 @error('email')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                 @enderror
             </div>
         </div>

         <div class="row mb-3">
             <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

             <div class="col-md-6">
                 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                     name="password" required autocomplete="new-password">

                 @error('password')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                 @enderror
             </div>
         </div>

         <div class="row mb-3">
             <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

             <div class="col-md-6">
                 <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                     autocomplete="new-password">
             </div>
         </div> --}}

     {{-- <div class="form-group m-0">
         <button type="submit" class="btn btn-primary btn-block">
             Register
         </button>
     </div>
     <div class="mt-4 text-center">
         Already have an account? <a href="#login">Login</a>
     </div>
     <div class="mt-4 text-center">
         Ingin bekerjasama dengan kami? <a href="{{ route('register') }}">
             Register sebagai penjual</a>
     </div>
     </form> --}}



     <!-- ======= regis ======= -->
     <section id="register" class="register">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
             integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
                                     <h4 class="card-title">Register</h4>
                                     <!-- <form method="POST" class="my-login-validation" action="/register"> -->
                                     <form method="POST" class="my-login-validation" action="{{ route('register') }}">
                                         @csrf

                                         <div class="form-group">
                                             <label for="name">Nama</label>
                                             <input id="name" type="text" class="form-control" name="name"
                                                 value="{{ old('name') }}" required autocomplete="name" autofocus>
                                             <div class="invalid-feedback">
                                                 What's your name?
                                             </div>
                                         </div>

                                         <div class="form-group">
                                             <label for="nama_pembeli">Nama pembeli</label>
                                             <input id="nama_pembeli" type="text" class="form-control"
                                                 name="nama_pembeli" value="{{ old('nama_pembeli') }}" required
                                                 autocomplete="nama_pembeli" autofocus>
                                             <div class="invalid-feedback">
                                                 What's your name?
                                             </div>
                                         </div>


                                         <div class="form-group">
                                             <label for="alamat">Alamat</label>
                                             <input id="alamat" type="alamat" class="form-control" name="alamat"
                                                 value="{{ old('alamat') }}" required>
                                             <div class="invalid-feedback">
                                                 Your alamat is invalid
                                             </div>
                                             @error('alamat')
                                                 <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                 </span>
                                             @enderror
                                         </div>

                                         <div class="form-group">
                                             <label for="nomor_hp">Nomor HP</label>
                                             <input id="nomor_hp" type="nomor_hp" class="form-control" name="nomor_hp"
                                                 required data-eye>
                                             <div class="invalid-feedback">
                                                 nomor_hp is required
                                             </div>
                                             @error('nomor_hp')
                                                 <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                 </span>
                                             @enderror
                                         </div>

                                         <div class="form-group">
                                             <label for="jeniskelamin">Jenis Kelamin</label>
                                             <div class="form-check">
                                                 <input class="form-check-input" type="radio"
                                                     value="{{ old('laki-laki') }}" name="laki-laki" id="laki-laki">
                                                 <label class="form-check-label" for="flexRadioDefault1">
                                                     Laki-laki
                                                 </label>
                                             </div>
                                             <div class="form-check">
                                                 <input class="form-check-input" type="radio" name="perempuan"
                                                     value="{{ old('perempuan') }}" id="perempuan" checked>
                                                 <label class="form-check-label" for="flexRadioDefault2">
                                                     Perempuan
                                                 </label>
                                             </div>
                                             <div class="invalid-feedback">
                                                 What's your name?
                                             </div>
                                         </div>

                                         <div class="form-group">
                                             <select class="form-select" aria-label="Default select example">
                                                 <option selected>Tandai sebagai</option>
                                                 <option value="Rumah">Rumah</option>
                                                 <option value="Kantor">Kantor</option>
                                                 <option value="Apartemen">Apartemen</option>
                                                 <option value="Kos">Kos</option>
                                             </select>
                                         </div>

                                         <div class="form-group">
                                             <label for="kodepos">Kode Pos</label>
                                             <input id="kodepos" type="text" class="form-control" name="kodepos"
                                                 value="{{ old('kodepos') }}" required autofocus>
                                             <div class="invalid-feedback">
                                                 What's your name?
                                             </div>
                                         </div>

                                         <div class="form-group">
                                             <label for="email">Email Address</label>
                                             <input id="email" type="text" class="form-control" name="email"
                                                 value="{{ old('email') }}" required autofocus>
                                             <div class="invalid-feedback">
                                                 What's your name?
                                             </div>
                                         </div>

                                         <div class="form-group">
                                             <label for="password">Password</label>
                                             <input id="password" type="text" class="form-control" name="password"
                                                 value="{{ old('password') }}" required autofocus>
                                             <div class="invalid-feedback">
                                                 What's your name?
                                             </div>
                                         </div>

                                         <div class="form-group">
                                             <label for="password-confirm">Confirm Password</label>
                                             <input id="password-confirm" type="text" class="form-control"
                                                 name="password-confirm" value="{{ old('password-confirm') }}" required
                                                 autofocus>
                                             <div class="invalid-feedback">
                                                 What's your name?
                                             </div>
                                         </div>



                                         {{-- <div class="form-group">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" name="agree" id="agree"
                                                class="custom-control-input" required="">
                                            <label for="agree" class="custom-control-label">I agree to
                                                the <a href="#">Terms and Conditions</a></label>
                                            <div class="invalid-feedback">
                                                You must agree with our Terms and Conditions
                                            </div>
                                        </div>
                                    </div> --}}


                                         {{-- <div class="row mb-3">
                                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div> --}}

                                         {{-- <div class="form-group">
                                        <label for="nama_pembeli">nama_pembeli</label>
                                        <input id="nama_pembeli" type="text" class="form-control @error('nama_pembeli') is-invalid @enderror" name="nama_pembeli" placeholder="Masukkan nama_pembeli" value="{{ old('nama_pembeli') }}" tabindex="2" required autofocus>
                                        @error('nama_pembeli')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div> --}}

                                         {{-- <div class="form-group">
                                        <label for="kode_pos">kode_pos</label>
                                        <input id="kode_pos" type="text" class="form-control @error('kode_pos') is-invalid @enderror" name="kode_pos" placeholder="Masukkan kode_pos" value="{{ old('kode_pos') }}" tabindex="2" required autofocus>
                                        @error('kode_pos')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div> --}}

                                         {{-- <div class="form-group">
                                        <label for="alamat">alamat</label>
                                        <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" placeholder="Masukkan alamat" value="{{ old('alamat') }}" tabindex="2" required autofocus>
                                        @error('alamat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div> --}}

                                         {{-- <div class="form-group">
                                        <label for="nomor_hp">nomor_hp</label>
                                        <input id="nomor_hp" type="text" class="form-control @error('nomor_hp') is-invalid @enderror" name="nomor_hp" placeholder="Masukkan nomor_hp" value="{{ old('nomor_hp') }}" tabindex="2" required autofocus>
                                        @error('nomor_hp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div> --}}

                                         {{-- <div class="form-group{{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
                                        <label for="dender" class="col-md-4 control-label">Jenis Kelamin</label>
                                        <select class="form-control" name="jenis_kelamin">
                                            <option value="laki-laki">Laki - Laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select>
                                    </div>

                                    <div class="form-group{{ $errors->has('tandai_lokasi') ? ' has-error' : '' }}">
                                        <label for="dender" class="col-md-4 control-label">Jenis Kelamin</label>
                                        <select class="form-control" name="tandai_lokasi">
                                            <option value="laki-laki">Laki - Laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select>
                                    </div> --}}


                                         {{-- <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div> --}}

                                         {{-- <div class="row mb-3">
                                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div> --}}

                                         {{-- <div class="row mb-3">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div> --}}

                                         <div class="form-group m-0">
                                             <button type="submit" class="btn btn-primary btn-block">
                                                 Register
                                             </button>
                                         </div>
                                         <div class="mt-4 text-center">
                                             Already have an account? <a href="#login">Login</a>
                                         </div>
                                         <div class="mt-4 text-center">
                                             Ingin bekerjasama dengan kami? <a href="{{ route('register') }}">
                                                 Register sebagai penjual</a>
                                         </div>
                                     </form>
                                 </div>
                             </div>

                             {{-- <div class="footer">
                                 Copyright &copy; 2023 &mdash; Your Company
                             </div> --}}
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>E-KHASMAYU</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css" />

    <!-- Favicons -->
    <link href="assets/img/logo1.png" rel="icon">
    <link href="assets/img/logo1.png">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    @include('layouts.header')
    <form method="POST" action="{{ route('pembeli.profile.update') }}" autocomplete="off"
        enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="container rounded bg-white mt-5 mb-5">

            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img
                            class="rounded-circle mt-5" width="150px"
                            src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                            class="font-weight-bold">Edogaru</span><span
                            class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
                </div>

                <div class="col-md-5 border-right">
                    <div class="p-5 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>
                        <div class="row mt-12">
                            <div class="col-md-12">
                                <label class="form-control-label">Nama Lengkap</label>
                                <input type="text"class="form-control" placeholder="Nama lengkap"
                                    value="{{ $data->user->nama }}">
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="form-control-label">Email Address</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ $data->user->email }}" required autocomplete="email">
                            </div>

                            <div class="form-group{{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
                                <label for="jenis_kelamin" class="form-control-label mt-3">Jenis Kelamin</label>
                                <select class="form-control" name="jenis_kelamin">
                                    <option value="laki-laki"
                                        {{ $data->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}>Laki - Laki
                                    </option>
                                    <option value="perempuan"
                                        {{ $data->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>Perempuan
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="form-control-label">Nomor HP</label><input type="text"
                                    class="form-control" placeholder="no_hp" value="{{ $data->nomor_hp }}">
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="form-control-label">Kode Pos</label>
                                <input type="text" class="form-control" placeholder="Kode Pos"
                                    value="{{ $data->kode_pos }}">
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="form-control-label" for="current_password">Current password</label>
                                <input type="password" id="current_password" class="form-control"
                                    name="current_password" placeholder="Current password">
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="form-control-label" for="new_password">New password</label>
                                <input type="password" id="new_password" class="form-control" name="new_password"
                                    placeholder="new_password">
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="form-control-label" for="confirm_password">Confirm password</label>
                                <input type="password" id="confirm_password" class="form-control"
                                    name="confirm_password" placeholder="confirm_password">
                            </div>
                            <div class="mt-5 text-center">
                                <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center experience"><span>Edit
                                Alamat</span><span class="border px-3 p-1 add-experience">
                            </span></div><br>

                        <div class="form-group{{ $errors->has('tandai_lokasi') ? 'has-error' : '' }}">
                            <label for="tandai_lokasi" class="form-control-label">Tandai Lokasi</label>
                            <select class="form-control" name="tandai_lokasi" id="tandai_lokasi">
                                <option value="Rumah" {{ $data->tandai_lokasi == 'Rumah' ? 'selected' : '' }}>
                                    Rumah</option>
                                <option value="Kantor" {{ $data->tandai_lokasi == 'Kantor' ? 'selected' : '' }}>
                                    Kantor</option>
                                <option value="Kos" {{ $data->tandai_lokasi == 'Kos' ? 'selected' : '' }}>Kos
                                </option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label class="form-control-label">Alamat</label>
                            <input type="text" class="form-control" placeholder="alamat"
                                value="{{ $data->alamat }}">
                        </div>
                    </div>
                </div>

            </div>
    </form>
{{-- </body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />

</html> --}}
@include('layouts.footer')

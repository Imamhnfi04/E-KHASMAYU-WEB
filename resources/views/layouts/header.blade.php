<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>E-KHASMAYU</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

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
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <img src="assets/img/logo1.png" class="img-fluid animated" alt="">
                <span class="logo-text">E-khasmayu</span>
            </div>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link" href="{{ route('/') }}">Home</a></li>
                <li class="nav-item "><a
                        class="nav-link {{ Route::current()->getName()=='pembeli.produk' ? 'active' : '' }}" href="/produks">Produk</a></li>
                <li class="nav-item "><a
                        class="nav-link {{ Route::current()->getName()=='pembeli.toko' ? 'active' : '' }}" href="{{ route('pembeli.toko') }}">Toko</a></li>
                <li class="nav-item "><a
                        class="nav-link {{ Route::current()->getName()=='pembeli.contact' ? 'active' : '' }}" href="{{ route('pembeli.contact') }}">Contact</a></li>
                @guest
                    <li><a class="get-a-quote" href="{{ route('login') }}">Login</a></li>
                @elseif(auth()->user()->role == 'penjual')
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->nama }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item link-primary" href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <a class="dropdown-item link-primary" href="{{ route('penjual.dashboard') }}">
                                Dashboard
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    @else
                    <li><a class="nav-link {{ Route::current()->getName()=='pembeli.keranjang' ? 'active' : '' }}" href="{{ route('pembeli.keranjang') }}">Keranjang</a></li>
                    <li><a class="nav-link {{ Route::current()->getName()=='pembeli.checkout' ? 'active' : '' }}" href="{{ route('pembeli.checkout') }}">Checkout</a></li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->nama }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item link-primary" href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <a class="dropdown-item link-primary" href="{{ route('pembeli.profile') }}">
                                Profile
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

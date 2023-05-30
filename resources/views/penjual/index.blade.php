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





    <!-- =======================================================
  * Template Name: Bootslander - v4.10.0
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <img src="assets/img/logo1.png" class="img-fluid animated" alt="">
                <span class="logo-text">E-khasmayu</span>
            </div>



            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#produk">Produk</a></li>
                <li><a class="nav-link scrollto" href="#kategori">Kategori</a></li>
                <!-- <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>  -->
                <li><a class="nav-link scrollto" href="#toko">Toko</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->nama }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item link-primary" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>

                <!-- <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="loginDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Login
  </a>
  <ul class="dropdown-menu" aria-labelledby="loginDropdown">
    <li><a class="dropdown-item" href="#">Registrasi</a></li>

  </ul>
</li> -->

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                    <div data-aos="zoom-out">
                        <h1>Pilih oleh oleh yuuukz.. Hanya di <span>E-Khasmayu</span></h1>
                        <h2>E-commerce Oleh-Oleh Khas Indramayu</h2>
                        <div class="text-center text-lg-start">
                            <a href="#produk" class="btn-get-started scrollto">Belanja</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                    <img src="assets/img/hero-img1.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= Gallery Section ======= -->
        <section id="produk" class="produk">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Produk</h2>
                    <p>Check Produk</p>
                </div>
                <div class="row gy-4 justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="card h-100 border-0">
                            <div class="card-img-top">
                                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                                <div class="gallery-links d-flex align-items-center justify-content-center">
                                    <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                                        {{-- <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                                        {{-- <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                                      <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid"> --}}
                                </div>
                            </div>
                            <div class="card-body text-left">
                                <h4 class="card-title">
                                    <a href="product.html" class=" font-weight-bold text-dark text-uppercase small">
                                        Mangga</a>
                                    <h5 class="small text-left" style="color: grey">
                                        <i>Mangga-hj sukini</i>
                                    </h5>
                                </h4>
                                <div class="text-right" style="color: red">
                                    <i>Rp.10.000</i>
                                    <a href="" style="float: left;">
                                        <span class="fas fa-shopping-cart text-primary"></span>
                                    </a>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="card h-100 border-0">
                            <div class="card-img-top">
                                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                                <div class="gallery-links d-flex align-items-center justify-content-center">
                                    <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                                </div>
                            </div>
                            <div class="card-body text-left">
                                <h4 class="card-title">
                                    <a href="product.html" class=" font-weight-bold text-dark text-uppercase small">
                                        Keripik Tempe</a>
                                    <h5 class="small text-left" style="color: grey">
                                        <i>keripik tempe homemade</i>
                                    </h5>
                                </h4>
                                <div class="text-right" style="color: red">
                                    <i>Rp.10.000</i>
                                    <a href="" style="float: left;">
                                        <span class="fas fa-shopping-cart text-primary"></span>
                                    </a>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="card h-100 border-0">
                            <div class="card-img-top">
                                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                                <div class="gallery-links d-flex align-items-center justify-content-center">
                                    <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                                        {{-- <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                                        {{-- <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                                      <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid"> --}}
                                </div>
                            </div>
                            <div class="card-body text-left">
                                <h4 class="card-title">
                                    <a href="product.html" class=" font-weight-bold text-dark text-uppercase small">
                                        Celana Batik</a>
                                    <h5 class="small text-left" style="color: grey">
                                        <i>Batik paoman</i>
                                    </h5>
                                </h4>
                                <div class="text-right" style="color: red">
                                    <i>Rp.10.000</i>
                                    <a href="" style="float: left;">
                                        <span class="fas fa-shopping-cart text-primary"></span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="card h-100 border-0">
                            <div class="card-img-top">
                                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                                <div class="gallery-links d-flex align-items-center justify-content-center">
                                    <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                                        {{-- <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                                        {{-- <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                                      <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid"> --}}
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <h4 class="card-title">
                                    <a href="product.html" class=" font-weight-bold text-dark text-uppercase small">
                                        Baju Batik</a>
                                </h4>
                                <h5 class="card-price small text-warning">
                                    <i>
                                        <s>Rp.20.000</s> Rp.10.000</i>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="card h-100 border-0">
                            <div class="card-img-top">
                                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                                <div class="gallery-links d-flex align-items-center justify-content-center">
                                    <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                                        {{-- <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                                        {{-- <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                                      <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid"> --}}
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <h4 class="card-title">
                                    <a href="product.html" class=" font-weight-bold text-dark text-uppercase small">
                                        Manisan</a>
                                </h4>
                                <h5 class="card-price small text-warning">
                                    <i>
                                        <s>Rp.20.000</s> Rp.10.000</i>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="card h-100 border-0">
                            <div class="card-img-top">
                                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                                <div class="gallery-links d-flex align-items-center justify-content-center">
                                    <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                                        {{-- <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                                        {{-- <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                                      <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid"> --}}
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <h4 class="card-title">
                                    <a href="product.html" class=" font-weight-bold text-dark text-uppercase small">
                                        Rempeyek</a>
                                </h4>
                                <h5 class="card-price small text-warning">
                                    <i>
                                        <s>Rp.20.000</s> Rp.10.000</i>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="card h-100 border-0">
                            <div class="card-img-top">
                                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                                <div class="gallery-links d-flex align-items-center justify-content-center">
                                    <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                                        {{-- <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                                        {{-- <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                                      <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid"> --}}
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <h4 class="card-title">
                                    <a href="product.html" class=" font-weight-bold text-dark text-uppercase small">
                                        Kerajinan</a>
                                </h4>
                                <h5 class="card-price small text-warning">
                                    <i>
                                        <s>Rp.20.000</s> Rp.10.000</i>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="card h-100 border-0">
                            <div class="card-img-top">
                                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                                <div class="gallery-links d-flex align-items-center justify-content-center">
                                    <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                                        {{-- <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                                        {{-- <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                                      <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid"> --}}
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <h4 class="card-title">
                                    <a href="product.html" class=" font-weight-bold text-dark text-uppercase small">
                                        Kerajinan</a>
                                </h4>
                                <h5 class="card-price small text-warning">
                                    <i>
                                        <s>Rp.20.000</s> Rp.10.000</i>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </section><!-- End Gallery Section -->

        {{-- </div>
        <div class="row g-0" data-aos="fade-left">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
              <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                 <h1><a href="">Kerupuk kulit Rp.10.000</a></h1> --}}
        {{-- </div>
                     <div class="row">
                      <div class="col-3 col-md-3 col-lg-2 mb-3">
                        <div class="card h-100 border-0">
                          <div class="card-img-top">
                            <img src="assets/img/gallery/gallery-3.jpg" class="img-fluid mx-auto d-block" alt="Card image cap">
                          </div>
                          <div class="card-body text-center">
                            <h4 class="card-title">
                              <a href="product.html" class=" font-weight-bold text-dark text-uppercase small"> baju batik</a>
                            </h4>
                            <h5 class="card-price small text-warning">
                              <i>
                              <s>Rp.20.000</s> Rp.10.000</i>
                            </h5>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-3 col-md-3 col-lg-2 mb-3">
                        <div class="card h-100 border-0">
                          <div class="card-img-top">
                            <img src="assets/img/gallery/gallery-8.jpg" class="img-fluid mx-auto d-block" alt="Card image cap">
                          </div>
                          <div class="card-body text-center">
                            <h4 class="card-title">
                              <a href="product.html" class=" font-weight-bold text-dark text-uppercase small"> Celana Batik</a>
                            </h4>
                            <h5 class="card-price small text-warning">
                              <i>
                              <s>Rp.20.000</s> Rp.10.000</i>
                            </h5>
                          </div>
                        </div>
                      </div>

                       </div>
                     <div class="row">
                      <div class="col-3 col-md-3 col-lg-2 mb-3">
                        <div class="card h-100 border-0">
                          <div class="card-img-top">
                            <img src="assets/img/gallery/gallery-4.jpg" class="img-fluid mx-auto d-block" alt="Card image cap">
                          </div>
                          <div class="card-body text-center">
                            <h4 class="card-title">
                              <a href="product.html" class=" font-weight-bold text-dark text-uppercase small"> Rempeyek</a>
                            </h4>
                            <h5 class="card-price small text-warning">
                              <i>
                              <s>Rp.20.000</s> Rp.10.000</i>
                            </h5>
                          </div>
                        </div>
                      </div>

                       </div>
                     <div class="row">
                      <div class="col-3 col-md-3 col-lg-2 mb-3">
                        <div class="card h-100 border-0">
                          <div class="card-img-top">
                            <img src="assets/img/gallery/gallery-5.jpg" class="img-fluid mx-auto d-block" alt="Card image cap">
                          </div>
                          <div class="card-body text-center">
                            <h4 class="card-title">
                              <a href="product.html" class=" font-weight-bold text-dark text-uppercase small"> Manisan</a>
                            </h4>
                            <h5 class="card-price small text-warning">
                              <i>
                              <s>Rp.20.000</s> Rp.10.000</i>
                            </h5>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-3 col-md-3 col-lg-2 mb-3">
                        <div class="card h-100 border-0">
                          <div class="card-img-top">
                            <img src="assets/img/gallery/gallery-6.jpg" class="img-fluid mx-auto d-block" alt="Card image cap">
                          </div>
                          <div class="card-body text-center">
                            <h4 class="card-title">
                              <a href="product.html" class=" font-weight-bold text-dark text-uppercase small">Mangga</a>
                            </h4>
                            <h5 class="card-price small text-warning">
                              <i>
                              <s>Rp.20.000</s> Rp.10.000</i>
                            </h5>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-3 col-md-3 col-lg-2 mb-3">
                        <div class="card h-100 border-0">
                          <div class="card-img-top">
                            <img src="assets/img/gallery/gallery-7.jpg" class="img-fluid mx-auto d-block" alt="Card image cap">
                          </div>
                          <div class="card-body text-center">
                            <h4 class="card-title">
                              <a href="product.html" class=" font-weight-bold text-dark text-uppercase small"> Kerajinan</a>
                            </h4>
                            <h5 class="card-price small text-warning">
                              <i>
                                <s>Rp.20.000</s> Rp.10.000</i>
                            </h5>
                          </div>
                        </div>
                      </div>
                     --}}

        {{-- </a>
            </div>
          </div> --}}

        {{-- <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
              <a href="assets/img/gallery/gallery-2.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
              <a href="assets/img/gallery/gallery-3.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
              <a href="assets/img/gallery/gallery-4.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
              <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350">
              <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
              <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
              <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div> --}}
        </section><!-- End Gallery Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                    alt="">
                                <h3>User00285827Bchteria</h3>
                                <h4>customer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Overall bagus tapi lingkaran tangan yang dipergelangannya besar banget,,
                                    pengirimannya cepat banget walaupun dari indramayu.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Pak somat</h3>
                                <h4>customer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Selau puas dangan kualitas produk E-Khasmayu,, Pembelian kesekian kalinya,,
                                    recomended bangettt.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                    alt="">
                                <h3>wife yoongi</h3>
                                <h4>customer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    pengirimannya cepat,, kemasan bagus aman,,Harga terbaik,, pelayanan memusakan.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Siti Aisyah</h3>
                                <h4>customer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Alhamdulillah pelayanannya baik sekali pengirimannya cepat... kurirnya komunikatif
                                    banget bertanggung jawab ,, seneng banget bisa beli oleh oleh khas indramayu
                                    harganya murah Terima kasih top seller dan kurir Terimaksih juga E-Kasmayu.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                    alt="">
                                <h3>user0976kuy</h3>
                                <h4>customer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Alhamdulillah barangnya sampai dengan selmat. Batiknya bagus,, ori, dan terima
                                    kasih.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->
        <!-- ======= About Section ======= -->
        {{-- <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            <a href="https://www.youtube.com/watch?v=StpBR2W8G5A" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>Dengan Driver Berpenglaman  </h3>
            <p></p>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">kemananan Barang</a></h4>
              <p class="description">driver akan mengantar oleh oleh mu ke rumah</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Hadiah</a></h4>
              <p class="description">Berikan oleh-Oleh khas indramayu ke keluarga dan sahabatmu </p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">proses</a></h4>
              <p class="description">Terdapat Info-info toko Oleh-Oleh Khas dari Indramayu</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section --> --}}

        <!-- ======= Features Section ======= -->
        <section id="kategori" class="features">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>kategori</h2>
                    <p>Pilih & Temukan</p>
                </div>

                <div class="row" data-aos="fade-left">
                    <div class="col-lg-3 col-md-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
                            <i class="ri-store-line" style="color: #ffbb2c;"></i>
                            <h3><a href="">Makanan</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                            <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
                            <h3><a href="">Minuman</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
                            <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                            <h3><a href="">Baju</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                            <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
                            <h3><a href="">Kerajinan</a></h3>
                        </div>
                    </div>
                    {{-- <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
              <h3><a href="">Kerajinan</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="250">
              <i class="ri-database-2-line" style="color: #47aeff;"></i>
              <h3><a href="baju">Baju Batik</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
              <h3><a href="">Keripik-kripikan</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="350">
              <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
              <h3><a href="">Mangga Indramayu</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
              <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
              <h3><a href="">Manisan</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="450">
              <i class="ri-anchor-line" style="color: #b2904f;"></i>
              <h3><a href="">Celana</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="500">
              <i class="ri-disc-line" style="color: #b20969;"></i>
              <h3><a href="">Paket Oleh-oleh</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="550">
              <i class="ri-base-station-line" style="color: #ff5828;"></i>
              <h3><a href="">Mainan Tradisional</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="600">
              <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
              <h3><a href="">Makanan Kering</a></h3>
            </div>
          </div>
        </div> --}}

                </div>
        </section><!-- End Features Section -->



        <!-- ======= Details Section ======= -->
        <section id="baju" class="baju">
            <div class="container">

                <div class="row content">
                    <div class="col-md-4" data-aos="fade-right">
                        <img src="assets/img/details-1.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-8 pt-4" data-aos="fade-up">
                        <h3>Batik Dermayon atau Batik Paoman.</h3>
                        <p class>
                            Batik Dermayon atau Batik Paoman adalah batik yang berasal dari indramayu yang memeiliki
                            motif yang khas pesisir dan dipengaruhi oleh budaya motif Tiongkok.
                        </p>
                        <ul>
                            <li><i class="bi bi-check"></i> Dengan bahahan Berkualitas.</li>
                            <li><i class="bi bi-check"></i> Asli Indramayu.</li>
                            <li><i class="bi bi-check"></i> Pas di gunakan untuk kondangan.</li>
                            <li><i class="bi bi-check"></i> pilih sesuai kebutuhanmu.</li>
                        </ul>
                    </div>
                </div>

                <div class="row content">
                    <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                        <img src="assets/img/details-2.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                        <h3>Keripik Tike</h3>
                        <p class="fst-italic">
                        </p>
                        <p>
                            Keripik Tike sendiri berasal dari Desa Jumbleng Kecamatan Losarang Kabupaten Indramayu,
                            olahan makanan ringan ini tetap eksis walau proses pembutanya masih tradisional oleh
                            masyarakat setempat.
                        </p>
                        <p>
                            Kripik Tike memiliki waran tekstur putih dan ada bintik hitam-kehitaman dan mempunyai rasa
                            gurih dan asin.
                    </div>
                </div>

                <div class="row content">
                    <div class="col-md-4" data-aos="fade-right">
                        <img src="assets/img/details-3.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-8 pt-5" data-aos="fade-up">
                        <h3>Manisan mangga </h3>
                        <p>Buah mangga dapat diolah menjadi berbagai bentuk minuman dan makanan salah satunya yaitu
                            manisan mangga. Manisan buah adalah buah yang diawetkan dengan gula kadar tinggi untuk
                            memberikan atau menambahkan rasa manis dan mencegah tumbuhnya mikroorganisme.</p>
                        <ul>
                            <li><i class="bi bi-check"></i> Dengan rasa yang enak.</li>
                            <li><i class="bi bi-check"></i> mangga dapat mengurangi risiko menderita diabetes, kanker,
                                dan juga peradangan dalam tubuh.</li>
                            <li><i class="bi bi-check"></i> kaya antioksidan, terutama dalam bentuk polifenol dan
                                karoten.</li>
                        </ul>
                        <p>

                        </p>
                        <p>

                    </div>
                </div>

                <div class="row content">
                    <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                        <img src="assets/img/details-4.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                        <h3>Mangga (Mangifera indica L.) Cengkir </h3>
                        <p class="fst-italic">
                        </p>
                        <p>
                            Mangga cengkir dikenal juga sebagi mangga Indramayu karena berasal dari daerah tersebut.
                            Mangga cengkir disukai karena memiliki tekstur yang agak keras
                        </p>
                        <ul>
                            <li><i class="bi bi-check"></i> Mengurangi Kadar Kolesterol. Vitamin C yang tinggi dan kaya
                                serat terdapat di dalam buah mangga dapat membantu menurunkan kadar kolesterol pada
                                tubuh Anda.</li>
                            <li><i class="bi bi-check"></i> Menyehatkan Mata.</li>
                            <li><i class="bi bi-check"></i> Meningkatkan Kekebalan Tubuh.</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section><!-- End Details Section -->

        <!-- ======= Gallery Section ======= -->
        {{-- <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Gallery</h2>
          <p>Check Produk</p>
        </div>

        <div class="row g-0" data-aos="fade-left">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
              <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
              <a href="assets/img/gallery/gallery-2.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
              <a href="assets/img/gallery/gallery-3.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
              <a href="assets/img/gallery/gallery-4.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
              <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350">
              <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
              <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
              <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>User00285827Bchteria</h3>
                <h4>customer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Overall bagus tapi lingkaran tangan yang dipergelangannya besar banget,, pengirimannya cepat banget walaupun dari indramayu.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Pak somat</h3>
                <h4>customer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Selau puas dangan kualitas produk E-Khasmayu,, Pembelian kesekian kalinya,, recomended bangettt.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>wife yoongi</h3>
                <h4>customer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  pengirimannya cepat,, kemasan bagus aman,,Harga terbaik,, pelayanan memusakan.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Siti Aisyah</h3>
                <h4>customer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Alhamdulillah pelayanannya baik sekali pengirimannya cepat... kurirnya komunikatif banget bertanggung jawab ,, seneng banget bisa beli oleh oleh khas indramayu harganya murah Terima kasih top seller dan kurir Terimaksih juga E-Kasmayu.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>user0976kuy</h3>
                <h4>customer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Alhamdulillah barangnya sampai dengan selmat. Batiknya bagus,, ori, dan terima kasih.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section --> --}}

        <!-- ======= Team Section ======= -->
        <section id="toko" class="toko">
            <div class="container">


                <div class="row" data-aos="fade-left">
                    <!DOCTYPE html>
                    <html>

                    <head>
                        <title>Toko Page</title>
                        <script>
                            // Fungsi untuk mengarahkan ke halaman detail informasi toko
                            function redirectToTokoDetail() {
                                // Mengganti URL halaman ke halaman detail informasi toko
                                window.location.href = "toko1.html"; // Ganti "toko1.html" dengan URL halaman detail yang sesuai
                            }
                        </script>
                    </head>

                    <body>
                        <section id="toko" class="toko">
                            <div class="container">
                                <div class="section-title" data-aos="fade-up">
                                    <h2>Toko</h2>
                                    <p>Our Great Toko</p>
                                </div>
                                <div class="row" data-aos="fade-left">

                                    <!-- Tambahkan modifikasi serupa untuk elemen toko lainnya -->
                                </div>
                            </div>
                        </section>
                    </body>

                    </html>

                    <div class="col-lg-3 col-md-6" onclick="redirectToTokoDetail()">
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Toko 1</h4>
                                <span>Oleh-Oleh Manisan</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Toko 2</h4>
                                <span>Oleh-Oleh Baju</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="member" data-aos="zoom-in" data-aos-delay="300">
                            <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Toko 3</h4>
                                <span>Oleh-oleh Buah-Buahan</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="member" data-aos="zoom-in" data-aos-delay="400">
                            <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Toko 4</h4>
                                <span>Oleh-Oleh Kerajinan</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Kontak</h2>
                    <p>Hubungi Kami</p>
                </div>

                <div class="row">

                    <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Jl. Lohbener Lama No. 8, Indramayu 45252</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@proyek3.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55s</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->


    <!-- ======= regis ======= -->
    {{-- <section id="register" class="register">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
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
                                            <h4 class="card-title">Register</h4>
                                            <!-- <form method="POST" class="my-login-validation" action="/register"> -->
                                            <form method="POST" class="my-login-validation" action="#login">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input id="name" type="text" class="form-control"
                                                        name="name" required autofocus>
                                                    <div class="invalid-feedback">
                                                        What's your name?
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="email">E-Mail Address</label>
                                                    <input id="email" type="email" class="form-control"
                                                        name="email" required>
                                                    <div class="invalid-feedback">
                                                        Your email is invalid
                                                    </div>
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
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" name="agree" id="agree"
                                                            class="custom-control-input" required="">
                                                        <label for="agree" class="custom-control-label">I agree to
                                                            the <a href="#">Terms and Conditions</a></label>
                                                        <div class="invalid-feedback">
                                                            You must agree with our Terms and Conditions
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group m-0">
                                                    <button type="submit" class="btn btn-primary btn-block">
                                                        Register
                                                    </button>
                                                </div>
                                                <div class="mt-4 text-center">
                                                    Already have an account? <a href="#login">Login</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        Copyright &copy; 2017 &mdash; Your Company
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

</html> --}}
    <!-- ======= end regis ======= -->


    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>E-Khasmayu</h3>
                            <p class="pb-3"><em>hubungi.</em></p>
                            <p>
                                go mayu <br>
                                Indramayu<br><br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@proyek3.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                <strong><span>PROYEK3</span></strong>.&copy; 2023
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
                <a href="https://bootstrapmade.com/"></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>

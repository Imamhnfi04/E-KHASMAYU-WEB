@include('layouts.header')

<section id="produk" class="produk">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Produk</h2>
            <p>Check Produk</p>
        </div>
        <div class="row gy-4 justify-content-center">
            @forelse ($data as $produk)
                <div class="col-l-3 col-lg-3 col-md-4">
                    <div class="card h-100 border-0" onclick="location.href='{{ route('produks.show', $produk->id) }}'">
                        <div class="card-img-top">
                            <img src="/image/{{ $produk->image }}" alt="" class="col-lg-10">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox">
                            </div>
                        </div>
                        <div class="card-body text-left">
                            <h4 class="card-title">
                                <a href="" class=" font-weight-bold text-dark text-uppercase small">
                                    {{ $produk->name}}
                                </a>
                                <h5 class="small text-left" style="color: grey">
                                    <i>{{ $produk->toko->nama_toko}}</i>
                                </h5>
                            </h4>
                            <div class="text-right" style="color: red">
                                <i>{{$produk->harga}}</i>
                                <div class="">
                                    <a href="{{ route('pembeli.tambahkeranjang', $produk->id) }}"><i class="fas fa-shopping-cart "
                                            style="float: left"></i></a>
                                    <a href="#"><i class="fa fa-heart" style="float: right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="alert alert-danger">
                    Data Produk belum Tersedia.
                </div>
            @endforelse
            {{-- {{ $posts->links() }} --}}


            {{-- <div class="col-l-3 col-lg-3 col-md-4">
                <div class="card h-100 border-0" onclick="location.href='{{ route('detailproduk') }}';">
                    <div class="card-img-top">
                        <img src="assets/img/gallery/gallery-2.jpg" alt="" class="col-lg-10">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                        </div>
                    </div>
                    <div class="card-body text-left">
                        <h4 class="card-title">
                            <a href="{{ route('detailproduk') }}"
                                class=" font-weight-bold text-dark text-uppercase small">
                                Keripik Tempe</a>
                            <h5 class="small text-left" style="color: grey">
                                <i>keripik tempe homemade</i>
                            </h5>
                        </h4>
                        <div class="text-right" style="color: red">
                            <i>Rp.10.000</i>
                            <div class="">
                                <a href="{{ route('pembeli.keranjang') }}"><i class="fas fa-shopping-cart "
                                        style="float: left"></i></a>
                                <a href="#"><i class="fa fa-heart" style="float: right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="col-l-3 col-lg-3 col-md-4">
                <div class="card h-100 border-0" onclick="location.href='{{ route('detailproduk') }}';">
                    <div class="card-img-top">
                        <img src="assets/img/gallery/gallery-8.jpg" alt="" class="col-lg-10">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                        </div>
                    </div>
                    <div class="card-body text-left">
                        <h4 class="card-title">
                            <a href="{{ route('detailproduk') }}"
                                class=" font-weight-bold text-dark text-uppercase small">
                                Celana Batik</a>
                            <h5 class="small text-left" style="color: grey">
                                <i>Batik paoman</i>
                            </h5>
                        </h4>
                        <div class="text-right" style="color: red">
                            <i>Rp.10.000</i>
                            <div class="">
                                <a href="{{ route('pembeli.keranjang') }}"><i class="fas fa-shopping-cart "
                                        style="float: left"></i></a>
                                <a href="#"><i class="fa fa-heart" style="float: right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-l-3 col-lg-3 col-md-4">
                <div class="card h-100 border-0" onclick="location.href='{{ route('detailproduk') }}';">
                    <div class="card-img-top">
                        <img src="assets/img/gallery/gallery-3.jpg" alt="" class="col-lg-10">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                        </div>
                    </div>
                    <div class="card-body text-left">
                        <h4 class="card-title">
                            <a href="{{ route('detailproduk') }}"
                                class=" font-weight-bold text-dark text-uppercase small">
                                Baju Batik</a>
                            <h5 class="small text-left" style="color: grey">
                                <i>Batik paoman</i>
                            </h5>
                        </h4>
                        <div class="text-right" style="color: red">
                            <i>Rp.10.000</i>
                            <div class="">
                                <a href="{{ route('pembeli.keranjang') }}"><i class="fas fa-shopping-cart "
                                        style="float: left"></i></a>
                                <a href="#"><i class="fa fa-heart" style="float: right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-l-3 col-lg-3 col-md-4">
                <div class="card h-100 border-0" onclick="location.href='{{ route('detailproduk') }}';">
                    <div class="card-img-top">
                        <img src="assets/img/gallery/gallery-1.jpg" alt="" class="col-lg-10">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                        </div>
                    </div>
                    <div class="card-body text-left">
                        <h4 class="card-title">
                            <a href="{{ route('detailproduk') }}"
                                class=" font-weight-bold text-dark text-uppercase small">
                                Manisan</a>
                            <h5 class="small text-left" style="color: grey">
                                <i>Manisan mangga</i>
                            </h5>
                        </h4>
                        <div class="text-right" style="color: red">
                            <i>Rp.10.000</i>
                            <div class="">
                                <a href="{{ route('pembeli.keranjang') }}"><i class="fas fa-shopping-cart "
                                        style="float: left"></i></a>
                                <a href="#"><i class="fa fa-heart" style="float: right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-l-3 col-lg-3 col-md-4">
                <div class="card h-100 border-0" onclick="location.href='{{ route('detailproduk') }}';">
                    <div class="card-img-top">
                        <img src="assets/img/gallery/gallery-4.jpg" alt="" class="col-lg-10">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                        </div>
                    </div>
                    <div class="card-body text-left">
                        <h4 class="card-title">
                            <a href="{{ route('detailproduk') }}"
                                class=" font-weight-bold text-dark text-uppercase small">
                                Keripik Tike</a>
                            <h5 class="small text-left" style="color: grey">
                                <i>keripik tike khas losarang</i>
                            </h5>
                        </h4>
                        <div class="text-right" style="color: red">
                            <i>Rp.10.000</i>
                            <div class="">
                                <a href="{{ route('pembeli.keranjang') }}"><i class="fas fa-shopping-cart "
                                        style="float: left"></i></a>
                                <a href="#"><i class="fa fa-heart" style="float: right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-l-3 col-lg-3 col-md-4">
                <div class="card h-100 border-0" onclick="location.href='{{ route('detailproduk') }}';">
                    <div class="card-img-top">
                        <img src="assets/img/gallery/gallery-7.jpg" alt="" class="col-lg-10">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                        </div>
                    </div>
                    <div class="card-body text-left">
                        <h4 class="card-title">
                            <a href="{{ route('detailproduk') }}"
                                class=" font-weight-bold text-dark text-uppercase small">
                                Kerajinan</a>
                            <h5 class="small text-left" style="color: grey">
                                <i>kerajinan</i>
                            </h5>
                        </h4>
                        <div class="text-right" style="color: red">
                            <i>Rp.10.000</i>
                            <div class="">
                                <a href="{{ route('pembeli.keranjang') }}"><i class="fas fa-shopping-cart "
                                        style="float: left"></i></a>
                                <a href="#"><i class="fa fa-heart" style="float: right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-l-3 col-lg-3 col-md-4">
                <div class="card h-100 border-0" onclick="location.href='{{ route('detailproduk') }}';">
                    <div class="card-img-top">
                        <img src="assets/img/gallery/gallery-7.jpg" alt="" class="col-lg-10">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                        </div>
                    </div>
                    <div class="card-body text-left">
                        <h4 class="card-title">
                            <a href="{{ route('detailproduk') }}"
                                class=" font-weight-bold text-dark text-uppercase small">
                                Kerajinan</a>
                            <h5 class="small text-left" style="color: grey">
                                <i>kerajinan</i>
                            </h5>
                        </h4>
                        <div class="text-right" style="color: red">
                            <i>Rp.10.000</i>
                            <div class="">
                                <a href="{{ route('pembeli.keranjang') }}"><i class="fas fa-shopping-cart "
                                        style="float: left"></i></a>
                                <a href="#"><i class="fa fa-heart" style="float: right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

        </div>
    </div>
</section>
@include('layouts.footer')

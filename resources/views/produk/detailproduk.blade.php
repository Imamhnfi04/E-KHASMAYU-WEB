@include('layouts.header')

<section id="produk" class="produk">
    <!--================ detail produk =============== -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <section id="detailproduk" class="detailproduk">
                <div class="container">
                    <div class="section-title" data-aos="fade-up">
                        <h2>detail produk</h2>
                        <p>detail produk</p>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="product__details__pic">
                                <div class="product__details__pic__item">
                                    <img class="col-xl-12 col-lg-12 col-md-12" src="assets/img/gallery/gallery-4.jpg"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="product__details__text">
                                <h3>Keripik Tike</h3>
                                <div class="product__details__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="product__details__price">Rp25.000</div>
                                <p>Keripik Tike sendiri berasal dari Desa Jumbleng Kecamatan Losarang Kabupaten
                                    Indramayu, olahan makanan ringan ini tetap eksis walau proses pembutanya masih
                                    tradisional oleh masyarakat setempat.
                                    Kripik Tike memiliki waran tekstur putih dan ada bintik hitam-kehitaman dan
                                    mempunyai rasa gurih dan asin..</p>
                                <div class="product__details__quantity">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <span class="dec qtybtn">-</span>
                                            <input type="text" value="1">
                                            <span class="inc qtybtn">+</span>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('pembeli.keranjang')}}" class="primary-btn">ADD TO CARD</a>
                                <ul>
                                    <li><b>stok</b> <span> <samp>Tersedia</samp></span></li>
                                    <li><b>Nama Penjual</b> <span>Keripik Tike hj ani-losarang. </span></li>
                                    <li><b>Berat Bersih</b> <span>250gr</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </section>
    @include('layouts.footer')

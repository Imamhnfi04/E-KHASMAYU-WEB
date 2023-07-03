{{-- @include('layouts.header') --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
                        <form method="post" action="{{ route('pembeli.simpankeranjang') }}">
                            @csrf
                            <input type="hidden" name="id_produk" value="{{ $data->id }}">
                        <div class="col-lg-6 col-md-6">
                            <div class="product__details__pic">
                                <div class="product__details__pic__item">
                                    <img class="col-xl-12 col-lg-12 col-md-12" src="/image/{{ $data->image }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="product__details__text">
                                <h3>{{ $data->nama_produk }}</h3>
                                <div class="product__details__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="product__details__price">{{ $data->harga }}</div>
                                <p>{{ $data->detail }}</p>
                                {{-- <p>Keripik Tike sendiri berasal dari Desa Jumbleng Kecamatan Losarang Kabupaten
                                    Indramayu, olahan makanan ringan ini tetap eksis walau proses pembutanya masih
                                    tradisional oleh masyarakat setempat.
                                    Kripik Tike memiliki waran tekstur putih dan ada bintik hitam-kehitaman dan
                                    mempunyai rasa gurih dan asin..</p> --}}
                                <div class="product__details__quantity">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" name="jumlah" placeholder="Jumlah">
                                        </div>
                                    </div>
                                </div>
                                {{-- <a href="{{ route('pembeli.keranjang') }}" class="primary-btn">ADD TO CARD</a> --}}
                                <ul>
                                    <li><b>stok</b> <span> <samp>{{ $data->stok }}</samp></span></li>
                                    <li><b>Nama Toko</b> <span>{{ $data->toko->nama_toko }}</span></li>
                                    <li><b>Berat Bersih</b> <span>{{ $data->berat }}</span></li>
                                </ul>
                                <button type="submit" class="btn btn-primary">Masukkan Keranjang</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </section>
    </section>
</section>
{{-- @include('layouts.footer') --}}

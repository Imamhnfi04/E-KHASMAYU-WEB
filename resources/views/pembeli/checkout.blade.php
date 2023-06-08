@include('layouts.header')

<!--================ checkout =============== -->
<section id="checkout" class="checkout">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>checkout</h2>
            <p>checkout</p>
        </div>
        <div class="checkout__form">
            <h4>Detail Pesanan</h4>
            <form action="#">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Nama depan<span>*</span></p>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Nama belakang<span>*</span></p>
                                    <input type="text">
                                </div>
                            </div>
                        </div>

                        <div class="checkout__input">
                            <p>alamat<span>*</span></p>
                            <input type="text" placeholder="alamat lengkap"
                                class="checkout__input__add">
                            <p>Tandai Sebagai</p>
                            <input type="text" placeholder="Rumah, Kantor, gedung (optinal)">
                        </div>
                        <div class="checkout__input">
                            <p>kabupaten<span>*</span></p>
                            <input type="text">
                        </div>
                        <div class="checkout__input">
                            <p>provinsi<span>*</span></p>
                            <input type="text">
                        </div>
                        <div class="checkout__input">
                            <p>Kecamatan<span>*</span></p>
                            <input type="text">
                        </div>
                        <div class="checkout__input">
                            <p>kode pos<span>*</span></p>
                            <input type="text">
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Nomor hp<span>*</span></p>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                        <div class="checkout__input__checkbox">
                            <label for="acc">
                                Buat akun baru?
                                <input type="checkbox" id="acc">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkout__input__checkbox">
                        </div>
                        <div class="checkout__input">
                            <p>Catatan pesanan<span>*</span></p>
                            <input type="text"
                                placeholder="Notes about your order, e.g. special notes for delivery.">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="checkout__order">
                            <h4>Pesanan Anda</h4>
                            <div class="checkout__order__products">Produk <span>Total</span></div>
                            <ul>
                                <li>Rempeyek <span>$75.99</span></li>
                                <li>keripik Tempe <span>$151.99</span></li>
                                <li>Baju Batik <span>$53.99</span></li>
                            </ul>
                            <div class="checkout__order__subtotal">Subtotal <span>$750.99</span></div>
                            <div class="checkout__order__total">Total <span>$750.99</span></div>
                            <div class="checkout__input__checkbox">
                                <div class="checkout__input__checkbox">
                                    <div class="checkout__input__checkbox">

                                    </div>
                                    <button type="submit" class="site-btn">checkout</button>
                                </div>
                            </div>
                        </div>
            </form>
        </div>
    </div>
</section>

@include('layouts.footer')

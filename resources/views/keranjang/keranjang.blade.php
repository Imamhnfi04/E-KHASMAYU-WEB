@include('layouts.header')

    <!--==========keranjang=======--->
    <section id="keranjang" class="keranjang">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>keranjang</h2>
                <p>keranjang saya</p>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shoping__cart__table">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="shoping__product">Produk</th>
                                        <th>Harga</th>
                                        <th>Jumlah</th>
                                        <th>Total</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="shoping__cart__item">
                                            <div class="col-xl-3 col-lg-4 col-md-6">
                                                <div class="image-container">
                                                    <img src="assets/img/gallery/gallery-4.jpg"
                                                        alt="" class="img-fluid">
                                                    <h5>Rempeyek</h5>
                                        </td>
                                        <td class="shoping__cart__price">
                                            $55.00
                                        </td>
                                        <td class="shoping__cart__quantity">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <span class="dec qtybtn">-</span>
                                                    <input type="text" value="1">
                                                    <span class="inc qtybtn">+</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="shoping__cart__total">
                                            $110.00
                                        </td>
                                        <td class="shoping__cart__item__close">
                                            <span class="icon_close"></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shoping__cart__btns">
                            <a href="#" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                            <a href="#" class="primary-btn cart-btn cart-btn-right">
                                <span class="icon_loading"></span>
                                Upadate Cart</a>
                        </div>
                    </div>
                    <div class="col-lg-4">

                    </div>
                    <div class="col-lg-6">
                        <div class="shoping__checkout">
                            <h5>Cart Total</h5>
                            <ul>
                                <li>Subtotal <span>$454.98</span></li>
                                <li>Total <span>$454.98</span></li>
                            </ul>
                            <a href="#" class="primary-btn">PROCEED TO CHECKOUT</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    @include('layouts.footer')

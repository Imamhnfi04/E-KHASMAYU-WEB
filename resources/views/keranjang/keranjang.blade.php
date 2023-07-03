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
                                    @foreach ($daftar_keranjang as $data)
                                    <tr>
                                        <td class="shoping__cart__item">
                                            <div class="col-xl-3 col-lg-4 col-md-6">
                                                <div class="image-container">
                                                    <img src="/image/{{ $data->product->image }}"
                                                        alt="" class="img-fluid">
                                                    <h5>{{$data->product->name}}</h5>
                                        </td>
                                        <td class="shoping__cart__price">
                                            {{$data->product->harga}}
                                        </td>
                                        <td class="shoping__cart__quantity">
                                            {{$data->jumlah}}
                                        </td>
                                        <td class="shoping__cart__total">
                                            {{$data->product->harga * $data->jumlah}}
                                        </td>
                                        <td class="shoping__cart__item__close">
                                            <span class="icon_close"></span>
                                        </td>
                                        <td>
                                            <form action="{{ route('pembeli.hapuskeranjang', $data->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                    </div>
                    <div class="col-lg-4">
                    </div>
                    <div class="col-lg-6">
                        <div class="shoping__checkout">
                            <h5>Cart Total</h5>
                            <ul>
                                <li>Subtotal <span>{{$subtotal}}</span></li>
                                <li>Total <span>{{$total}}</span></li>
                            </ul>
                            <form action="{{route('pembeli.transaksi')}}" method="POST">
                                @csrf
                            <button type="submit" class="primary-btn">PROCEED TO CHECKOUT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    @include('layouts.footer')

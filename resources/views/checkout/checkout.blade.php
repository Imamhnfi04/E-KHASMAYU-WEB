<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="d-flex justify-content-center">
    <div class="card mx-auto" style="width: 18rem;">
        {{-- <form method="post" action="{{ route('pembeli.simpankeranjang') }}">
            @csrf --}}
            <input type="hidden" name="id_produk" value="{{ $keranjang->id }}">
            <img src="/image/{{ $keranjang->product->image }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $keranjang->product->name }}</h5>
                <h5 class="card-text">Rp.{{ $keranjang->product->harga }}</h5>
                <p><b>Deskripsi: </b>{{ $keranjang->product->detail }}</p>
                <ul>
                    <li><b>Nama Toko:</b> <span>{{ $keranjang->product->toko->nama_toko }}</span></li>
                    <li><b>Berat Bersih:</b> <span>{{ $keranjang->product->berat }}</span></li>
                    <li><b>Jumlah:</b> <span>{{ $keranjang->jumlah }}</span></li>
                    <li><b>Ongkir:</b> <span>15000</span></li>
                </ul>
                {{-- <button type="submit" class="btn btn-primary">Masukkan Keranjang</button> --}}
            </div>
        {{-- </form> --}}
    </div>
</div>

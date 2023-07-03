<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="d-flex justify-content-center">
    <div class="card mx-auto" style="width: 18rem;">
        <form method="post" action="{{ route('pembeli.simpankeranjang') }}">
            @csrf
            <input type="hidden" name="id_produk" value="{{ $product->id }}">
            <img src="/image/{{ $product->image }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <h5 class="card-text">Rp.{{ $product->harga }}</h5>
                <p><b>Deskripsi: </b>{{ $product->detail }}</p>
                <ul>
                    <li><b>Stok     :</b> <span> <samp>{{ $product->stok }}</samp></span></li>
                    <li><b>Nama Toko:</b> <span>{{ $product->toko->nama_toko }}</span></li>
                    <li><b>Berat Bersih:</b> <span>{{ $product->berat }}</span></li>
                </ul>
                <div class="form-group">
                    <strong>Jumlah:</strong>
                    <input type="text" class="form-control" name="jumlah" placeholder="Jumlah">
                </div>
                <button type="submit" class="btn btn-primary">Masukkan Keranjang</button>
            </div>
        </form>
    </div>
</div>

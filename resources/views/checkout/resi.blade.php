@include('layouts.header')

<!--==========keranjang=======--->
<section id="keranjang" class="keranjang">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Checkout</h2>
            <p>Checkout</p>
        </div>
        <div class="row">
            <div class="col-lg-12 margin-tb mt-12">
                <div class="pull-left">
                    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css"
                        rel="stylesheet">
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="container mt-6"></div>
        <div class="container mt-6">
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Nama Toko</th>
                    <th>Alamat</th>
                    <th>Ongkir</th>
                    <th>Status Pesanan</th>
                    <th width="180px">Action</th>
                </tr>
                @foreach ($transaksi as $data)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $data->toko->nama_toko }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->ongkir }}</td>
                        <td>{{ $data->status_pemesanan }}</td>
                        <td>
                                <a class="btn btn-info" href="{{ route('detail.transaksi', $data->id) }}">Show</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
{{-- {!! $product->links() !!} --}}

@include('layouts.footer')

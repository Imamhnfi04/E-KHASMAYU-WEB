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
                    <th>Nama Produk</th>
                    <th>Detail</th>
                    <th>Berat</th>
                    <th>Harga</th>
                    <th>Jumlah Produk</th>
                </tr>
                @foreach ($detail_transaksi as $data)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $data->product->name}}</td>
                        <td>{{$data->product->detail}}</td>
                        <td>{{$data->product->berat}}</td>
                        <td>{{$data->product->harga}}</td>
                        <td>{{$data->jumlah_product}}</td>
                    </tr>
                    @endforeach
            </table>
        </div>
    </div>
{{-- {!! $product->links() !!} --}}

@include('layouts.footer')

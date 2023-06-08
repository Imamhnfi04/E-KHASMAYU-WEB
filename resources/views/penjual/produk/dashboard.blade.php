<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha384-B0j+o8rI8ExX3NIaBf+GvUhCfKYz0S6lFQs9U7y2HsnJ9Zvfu93p8xh2Jpy2pJ+i" crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <style>
        body {
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>

<body>
    <div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Jumlah Produk</th>
                <th>{{ DB::select('SELECT jumlah_produk()')[0]->{'jumlah_produk()'} }}</th>
                <th>
                    <button type="button" class="btn btn-success" onclick="toggleForm()">
                        <i class="fas fa-plus"></i> Tambah Produk
                    </button>
                </th>
            </tr>
        </thead>
    </table>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th style="width: 5%">No</th>
                        <th>Nama Produk</th>
                        <th>Deskripsi Produk</th>
                        <th>Kategori Produk</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th>STOK</th>
                        <th>Status Produk</th>
                        <th style="width: 10%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($produks as $produk)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $produk->nama_produk }}</td>
                        <td>{{$produk->deskripsi_produk}}</td>
                        <td>{{ $produk->kategori->nama_kategori}}</td>
                        <td>{{$produk->harga_produk}}</td>
                        <td>{{ $produk->gambar_produk }}</td>
                        <td>{{ $produk->stok }}</td>
                        <td>{{ $produk->status }}</td>
                        {{-- <td>
                            <div class="d-flex">
                                <div class="mr-2">
                                    <a href="{{ route('admin.member.index', array('id' => Crypt::encrypt($instance->id))) }}" class="btn btn-sm btn-primary">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </div>
                                <div class="mr-2">
                                    <a href="{{ route('admin.instance.edit', Crypt::encrypt($instance->id)) }}" class="btn btn-sm btn-primary">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                </div>
                                <div class="mr-2">
                                    <form action="{{ route('admin.instance.destroy', Crypt::encrypt($instance->id)) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td> --}}
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5">Data Tidak Ditemukan</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>


        <div id="formTambahProduk" style="display: none;">
            <form action="/tambah-produk" method="POST">
                @csrf
                <div class="form-group">
                    <label for="id_penjual">ID Penjual</label>
                    <input type="text" class="form-control" id="id_penjual" name="id_penjual">
                </div>
                <div class="form-group">
                    <label for="id_kategori">ID kategori</label>
                    <input type="text" class="form-control" id="id_kategori" name="id_kategori">
                </div>
                <div class="form-group">
                    <label for="nama_produk">Nama Produk</label>
                    <input type="text" class="form-control" id="nama_produk" name="nama_produk">
                </div>
                <div class="form-group">
                    <label for="deskripsi_produk">Deskripsi Produk</label>
                    <input type="text" class="form-control" id="deskripsi_produk" name="deskripsi_produk">
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga">
                </div>
                <div class="form-group">
                    <label for="status">Status Produk</label>
                    <input type="text" class="form-control" id="status" name="status">
                </div>
                <div class="form-group">
                    <label for="stok">Stok Produk</label>
                    <input type="text" class="form-control" id="stok" name="stok">
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <input type="text" class="form-control" id="kategori" name="kategori">
                </div>
                <div class="form-group">
                    <label for="gambar">Pilih Gambar</label>
                    <input type="file" class="form-control-file" id="gambar" name="gambar" accept="image/*" required>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-secondary" onclick="toggleForm()">Batal</button>
            </form>
        </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function toggleForm() {
            var form = document.getElementById("formTambahProduk");
            if (form.style.display === "none") {
                form.style.display = "block";
            } else {
                form.style.display = "none";
            }
        }
    </script>
    </div>
</body>

</html>

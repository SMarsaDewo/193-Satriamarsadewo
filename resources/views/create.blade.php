<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Buat Data Penjualan</title>
</head>
<bodyclass="bg-light">
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Buat Penjualan Baru</h1>
            </div>
            <div class="card-body">
                @isset($penjualan)
                    <form action="{{ route('penjualan.store') }}" method="POST" class="needs-validation" novalidate>
                        @csrf
                        <div class="form-group">
                            <label for="nama_produk">Nama Produk:</label>
                            <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="{{ $penjualan->nama_produk ?? '' }}" required>
                        </div>

                        <div class="form-group">
                            <label for="jumlah">Jumlah:</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $penjualan->jumlah ?? '' }}" required>
                        </div>

                        <div class="form-group">
                            <label for="harga_satuan">Harga Satuan:</label>
                            <input type="number" class="form-control" id="harga_satuan" name="harga_satuan" value="{{ $penjualan->harga_satuan ?? '' }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan Penjualan</button>
                        @if(isset($penjualan) && $penjualan->id)
                            <a href="{{ route('penjualan.show', $penjualan->id) }}" class="btn btn-info">Lihat Data</a>
                        @endif


                    </form>
                @else
                    <p class="text-center">Data penjualan tidak tersedia.</p>
                @endisset
            </div>
        </div>
    </div>
</bodyclass=>
</html>

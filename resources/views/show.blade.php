<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Detail Penjualan</title>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Detail Penjualan</h1>
            </div>
            <div class="card-body">
                <p><strong>Nama Produk:</strong> {{ $penjualan->nama_produk }}</p>
                <p><strong>Jumlah:</strong> {{ $penjualan->jumlah }}</p>
                <p><strong>Harga Satuan:</strong> {{ $penjualan->harga_satuan }}</p>
                <p><strong>Total Harga:</strong> {{ $penjualan->total_harga }}</p>
            </div>
        </div>
        

            <a href="{{ route('penjualan.create') }}" class="btn btn-secondary">Kembali</a>

    </div>
</body>
</html>

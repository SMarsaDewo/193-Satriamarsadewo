<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Struk Penjualan</title>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="struk bg-white p-4 shadow">
            <h1 class="text-center mb-4">Struk Penjualan</h1>
            <!-- Detail struk penjualan -->
            <p>Nama Produk: {{ $penjualan->nama_produk }}</p>
            <p>Jumlah: {{ $penjualan->jumlah }}</p>
            <p>Total Harga: {{ $penjualan->total_harga }}</p>

        </div>
    </div>
</body>
</html>

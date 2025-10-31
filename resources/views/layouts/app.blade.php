<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Toko</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="#">Manajemen Toko</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li><a class="nav-link" href="{{ route('pelanggan.index') }}">Pelanggan</a></li>
                <li><a class="nav-link" href="{{ route('produk.index') }}">Produk</a></li>
                <li><a class="nav-link" href="{{ route('pesanan.index') }}">Pesanan</a></li>
                <li><a class="nav-link" href="{{ route('detail-pesanan.index') }}">Detail Pesanan</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>

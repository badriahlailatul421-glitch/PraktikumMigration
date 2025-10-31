<div>
 @extends('layouts.app')

@section('content')
<h2>Edit Produk</h2>
<form action="{{ route('produk.update', $produk->id) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3"><label>Nama</label><input type="text" name="nama" class="form-control" value="{{ $produk->nama }}"></div>
    <div class="mb-3"><label>Harga</label><input type="number" name="harga" class="form-control" value="{{ $produk->harga }}"></div>
    <div class="mb-3"><label>Stok</label><input type="number" name="stok" class="form-control" value="{{ $produk->stok }}"></div>
    <div class="mb-3"><label>Deskripsi</label><textarea name="deskripsi" class="form-control">{{ $produk->deskripsi }}</textarea></div>
    <button class="btn btn-primary">Update</button>
</form>
@endsection

</div>

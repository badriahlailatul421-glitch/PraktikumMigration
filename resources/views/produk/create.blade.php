<div>
  @extends('layouts.app')

@section('content')
<h2>Tambah Produk</h2>
<form action="{{ route('produk.store') }}" method="POST">
    @csrf
    <div class="mb-3"><label>Nama</label><input type="text" name="nama" class="form-control"></div>
    <div class="mb-3"><label>Harga</label><input type="number" name="harga" class="form-control"></div>
    <div class="mb-3"><label>Stok</label><input type="number" name="stok" class="form-control"></div>
    <div class="mb-3"><label>Deskripsi</label><textarea name="deskripsi" class="form-control"></textarea></div>
    <button class="btn btn-success">Simpan</button>
</form>
@endsection

</div>

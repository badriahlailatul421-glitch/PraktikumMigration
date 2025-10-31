<div>
@extends('layouts.app')

@section('content')
<h2>Tambah Pelanggan</h2>
<form action="{{ route('pelanggan.store') }}" method="POST">
    @csrf
    <div class="mb-3"><label>Nama</label><input type="text" name="nama" class="form-control"></div>
    <div class="mb-3"><label>Alamat</label><input type="text" name="alamat" class="form-control"></div>
    <div class="mb-3"><label>Email</label><input type="email" name="email" class="form-control"></div>
    <div class="mb-3"><label>No Telepon</label><input type="text" name="no_telepon" class="form-control"></div>
    <button class="btn btn-success">Simpan</button>
</form>
@endsection

</div>

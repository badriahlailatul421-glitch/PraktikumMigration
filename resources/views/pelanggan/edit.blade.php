<div>
@extends('layouts.app')

@section('content')
<h2>Edit Pelanggan</h2>
<form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3"><label>Nama</label><input type="text" name="nama" class="form-control" value="{{ $pelanggan->nama }}"></div>
    <div class="mb-3"><label>Alamat</label><input type="text" name="alamat" class="form-control" value="{{ $pelanggan->alamat }}"></div>
    <div class="mb-3"><label>Email</label><input type="email" name="email" class="form-control" value="{{ $pelanggan->email }}"></div>
    <div class="mb-3"><label>No Telepon</label><input type="text" name="no_telepon" class="form-control" value="{{ $pelanggan->no_telepon }}"></div>
    <button class="btn btn-primary">Update</button>
</form>
@endsection

</div>

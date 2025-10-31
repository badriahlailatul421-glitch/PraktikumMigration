<div>
@extends('layouts.app')

@section('content')
<h2>Daftar Pelanggan</h2>
<a href="{{ route('pelanggan.create') }}" class="btn btn-primary mb-3">Tambah Pelanggan</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th><th>Nama</th><th>Alamat</th><th>Email</th><th>No Telepon</th><th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pelanggans as $p)
        <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->alamat }}</td>
            <td>{{ $p->email }}</td>
            <td>{{ $p->no_telepon }}</td>
            <td>
                <a href="{{ route('pelanggan.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('pelanggan.destroy', $p->id) }}" method="POST" style="display:inline-block;">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection


</div>

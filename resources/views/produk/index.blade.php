<div>
 @extends('layouts.app')

@section('content')
<h2>Daftar Produk</h2>
<a href="{{ route('produk.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th><th>Nama</th><th>Harga</th><th>Stok</th><th>Deskripsi</th><th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($produks as $p)
        <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->harga }}</td>
            <td>{{ $p->stok }}</td>
            <td>{{ $p->deskripsi }}</td>
            <td>
                <a href="{{ route('produk.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('produk.destroy', $p->id) }}" method="POST" style="display:inline-block;">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

</div>

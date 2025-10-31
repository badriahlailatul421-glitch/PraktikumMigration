<div>
 @extends('layouts.app')

@section('content')
<h2>Daftar Pesanan</h2>
<a href="{{ route('pesanan.create') }}" class="btn btn-primary mb-3">Tambah Pesanan</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th><th>Tanggal</th><th>Pelanggan</th><th>Total Harga</th><th>Status</th><th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pesanans as $p)
        <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->tanggal_pesanan }}</td>
            <td>{{ $p->pelanggan->nama }}</td>
            <td>{{ $p->total_harga }}</td>
            <td>{{ $p->status }}</td>
            <td>
                <a href="{{ route('pesanan.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('pesanan.destroy', $p->id) }}" method="POST" style="display:inline-block;">
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

<div>
 @extends('layouts.app')

@section('content')
<h2>Daftar Detail Pesanan</h2>
<a href="{{ route('detail-pesanan.create') }}" class="btn btn-primary mb-3">Tambah Detail</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th><th>Pesanan</th><th>Produk</th><th>Jumlah</th><th>Harga Satuan</th><th>Subtotal</th><th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($detail_pesanans as $d)
        <tr>
            <td>{{ $d->id }}</td>
            <td>{{ $d->pesanan->id }}</td>
            <td>{{ $d->produk->nama }}</td>
            <td>{{ $d->jumlah }}</td>
            <td>{{ $d->harga_satuan }}</td>
            <td>{{ $d->subtotal }}</td>
            <td>
                <a href="{{ route('detail-pesanan.edit', $d->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('detail-pesanan.destroy', $d->id) }}" method="POST" style="display:inline-block;">
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

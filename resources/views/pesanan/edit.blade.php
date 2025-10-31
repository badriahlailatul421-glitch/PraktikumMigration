<div>
 @extends('layouts.app')

@section('content')
<h2>Edit Pesanan</h2>
<form action="{{ route('pesanan.update', $pesanan->id) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3"><label>Tanggal Pesanan</label><input type="date" name="tanggal_pesanan" class="form-control" value="{{ $pesanan->tanggal_pesanan }}"></div>
    <div class="mb-3">
        <label>Pelanggan</label>
        <select name="pelanggan_id" class="form-control">
            @foreach($pelanggans as $p)
                <option value="{{ $p->id }}" {{ $p->id == $pesanan->pelanggan_id ? 'selected' : '' }}>{{ $p->nama }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3"><label>Total Harga</label><input type="number" name="total_harga" class="form-control" value="{{ $pesanan->total_harga }}"></div>
    <div class="mb-3">
        <label>Status</label>
        <select name="status" class="form-control">
            <option value="diproses" {{ $pesanan->status == 'diproses' ? 'selected' : '' }}>Diproses</option>
            <option value="selesai" {{ $pesanan->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
        </select>
    </div>
    <button class="btn btn-primary">Update</button>
</form>
@endsection


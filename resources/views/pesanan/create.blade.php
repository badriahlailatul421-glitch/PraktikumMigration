<div>
  @extends('layouts.app')

@section('content')
<h2>Tambah Pesanan</h2>
<form action="{{ route('pesanan.store') }}" method="POST">
    @csrf
    <div class="mb-3"><label>Tanggal Pesanan</label><input type="date" name="tanggal_pesanan" class="form-control"></div>
    <div class="mb-3">
        <label>Pelanggan</label>
        <select name="pelanggan_id" class="form-control">
            @foreach($pelanggans as $p)
                <option value="{{ $p->id }}">{{ $p->nama }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3"><label>Total Harga</label><input type="number" name="total_harga" class="form-control"></div>
    <div class="mb-3">
        <label>Status</label>
        <select name="status" class="form-control">
            <option value="diproses">Diproses</option>
            <option value="selesai">Selesai</option>
        </select>
    </div>
    <button class="btn btn-success">Simpan</button>
</form>
@endsection


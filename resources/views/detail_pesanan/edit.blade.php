<div>
 @extends('layouts.app')

@section('content')
<h2>Edit Detail Pesanan</h2>
<form action="{{ route('detail-pesanan.update', $detail_pesanan->id) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3">
        <label>Pesanan</label>
        <select name="pesanan_id" class="form-control">
            @foreach($pesanans as $ps)
                <option value="{{ $ps->id }}" {{ $ps->id == $detail_pesanan->pesanan_id ? 'selected' : '' }}>{{ $ps->id }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label>Produk</label>
        <select name="produk_id" class="form-control">
            @foreach($produks as $pr)
                <option value="{{ $pr->id }}" {{ $pr->id == $detail_pesanan->produk_id ? 'selected' : '' }}>{{ $pr->nama }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3"><label>Jumlah</label><input type="number" name="jumlah" class="form-control" value="{{ $detail_pesanan->jumlah }}"></div>
    <div class="mb-3"><label>Harga Satuan</label><input type="number" name="harga_satuan" class="form-control" value="{{ $detail_pesanan->harga_satuan }}"></div>
    <div class="mb-3"><label>Subtotal</label><input type="number" name="subtotal" class="form-control" value="{{ $detail_pesanan->subtotal }}"></div>
    <button class="btn btn-primary">Update</button>
</form>
@endsection

</div>

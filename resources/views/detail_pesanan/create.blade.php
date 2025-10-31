<div>
   @extends('layouts.app')

@section('content')
<h2>Tambah Detail Pesanan</h2>
<form action="{{ route('detail-pesanan.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Pesanan</label>
        <select name="pesanan_id" class="form-control">
            @foreach($pesanans as $ps)
                <option value="{{ $ps->id }}">{{ $ps->id }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label>Produk</label>
        <select name="produk_id" class="form-control">
            @foreach($produks as $pr)
                <option value="{{ $pr->id }}">{{ $pr->nama }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3"><label>Jumlah</label><input type="number" name="jumlah" class="form-control"></div>
    <div class="mb-3"><label>Harga Satuan</label><input type="number" name="harga_satuan" class="form-control"></div>
    <div class="mb-3"><label>Subtotal</label><input type="number" name="subtotal" class="form-control"></div>
    <button class="btn btn-success">Simpan</button>
</form>
@endsection

</div>

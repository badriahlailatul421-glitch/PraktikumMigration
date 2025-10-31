<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index()
    {
        $pesanans = Pesanan::with('pelanggan')->get();
        return view('pesanan.index', compact('pesanans'));
    }

    public function create()
    {
        $pelanggans = Pelanggan::all();
        return view('pesanan.create', compact('pelanggans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal_pesanan' => 'required|date',
            'pelanggan_id' => 'required|exists:pelanggans,id',
            'total_harga' => 'required|numeric',
            'status' => 'required',
        ]);

        Pesanan::create($request->all());
        return redirect()->route('pesanan.index')->with('success', 'Pesanan berhasil ditambahkan!');
    }

    public function edit(Pesanan $pesanan)
    {
        $pelanggans = Pelanggan::all();
        return view('pesanan.edit', compact('pesanan', 'pelanggans'));
    }

    public function update(Request $request, Pesanan $pesanan)
    {
        $pesanan->update($request->all());
        return redirect()->route('pesanan.index')->with('success', 'Pesanan berhasil diperbarui!');
    }

    public function destroy(Pesanan $pesanan)
    {
        $pesanan->delete();
        return redirect()->route('pesanan.index')->with('success', 'Pesanan berhasil dihapus!');
    }
}

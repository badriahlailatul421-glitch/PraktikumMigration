<?php


namespace App\Http\Controllers;

use App\Models\DetailPesanan;
use Illuminate\Http\Request;

class DetailPesananController extends Controller
{
    public function index()
    {
        // Ambil semua data detail pesanan dari database
        $detail_pesanans = DetailPesanan::with(['pesanan', 'produk'])->get();

        // Kirim ke view index.blade.php
        return view('detail_pesanan.index', compact('detail_pesanans'));
    }
}

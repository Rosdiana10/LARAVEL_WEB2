<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function insert(Request $request)
    {
        // Validasi
        $request->validate([
            'nama' => 'required|string',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'kategori' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan gambar
        $gambarPath = $request->file('gambar')->store('public/gambar');

        // Simpan ke database
        $produk = new Produk;
        $produk->nama = $request->nama;
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;
        $produk->kategori = $request->kategori;
        $produk->gambar = $gambarPath;

        if ($produk->save()) {
            return redirect()->back()->with('success', 'Produk berhasil ditambahkan.');
        } else {
            return redirect()->back()->with('error', 'Gagal menambahkan produk.');
        }
    }

    public function index()
    {
        $produks = Produk::all();

        return view('lihatProduk', compact('produks'));
    }
}
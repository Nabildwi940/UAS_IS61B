<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Pembeli;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::with(['pembeli', 'mobil'])->get();
        return view('transaksi.index', compact('transaksi'));
    }

    public function create()
    {
        $pembelis = Pembeli::all();
        $mobils = Mobil::all();
        return view('transaksi.create', compact('pembelis', 'mobils'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pembeli_id' => 'required|exists:pembelis,id',
            'mobil_id' => 'required|exists:mobils,id',
            'jenis_harga' => 'required', // Update ini
            'jumlah_harga_transaksi' => 'required|numeric',
            'status_transaksi' => 'required|string|max:255',
        ]);

        Transaksi::create($request->all());

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil ditambahkan.');
    }

    public function show($id)
    {
        $transaksi = Transaksi::with(['pembeli', 'mobil'])->findOrFail($id);
        return view('transaksi.show', compact('transaksi'));
    }

    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $pembelis = Pembeli::all();
        $mobils = Mobil::all();
        return view('transaksi.edit', compact('transaksi', 'pembelis', 'mobils'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pembeli_id' => 'required|exists:pembelis,id',
            'mobil_id' => 'required|exists:mobils,id',
            'jenis_harga' => 'required', // Update ini
            'jumlah_harga_transaksi' => 'required|numeric',
            'status_transaksi' => 'required|string|max:255',
        ]);

        $transaksi = Transaksi::findOrFail($id);
        $transaksi->update($request->all());

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dihapus.');
    }
}

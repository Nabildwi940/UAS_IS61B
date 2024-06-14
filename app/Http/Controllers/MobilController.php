<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function index()
    {
        $mobil = Mobil::all();
        return view('mobil.index', compact('mobil'));
    }

    public function create()
    {
        return view('mobil.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|integer',
            'tahun' => 'required|integer',
            'warna' => 'required',
            'nopol' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time().'.'.$request->file('gambar')->extension();  
        $request->file('gambar')->move(public_path('images'), $imageName);

        $mobil = new Mobil();
        $mobil->nama = $request->nama;
        $mobil->harga = $request->harga;
        $mobil->tahun = $request->tahun;
        $mobil->warna = $request->warna;
        $mobil->nopol = $request->nopol;
        $mobil->gambar = $imageName;
        $mobil->save();

        return redirect()->route('mobil.index')->with('success', 'Mobil berhasil ditambahkan.');
    }

    public function show($id)
    {
        $mobil = Mobil::findOrFail($id);
        return view('mobil.show', compact('mobil'));
    }

    public function edit($id)
    {
        $mobil = Mobil::findOrFail($id);
        return view('mobil.edit', compact('mobil'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|integer',
            'tahun' => 'required|integer',
            'warna' => 'required',
            'nopol' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $mobil = Mobil::findOrFail($id);

        $mobil->nama = $request->nama;
        $mobil->harga = $request->harga;
        $mobil->tahun = $request->tahun;
        $mobil->warna = $request->warna;
        $mobil->nopol = $request->nopol;

        if ($request->hasFile('gambar')) {
            $imageName = time().'.'.$request->file('gambar')->extension();  
            $request->file('gambar')->move(public_path('images'), $imageName);
            $mobil->gambar = $imageName;
        }

        $mobil->save();

        return redirect()->route('mobil.index')->with('success', 'Data mobil berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $mobil = Mobil::findOrFail($id);
        $mobil->delete();

        return redirect()->route('mobil.index')->with('success', 'Data mobil berhasil dihapus.');
    }
}

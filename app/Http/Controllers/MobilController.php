<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\MobilImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MobilController extends Controller
{
    public function index()
    {
        $mobils = Mobil::with('images')->get();
        return view('mobils.index', compact('mobils'));
    }

    public function create()
    {
        return view('mobils.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_mobil' => 'required|string|max:255',
            'harga' => 'required|integer',
            'tahun' => 'required|integer',
            'warna' => 'required|string|max:255',
            'nopol' => 'required|string|max:255',
            'kilometer' => 'required|integer',
            'bahan_bakar' => 'required|string|max:255',
            'cc_mesin' => 'required|integer',
            'transmisi' => 'required|string|max:255',
            'jumlah_seat' => 'required|integer',
            'deskripsi' => 'required|string',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $mobil = Mobil::create($data);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('public/mobil_images');
                MobilImage::create([
                    'mobil_id' => $mobil->id,
                    'path' => $path,
                ]);
            }
        }

        return redirect()->route('mobils.index')->with('success', 'Mobil berhasil ditambahkan!');
    }

    public function show(Mobil $mobil)
    {
        return view('mobils.show', compact('mobil'));
    }

    public function edit(Mobil $mobil)
    {
        return view('mobils.edit', compact('mobil'));
    }

    public function update(Request $request, Mobil $mobil)
    {
        $data = $request->validate([
            'nama_mobil' => 'required|string|max:255',
            'harga' => 'required|integer',
            'tahun' => 'required|integer',
            'warna' => 'required|string|max:255',
            'nopol' => 'required|string|max:255',
            'kilometer' => 'required|integer',
            'bahan_bakar' => 'required|string|max:255',
            'cc_mesin' => 'required|integer',
            'transmisi' => 'required|string|max:255',
            'jumlah_seat' => 'required|integer',
            'deskripsi' => 'required|string',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $mobil->update($data);

        if ($request->hasFile('images')) {
            foreach ($mobil->images as $image) {
                Storage::delete($image->path);
                $image->delete();
            }

            foreach ($request->file('images') as $image) {
                $path = $image->store('public/mobil_images');
                MobilImage::create([
                    'mobil_id' => $mobil->id,
                    'path' => $path,
                ]);
            }
        }

        return redirect()->route('mobils.index')->with('success', 'Mobil berhasil diperbarui!');
    }

    public function destroy(Mobil $mobil)
    {
        foreach ($mobil->images as $image) {
            Storage::delete($image->path);
            $image->delete();
        }

        $mobil->delete();
        return redirect()->route('mobils.index')->with('success', 'Mobil berhasil dihapus!');
    }
}

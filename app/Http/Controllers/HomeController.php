<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;
use App\Models\Pembeli; // Pastikan model Pembeli sudah ada
use App\Models\Transaksi;

class HomeController extends Controller
{
    public function index()
    {
        $mobils = Mobil::all(); // Mengambil semua data mobil dari database
        $jumlahPembeli = Pembeli::count(); // Menghitung jumlah pembeli
        $jumlahTransaksi = Transaksi::count();
        
        return view('home', compact('mobils', 'jumlahPembeli','jumlahTransaksi')); // Mengirim data ke view
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;

class HomeController extends Controller
{
    public function index()
    {
        $mobils = Mobil::all(); // Mengambil semua data mobil dari database
        return view('home', compact('mobils')); // Mengirimkan data ke view
    }
}

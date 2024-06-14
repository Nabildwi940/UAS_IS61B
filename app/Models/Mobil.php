<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $table = 'mobils'; // Sesuaikan dengan nama tabel yang digunakan di database

    protected $fillable = [
        'nama', 'harga', 'tahun', 'warna', 'nopol', 'gambar'
    ];
}


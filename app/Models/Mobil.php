<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_mobil', 'harga', 'tahun', 'warna', 'nopol', 'kilometer', 'bahan_bakar', 'cc_mesin', 'transmisi', 'jumlah_seat', 'deskripsi'
    ];

    public function images()
    {
        return $this->hasMany(MobilImage::class);
    }
    public function transaksis()
    {
        return $this->hasMany(Transaksi::class);
    }
}

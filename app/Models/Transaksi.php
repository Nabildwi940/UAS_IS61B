<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'pembeli_id',
        'mobil_id',
        'jenis_harga', // Update ini
        'jumlah_harga_transaksi',
        'status_transaksi',
    ];

    public function pembeli()
    {
        return $this->belongsTo(Pembeli::class);
    }

    public function mobil()
    {
        return $this->belongsTo(Mobil::class);
    }
}

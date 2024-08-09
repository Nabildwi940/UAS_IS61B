<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pembeli_id')->constrained('pembelis');
            $table->foreignId('mobil_id')->constrained('mobils');
            $table->string('jenis_harga');
            $table->decimal('jumlah_harga_transaksi', 15, 2)->nullable();
            $table->decimal('custom_harga', 15, 2)->nullable();
            $table->string('status_transaksi');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}

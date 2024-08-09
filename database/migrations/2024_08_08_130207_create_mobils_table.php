<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobilsTable extends Migration
{
    public function up()
    {
        Schema::create('mobils', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mobil');
            $table->integer('harga');
            $table->integer('tahun');
            $table->string('warna');
            $table->string('nopol');
            $table->integer('kilometer');
            $table->string('bahan_bakar');
            $table->integer('cc_mesin');
            $table->string('transmisi');
            $table->integer('jumlah_seat');
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mobils');
    }
}

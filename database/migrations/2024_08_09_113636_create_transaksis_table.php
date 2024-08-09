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
            $table->foreignId('pembeli_id')->constrained()->onDelete('cascade');
            $table->foreignId('mobil_id')->constrained()->onDelete('cascade');
            $table->enum('jenis_harga', ['mobil', 'lainnya']); // Update ini
            $table->integer('jumlah_harga_transaksi');
            $table->string('status_transaksi');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}

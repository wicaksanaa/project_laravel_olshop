<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->string('nama_penerima');
            $table->string('nomor');
            $table->string('alamat');
            $table->integer('pos');
            $table->string('keterangan');
            $table->string('nama_barang');
            $table->string('gambar_barang');
            $table->integer('harga_barang');
            $table->integer('jumlah_beli');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checkouts');
    }
};

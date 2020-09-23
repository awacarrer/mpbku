<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengirimanBarangTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengiriman_barang', function (Blueprint $table) {
            $table->integer('id');
            $table->date('tanggal_pengiriman');
            $table->text('nama_penerima');
            $table->text('organisasi_penerima');
            $table->text('nama_barang');
            $table->integer('berat_barang');
            $table->integer('biaya');
            $table->longText('alamat_penerima');
            $table->integer('pelanggan_id');
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
        Schema::dropIfExists('pengiriman_barang');
    }
}

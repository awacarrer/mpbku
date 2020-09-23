<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPengirimanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pengiriman', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('pengiriman_barang_id');
            $table->text('email');
            $table->integer('no_pengiriman');
            $table->integer('biaya');
            $table->text('nama_barang');
            $table->integer('berat_barang');
            $table->softDeletes();
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
        Schema::dropIfExists('detail_pengiriman');
    }
}

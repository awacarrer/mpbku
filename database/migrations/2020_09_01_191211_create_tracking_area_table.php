<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackingAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracking_area', function (Blueprint $table) {
            $table->string('id',30)->primary();
            $table->text('resi');
            $table->text('kota_asal');
            $table->text('kota_tujuan');
            $table->text('alamat');
            $table->integer('pengiriman_barang_id');
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
        Schema::dropIfExists('tracking_area');
    }
}

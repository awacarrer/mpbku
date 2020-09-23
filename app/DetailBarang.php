<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailBarang extends Model
{

    protected $table = "detail_barang";

    protected $fillable = [

        'pengiriman_barang_id','email','no_pengiriman', 'biaya', 'nama_barang', 'berat_barang'
    ];

    protected $hidden = [];

    public function pengirimanbarang() {
        return $this->belongsTo(pengirimanbarang::class, 'pengiriman_barang_id','id');
    }

}

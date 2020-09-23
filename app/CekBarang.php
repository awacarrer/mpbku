<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CekBarang extends Model
{

    protected $table = "pengiriman_barang";

    protected $fillable = [

        'nama_barang', 'berat_barang','biaya'
    ];

    protected $hidden = [];

    public function details() {
        return $this->hasMany(Pelanggan::class, 'users_id','id');
    }
    public function pelanggan() {
        return $this->belongsTo(DetailBarang::class, 'pengiriman_barang_id','id');
    }
    public function user() {
        return $this->belongsTo(User::class, 'users_id','id');
    }
}

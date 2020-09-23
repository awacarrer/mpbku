<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusPengiriman extends Model
{

    protected $table = "status_pengiriman";

    protected $fillable = [

        'lacak', 'waktu', 'destinasi','tracking_area_id'
    ];

    protected $hidden = [];

    public function details() {
        return $this->hasMany(Pelanggan::class, 'pelanggan_id','id');
    }
    public function pelanggan() {
        return $this->belongsTo(DetailBarang::class, 'pengiriman_barang_id','id');
    }
    public function user() {
        return $this->belongsTo(User::class, 'users_id','id');
    }
}

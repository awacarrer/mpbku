<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrackingArea extends Model
{

    protected $table = "tracking_area";

    protected $fillable = [

        'id','resi','kota_asal', 'kota_tujuan', 'alamat','pengiriman_barang_id'
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

    public function users(){
        return $this->belongsTo('App\User');
    }
    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class PengirimanBarang extends Model
{
   // use softDeletes;

    protected $table = "pengiriman_barang";

    protected $fillable = [

        'pelanggan_id','tanggal_pengiriman', 'nama_penerima', 'organisasi_penerima', 'alamat_penerima','email_penerima','nama_barang','biaya', 'berat_barang'
    ];

    protected $hidden = [];

    public function details() {
        return $this->hasMany(DetailBarang::class, 'pengiriman_barang_id','id');
    }
    public function pengiriman_barang() {
        return $this->belongsTo(PengirimanBarang::class, 'pengiriman_barang_id','id');
    }
    public function user() {
        return $this->belongsTo(User::class, 'users_id','id');
    }

    public function users(){
        return $this->belongsTo('App\User');
    }
   
}

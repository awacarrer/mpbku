<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformasiBiaya extends Model
{

    protected $table = "informasi_biaya";

    protected $fillable = [

        'kota_asal', 'kota_tujuan', 'total_berat', 'biaya'
    ];

    protected $hidden = [];
}

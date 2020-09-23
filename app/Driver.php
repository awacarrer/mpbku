<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{

    protected $table = "status_pengiriman";

    protected $fillable = [

        'nama_pengirim', 'lacak', 'waktu', 'destinasi'
    ];

    protected $hidden = [];
}

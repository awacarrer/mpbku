<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    protected $table = "saran";

    protected $fillable = [

        'id', 'email', 'pesan'
    ];

    protected $hidden = [];
}

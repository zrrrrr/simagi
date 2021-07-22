<?php

namespace App\Subdata;

use Illuminate\Database\Eloquent\Model;

class Merk_Peralatan extends Model
{
    protected $table = "data_merk";

    protected $fillable = [
        'nama_merk'
    ];
}

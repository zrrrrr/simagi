<?php

namespace App\Subdata;

use Illuminate\Database\Eloquent\Model;

class Tagnama_Alat extends Model
{
    protected $table = "datatag_nama_alat";

    protected $fillable = [
        'tag_nama_alat'
    ];
}

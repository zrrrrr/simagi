<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peralatan_GI extends Model
{
    protected $table = "data_peralatan_gardu_induk";

    protected $fillable = [
        'nama_peralatan',
        'kategori_peralatan',
        'id_gardu_induk'
    ];
}

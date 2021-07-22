<?php

namespace App\Subdata;

use Illuminate\Database\Eloquent\Model;

class Nama_GI extends Model
{
    protected $table = "data_nama_gardu_induk";

    public function peralatan_gi() {
    	return $this->hasMany('App\Peralatan_GI', 'id_gardu_induk');
    }

    protected $fillable = [
        'nama_gardu'
    ];
}

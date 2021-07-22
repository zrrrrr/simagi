<?php

namespace App\Subdata;

use Illuminate\Database\Eloquent\Model;

class Kategori_Peralatan extends Model
{
    protected $table = "data_kategori_peralatan";

    public function peralatan_gi() {
    	return $this->hasMany('App\Peralatan_GI', 'id_kategori_peralatan');
    }

    protected $fillable = [
        'kategori_peralatan'
    ];
    
}

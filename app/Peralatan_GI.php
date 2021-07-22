<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peralatan_GI extends Model
{
    protected $table = "data_peralatan_gardu_induk";

    protected $fillable = [
        'nama_peralatan',
        'id_kategori_peralatan',
        'id_gardu_induk'
    ];

    public function data_kategori_peralatan() {
        return $this->belongsTo('App\Subdata\Kategori_Peralatan', 'id_kategori_peralatan');
    }

    public function data_nama_gardu_induk() {
        return $this->belongsTo('App\Subdata\Nama_GI', 'id_gardu_induk');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perilakukerja extends Model
{
    protected $table = 'tb_perilakukerja';
    protected $fillable = [
        'nik_penilai',
        'nik_dinilai',
        'nama_lengkap',
        'orientasi_pelayanan',
        'integritas',
        'komitmen',
        'disiplin',
        'kerjasama',
        'kepemimpinan'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasilSKP extends Model
{
    protected $table = 'tb_hasilskp';
    protected $fillable = [
        'nik',
        'nilai_capaian_skp_akhir',
        'predikat'
    ];
}

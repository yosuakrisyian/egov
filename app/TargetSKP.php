<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TargetSKP extends Model
{
    protected $table = 'tb_targetskp';
    protected $fillable = [
        'kegiatan_tugas_jabatan',
        'kuantitas',
        'kualitas',
        'waktu',
        'biaya',
        'nik_nip'
    ];
}

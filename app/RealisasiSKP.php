<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RealisasiSKP extends Model
{
    protected $table = 'tb_realisasiskp';
    protected $fillable = [
        'nik_penilai',
        'nik_dinilai',
        'nama',
        'golongan',
        'jabatan',
        'kegiatan_tugas_jabatan',
        'kuantitas',
        'kualitas',
        'waktu',
        'biaya'
    ];
}

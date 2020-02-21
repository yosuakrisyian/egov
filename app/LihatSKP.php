<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LihatSKP extends Model
{
    protected $table = 'tb_lihatskp';
    protected $fillable = [
        'tahun',
        'nik_nip',
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

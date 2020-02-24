<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawaisurat extends Model
{
    protected $table = 'tb_surat';
    protected $fillable = [
        'nik_nip',
        'nama_lengkap',
        'pangkat_gol',
        'jabatan',
        'unit_kerja',
        'instansi',
        'perguruan_tinggi',
        'fakultas',
        'program_studi',
        'jenjang',
        'tanggal'
    ];
}

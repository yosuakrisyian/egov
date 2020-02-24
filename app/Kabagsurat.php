<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kabagsurat extends Model
{
    protected $table = 'tb_suratkabag';
    protected $fillable = [
        'nik_nip',
        'nama_lengkap',
        'pangkat_gol',
        'jabatan',
        'nip_pegawai',
        'nama_pegawai',
        'golongan_pegawai',
        'jabatan_pegawai',
        'unitkerja_pegawai',
        'tanggal',
        'jenjang',
        'perguruan_tinggi'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kehadirankerja extends Model
{
    protected $table = 'tb_absen';
    protected $fillable = [
        'nik',
        'jumlahhadir',
        'lokasi_id',
        'kode_verifikasi'
    ];
}

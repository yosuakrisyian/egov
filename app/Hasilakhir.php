<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hasilakhir extends Model
{
    protected $table = 'tb_hasilkenaikanpangkat';
    protected $fillable = [
        'nik_nip',
        'nama_lengkap',
        'masa_kerja',
        'skp_2tahunterakhir',
        'satuan_organisasi',
        'jenjang'
    ];
}

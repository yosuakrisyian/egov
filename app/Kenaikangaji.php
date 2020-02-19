<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kenaikangaji extends Model
{
    protected $table = 'tb_kenaikangaji';
    protected $fillable = [
        'nik_nip',
        'nama_lengkap',
        'gaji',
        'sk_cpns',
        'sk_pns',
        'sk_kenaikan_pangkat_terakhir',
        'gaji_berkala_sebelumnya',
        'skp_2tahun_terakhir',
        'sk_mutasi',
        'surat_pengantar_unit_kerja'
    ];
}

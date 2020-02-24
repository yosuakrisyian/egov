<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Izincuti extends Model
{
    protected $table = 'tb_izincuti';
    protected $fillable = [
        'nik_nip',
        'nama_lengkap',
        'pangkat_gol',
        'jabatan',
        'satuan_organisasi',
        'jumlah_hari',
        'tanggal_cuti',
        'batas_tanggalcuti',
        'kategori_cuti',
        'alasan_cuti'
    ];
}

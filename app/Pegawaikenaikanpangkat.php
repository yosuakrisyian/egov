<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawaikenaikanpangkat extends Model
{
    protected $table = 'tb_kenaikan_pangkat';
    protected $fillable = [
        'nik_nip',
        'nama_lengkap',
        'pangkat_gol',
        'jabatan',
        'sk_cpns',
        'sk_pns',
        'sk_pangkat_terakhir',
        'dp3_2tahun_terakhir',
        'karpeg',
        'daftar_riwayat_pekerjaan',
        'nota_persetujuan_bkn',
        'tanggal_pengajuan',
        'status'
    ];
}

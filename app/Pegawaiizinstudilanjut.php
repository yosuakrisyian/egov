<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawaiizinstudilanjut extends Model
{
    protected $table = 'tb_izinstudilanjut';
    protected $fillable = [
        'nik_nip',
        'nama_lengkap',
        'pangkat_gol',
        'jabatan',
        'surat_permohonan',
        'sk_cpns',
        'sk_pns',
        'sk_terakhir',
        'dp3',
        'surat_keterangan_pt',
        'tanggal_pengajuan',
        'status'
    ];
}

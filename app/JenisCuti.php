<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisCuti extends Model
{
    protected $table = 'tb_jeniscuti';
    protected $fillable = [
        'nama',
        'batas_izin'
    ];
}

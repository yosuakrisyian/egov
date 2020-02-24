<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penilaihasiltpp extends Model
{
    protected $table = 'tb_hasiltpp';
    protected $fillable = [
        'nik',
        'jumlahabsen',
        'nilai_capaiankinerja',
        'hasiltpp'
    ];
}

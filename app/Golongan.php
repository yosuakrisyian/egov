<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    protected $table = 'tb_golongan';
    protected $fillable = [
        'jenis_golongan',
        'pangkat',
        'golongan'
    ];
}

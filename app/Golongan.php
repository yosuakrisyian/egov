<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    protected $table = 'tb_golongan';
    protected $fillable = [
        'besaran_dasar',
        'golongan'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'kode_mapel',
        'nama_mapel'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kelas extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'tingkat',
        'nama_kelas'
    ];

    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'id_kelas');
    }

    public function waliKelas(): HasMany
    {
        return $this->hasMany(User::class, 'id_wali_kelas');
    }

    public function jadwalPelajaran(): HasMany
    {
        return $this->hasMany(JadwalPelajaran::class, 'id_kelas');
    }
}
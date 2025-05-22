<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class kelas extends Model
{
    public $timestamps = true;
    protected $table = "kelas";
    protected $fillable = [
        'tingkat',
        'nama_kelas'
    ];

    public function siswa(): HasMany
    {
        return $this->hasMany(User::class, 'id_kelas');
    }

    public function waliKelas(): HasMany
    {
        return $this->hasMany(User::class, 'id_wali_kelas')->whereHas('role', function ($query){
            $query->where('nama_role', 'Guru');
        });
    }

    public function jadwalPelajaran(): HasMany
    {
        return $this->hasMany(JadwalPelajaran::class, 'id_kelas');
    }
}

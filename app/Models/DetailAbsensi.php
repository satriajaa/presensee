<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailAbsensi extends Model
{
    protected $table = 'detail_absensi';
    public $timestamps = false;

    protected $fillable = [
        'id_absensi',
        'id_siswa',
        'status',
        'catatan',
    ];

    public function absensi(): BelongsTo
    {
        return $this->belongsTo(Absensi::class, 'id_absensi');
    }

    public function siswa(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_siswa');
    }
    // komentar
}

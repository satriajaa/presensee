<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = ['nama_role'];
    protected $primaryKey = 'id';
    public $timestamps = true;
    
    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'id_role');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenetuanRencana extends Model
{
    use HasFactory;
    public function dataSubKegiatan()
    {
        return $this->hasMany(SubKegiatan::class);
    }
}

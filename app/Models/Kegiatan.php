<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;
    public function indikatorKegiatan()
    {
        return $this->hasMany(IndikatorKegiatan::class);
    }
}

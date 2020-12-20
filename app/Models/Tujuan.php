<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tujuan extends Model
{
    use HasFactory;
    public function indikators()
    {
        return $this->hasMany(IndikatorTujuan::class);
    }
}

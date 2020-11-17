<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyKondisi extends Model
{
    use HasFactory;

    public function nilaiKondisi()
    {
        return $this->hasMany(NilaiDampak::class);
    }

    public function nilaiManfaat()
    {
        return $this->hasMany(Manfaat::class);
    }
}

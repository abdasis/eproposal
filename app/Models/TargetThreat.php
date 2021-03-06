<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TargetThreat extends Model
{
    use HasFactory;
    public function indikatorTujuan()
    {
        return $this->belongsTo(IndikatorTujuan::class);
    }
}

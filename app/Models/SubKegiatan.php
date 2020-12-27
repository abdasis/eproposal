<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubKegiatan extends Model
{
    use HasFactory;
    public function penentuanRencana()
    {
        return $this->belongsTo(PenetuanRencana::class);
    }
}

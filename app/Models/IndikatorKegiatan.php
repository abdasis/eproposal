<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndikatorKegiatan extends Model
{
    use HasFactory;
    public function tujuan()
    {
        return $this->belongsTo(IndikatorTujuan::class);
    }

    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class);
    }
}

<?php

namespace App\Models;

use Facade\FlareClient\Http\Response;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;
    public function anggotas()
    {
        return $this->hasMany(Anggota::class);
    }

    public function respondens()
    {
        return $this->hasMany(Responden::class);
    }

    public function strategi()
    {
        return $this->hasOne(Strategi::class);
    }

    public function pembuat()
    {
        return $this->belongsTo(User::class, 'dibuat_oleh');
    }
}

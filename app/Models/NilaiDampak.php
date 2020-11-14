<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiDampak extends Model
{
    use HasFactory;

    public function surveyKondisi()
    {
        return $this->belongsTo(SurveyKondisi::class);
    }
}

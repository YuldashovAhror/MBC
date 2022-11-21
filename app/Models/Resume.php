<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    public function vacancies()
    {
        return $this->belongsTo( Vacancy::class, 'vacancy_id');
    }
}

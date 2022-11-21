<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    public function categories()
    {
        return $this->belongsTo(VacancyCategory::class, 'category_id');
    }

    public function resumes()
    {
        return $this->hasMany(Resume::class);
    }
}

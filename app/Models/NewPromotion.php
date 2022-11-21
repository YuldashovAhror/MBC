<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewPromotion extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'year',
        'type_uz',
        'type_ru',
        'type_en',
        'title_uz',
        'title_ru',
        'title_en',
        'date',
        'photo_main',
        'photo',
        'description_uz',
        'description_ru',
        'description_en',
    ];
}

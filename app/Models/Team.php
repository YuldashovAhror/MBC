<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'video',
        'name_uz',
        'name_ru',
        'name_en',
        'position_uz',
        'position_ru',
        'position_en',
        'photo'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    public function feedcat()
    {
        return $this->belongsTo(FeedCat::class, 'cat_id');
    }

    protected $fillable = 
    [
        'name',
        'phone',
        'cat_id',
    ];
}

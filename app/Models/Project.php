<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function status()
    {
        return $this->belongsTo(ProjectStatus::class, 'status_id');
    }
}

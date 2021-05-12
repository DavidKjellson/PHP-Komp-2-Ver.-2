<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'activity_name', 'activity_type'
    ];

    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}

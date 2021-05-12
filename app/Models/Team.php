<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'team_name',
    ];

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }

    public function members()
    {
        return $this->belongsToMany(Members::class);
    }
}

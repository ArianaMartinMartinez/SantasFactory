<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Toy extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo',
        'description',
        'age_range'
    ];

    public function kids()
    {
        return $this->belongsToMany(Kid::class, 'kid_toy')->withTimestamps();
    }
}

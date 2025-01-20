<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kid extends Model

{
    use HasFactory;
    protected $fillable = [
        'name',
        'surname',
        'photo',
        'age',
        'country',
        'behaviour'
    ];

    public function toys(){
        return $this->belongsToMany(Toy::class, 'kid_toy');}
}


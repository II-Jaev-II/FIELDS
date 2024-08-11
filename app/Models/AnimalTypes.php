<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalTypes extends Model
{

    protected $fillable = [
        'id',
        'animalTypes'
    ];

    use HasFactory;
}

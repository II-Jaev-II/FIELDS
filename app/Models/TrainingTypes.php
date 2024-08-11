<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingTypes extends Model
{

    protected $fillable = [
        'id',
        'trainingTypes'
    ];

    use HasFactory;
}

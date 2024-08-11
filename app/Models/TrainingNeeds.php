<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingNeeds extends Model
{

    protected $fillable = [
        'id',
        'trainingNeeds',
        'userId'
    ];

    use HasFactory;
}

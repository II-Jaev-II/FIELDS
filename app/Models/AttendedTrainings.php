<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendedTrainings extends Model
{
    use HasFactory;

    protected $fillable = [
        'trainingsAttended',
        'trainingConductor',
        'yearAttended',
        'userId'
    ];
}

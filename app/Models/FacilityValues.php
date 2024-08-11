<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacilityValues extends Model
{

    protected $fillable = [
        'id',
        'facilityTypes',
    ];

    use HasFactory;
}

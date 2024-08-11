<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacilityTypes extends Model
{
    protected $table = 'facility_types';

    protected $fillable = ['facility'];

    use HasFactory;
}

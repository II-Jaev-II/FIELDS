<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgriculturalTypes extends Model
{

    protected $fillable = [
        'id',
        'agriculturalTypes'
    ];

    use HasFactory;
}

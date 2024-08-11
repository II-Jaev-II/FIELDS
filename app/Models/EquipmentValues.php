<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipmentValues extends Model
{

    protected $fillable = [
        'id',
        'equipmentTypes'
    ];

    use HasFactory;
}

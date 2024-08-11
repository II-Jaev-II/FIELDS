<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipmentTypes extends Model
{
    protected $table = 'equipment_types';

    protected $fillable = ['equipment'];

    use HasFactory;
}

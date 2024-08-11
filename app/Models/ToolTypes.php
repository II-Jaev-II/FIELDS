<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToolTypes extends Model
{

    protected $fillable = [
        'id',
        'toolTypes'
    ];

    use HasFactory;
}

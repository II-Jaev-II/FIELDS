<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MachineryTypes extends Model
{
    protected $fillable = [
        'id',
        'machinery_type'
    ];

    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LivestockValues extends Model
{

    protected $table = 'livestock_types';

    protected $fillable =
    [
        'livestock',
    ];
    use HasFactory;
}

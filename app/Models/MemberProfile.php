<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'maleCount',
        'femaleCount',
        'totalCount',
        'serviceArea',
        'farmerProfile',
        'userId'
    ];
}

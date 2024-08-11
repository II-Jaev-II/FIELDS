<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facilities extends Model
{
    protected $fillable = [
        'association',
        'intervention',
        'specification',
        'amount',
        'status',
        'fundingAgency',
        'fundSource',
        'moa',
        'certificateOfAcceptance',
        'geoTaggedPicture',
        'cms',
        'userId',
    ];

    use HasFactory;
}

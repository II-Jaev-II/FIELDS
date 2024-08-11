<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machineries extends Model
{

    protected $fillable = [
        'association',
        'intervention',
        'specification',
        'amount',
        'status',
        'fundingAgency',
        'fundSource',
        'engineNumber',
        'moa',
        'certificateOfAcceptance',
        'geoTaggedPicture',
        'cms',
        'userId'
    ];

    use HasFactory;
}

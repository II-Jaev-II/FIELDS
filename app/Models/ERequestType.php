<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ERequestType extends Model
{

    protected $fillable = [
        'id',
        'association',
        'referenceNumber',
        'requestType',
        'certificateOfRegistration',
        'goodStandingCertificate',
        'name',
        'address',
        'houseNumber',
        'street',
        'office',
        'contactNumber',
        'emailAddress',
        'birthDate',
        'maleCount',
        'femaleCount',
        'serviceArea',
        'userId'
    ];

    use HasFactory;
}

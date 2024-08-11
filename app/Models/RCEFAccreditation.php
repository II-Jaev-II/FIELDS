<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RCEFAccreditation extends Model
{
    protected $table = 'rcef_accreditations';

    protected $fillable = [
        'association',
        'province',
        'endorsementLetter',
        'farmerProfile',
        'letterOfIntent',
        'omnibusSwornCertificateNotary',
        'userId'
    ];
}

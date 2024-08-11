<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CSOAccreditation extends Model
{
    use HasFactory;

    protected $table = 'cso_accreditations';

    protected $fillable = [
        'association',
        'province',
        'amendedOmnibusSwornStatement',
        'checklistCsoRequirement',
        'csoApplicationForm',
        'secretaryCertificate',
        'swornAffidavit',
        'userId',
    ];
}

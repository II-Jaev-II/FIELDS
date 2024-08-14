<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MLGUAccreditation extends Model
{

    protected $table = 'mlgu_accreditations';

    protected $fillable =
    [
        'dulyAccomplishedForm',
        'boardResolution',
        'certificateOfRegistration',
        'currentList',
        'originalSwornStatement',
        'annualAccomplishmentReport',
        'financialStatement',
        'organizationPurpose',
        'copyofMinutes',
        'byLaws',
        'userId',
    ];

    use HasFactory;
}

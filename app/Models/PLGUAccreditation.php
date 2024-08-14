<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PLGUAccreditation extends Model
{

    protected $table = 'plgu_accreditations';

    protected $fillable = [
        'letterOfApplication',
        'dulyAccomplishedForm',
        'dulyApprovedBoard',
        'certificateOfRegistration',
        'currentList',
        'annualMeetings',
        'annualAccomplishment',
        'financialStatement',
        'userId',
    ];


    use HasFactory;
}

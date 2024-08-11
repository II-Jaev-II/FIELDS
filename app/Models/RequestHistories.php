<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestHistories extends Model
{

    protected $fillable = [
        'id',
        'subject',
        'status',
        'validationForm',
        'updatedDate',
        'remarks',
        'referenceNumber',
    ];

    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RTDMFLists extends Model
{

    protected $table = 'rtdmf_lists';

    protected $fillable = [
        'commodity',
        'province',
        'municipality',
        'startDate',
        'endDate',
        'title',
        'attachedResult',
        'userId',
    ];

    use HasFactory;
}

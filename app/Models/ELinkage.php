<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ELinkage extends Model
{
    protected $table = 'e_linkages';

    protected $fillable = [
        'association',
        'commodity',
        'subCommodity',
        'variety',
        'volume',
        'startDate',
        'endDate',
        'userId'
    ];
}

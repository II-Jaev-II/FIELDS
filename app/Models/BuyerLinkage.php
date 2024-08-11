<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyerLinkage extends Model
{
    use HasFactory;

    protected $table = 'buyer_e_linkages';

    protected $fillable = [
        'name',
        'commodity',
        'subCommodity',
        'variety',
        'frequency',
        'volume',
        'userId',
    ];
}

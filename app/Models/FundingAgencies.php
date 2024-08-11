<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FundingAgencies extends Model
{
    protected $table = 'funding_agencies';

    protected $fillable = ['agency'];

    use HasFactory;
}

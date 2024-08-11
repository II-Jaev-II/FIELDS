<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FundSources extends Model
{
    protected $table = 'fund_sources';

    protected $fillable = ['source'];

    use HasFactory;
}

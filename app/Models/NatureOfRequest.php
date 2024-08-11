<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NatureOfRequest extends Model
{
    protected $fillable = ['id', 'natureOfRequest'];

    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $table = 'users';

    protected $fillable = ['userType'];

    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RSBSADetails extends Model
{
    protected $table = 'rsbsa_details';

    protected $fillable = [
        'id',
        'rsbsaNo',
        'firstName',
        'middleName',
        'lastName',
        'extName',
        'sex',
        'birthDate',
        'userId'
    ];

    use HasFactory;
}

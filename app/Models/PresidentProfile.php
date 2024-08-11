<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PresidentProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'firstName',
        'middleName',
        'lastName',
        'suffix',
        'province',
        'municipality',
        'district',
        'barangay',
        'houseNumber',
        'street',
        'zipCode',
        'position',
        'presidentId',
        'contactNumber',
        'birthDate',
        'userId'
    ];

    public function memberProfile()
    {
        return $this->hasOne(MemberProfile::class, 'userId', 'userId');
    }
}

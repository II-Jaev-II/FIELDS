<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssociationProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'association',
        'province',
        'municipality',
        'district',
        'barangay',
        'houseNumber',
        'street',
        'zipCode',
        'office',
        'email',
        'registrationNumber',
        'registrationDate',
        'expirationDate',
        'registrationCertificate',
        'goodStandingCertificate',
        'approvedByLaws',
        'latestAuditedFinancialStatement',
        'userId',
        'cocStatus',
    ];

    public function presidentProfile()
    {
        return $this->hasOne(PresidentProfile::class, 'userId', 'userId');
    }
}

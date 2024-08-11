<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ERequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'referenceNumber',
        'province',
        'natureOfRequest',
        'letterOfIntent',
        'boardResolution',
        'endorsementLetter1',
        'endorsementLetter2',
        'certificateOfAvailability',
        'machineriesProposal',
        'geoTaggedPhotos',
        'geoTaggedLocation',
        'businessPlan',
        'usufruct',
        'productionManagementPlan',
        'requestStatus',
        'updatedRequestDate',
        'validationForm',
        'userId',
    ];

    public function associationProfile()
    {
        return $this->hasOne(AssociationProfile::class, 'userId', 'userId');
    }
}

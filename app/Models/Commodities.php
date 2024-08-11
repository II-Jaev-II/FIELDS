<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Commodities extends Model
{
    protected $table = 'commodities';

    protected $fillable = ['commodity'];

    public function subCommodities(): HasMany
    {
        return $this->hasMany(SubCommodities::class);
    }
}

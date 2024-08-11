<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubCommodities extends Model
{
    use HasFactory;

    protected $table = 'sub_commodities';

    protected $fillable = ['subCommodities', 'commodities_id'];

    public function commodities(): BelongsTo
    {
        return $this->belongsTo(Commodities::class);
    }
}

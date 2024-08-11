<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Barangay extends Model
{
    protected $table = 'barangays';

    protected $fillable = ['district_id', 'barangay_name'];

    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }

    use HasFactory;
}

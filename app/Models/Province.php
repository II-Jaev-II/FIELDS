<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Province extends Model
{
    protected $table = 'provinces';

    protected $fillable = ['province_name'];

    public function municipalities(): HasMany
    {
        return $this->hasMany(Municipality::class);
    }

    use HasFactory;
}

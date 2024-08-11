<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaterSourceProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'SWIPHectares',
        'SFRHectares',
        'CISTERNHectares',
        'STWHectares',
        'PISOSHectares',
        'PIPHectares',
        'RPISHectares',
        'SPISHectares',
        'WPISHectares',
        'DDHectares',
        'CDHectares',
        'SDHectares',
        'rainfallHectares',
        'grandHectares',
        'userId',
    ];
}

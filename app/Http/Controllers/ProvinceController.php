<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function getAddressOptions()
    {

        $options = Province::orderBy('province_name')->pluck('province_name', 'id');

        return view('fca-profile', compact('options'));
    }
}

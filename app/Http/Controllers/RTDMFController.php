<?php

namespace App\Http\Controllers;

use App\Models\RTDMFLists;
use Illuminate\Http\Request;

class RTDMFController extends Controller
{
    public function view(Request $request)
    {
        $user = $request->user();

        $rtdmfLists = RTDMFLists::join('commodities', 'rtdmf_lists.commodity', '=', 'commodities.id')
            ->join('provinces', 'rtdmf_lists.province', '=', 'provinces.id')
            ->join('municipalities', 'rtdmf_lists.municipality', '=', 'municipalities.id')
            ->select('rtdmf_lists.*', 'commodities.commodity as commodity_name', 'provinces.province_name', 'municipalities.municipality_name')
            ->get();

        return view('rtdmf/rtdmf-list', [
            'user' => $user,
            'rtdmfLists' => $rtdmfLists,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\AssociationProfile;
use App\Models\BuyerLinkage;
use App\Models\Commodities;
use App\Models\ELinkage;
use Illuminate\Http\Request;

class ELinkageController extends Controller
{
    public function view(Request $request)
    {
        $user = $request->user();

        $associationProfile = AssociationProfile::where('userId', $user->id)->first();

        $ELinkages = BuyerLinkage::join('commodities', 'buyer_e_linkages.commodity', '=', 'commodities.id')
            ->join('sub_commodities', 'buyer_e_linkages.subCommodity', '=', 'sub_commodities.id')
            ->join('users', 'buyer_e_linkages.userId', '=', 'users.id')
            ->join('provinces', 'users.province', '=', 'provinces.id')
            ->join('municipalities', 'users.municipality', '=', 'municipalities.id')
            ->join('barangays', 'users.barangay', '=', 'barangays.id')
            ->select('buyer_e_linkages.*', 'users.*', 'provinces.province_name', 'municipalities.municipality_name', 'barangays.barangay_name', 'commodities.commodity as commodity_name', 'sub_commodities.subCommodities as subCommodity_name')
            ->get();

        $commodityValues = Commodities::all();

        return view('e-linkage/e-linkage', [
            'user' => $user,
            'associationProfile' => $associationProfile,
            'ELinkages' => $ELinkages,
            'commodityValues' => $commodityValues,
        ]);
    }

    public function store(Request $request)
    {
        $user = $request->user();

        foreach ($request->input('associationName') as $key => $associationName) {
            $data = [
                'association' => $associationName,
                'commodity' => $request->input('commodity')[$key],
                'subCommodity' => $request->input('subCommodity')[$key],
                'variety' => $request->input('variety')[$key],
                'volume' => $request->input('volume')[$key],
                'startDate' => $request->input('startDate')[$key],
                'endDate' => $request->input('endDate')[$key],
                'userId' => $user->id,
            ];
            ELinkage::create($data);
        }
        return redirect()->back()->with('success', 'Data saved successfully!');
    }
}

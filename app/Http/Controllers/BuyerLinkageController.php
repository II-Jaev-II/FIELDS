<?php

namespace App\Http\Controllers;

use App\Models\BuyerLinkage;
use App\Models\Commodities;
use App\Models\ELinkage;
use App\Models\User;
use Illuminate\Http\Request;

class BuyerLinkageController extends Controller
{
    public function view(Request $request)
    {
        $user = $request->user();

        $userProfile = User::where('id', $user->id)->first();

        $ELinkages = ELinkage::join('commodities', 'e_linkages.commodity', '=', 'commodities.id')
            ->join('sub_commodities', 'e_linkages.subCommodity', '=', 'sub_commodities.id')
            ->join('president_profiles', 'e_linkages.userId', '=', 'president_profiles.userId')
            ->join('association_profiles', 'e_linkages.userId', '=', 'association_profiles.userId')
            ->select('e_linkages.*', 'president_profiles.*', 'association_profiles.*', 'commodities.commodity as commodity_name', 'sub_commodities.subCommodities as subCommodity_name')
            ->get();


        $commodityValues = Commodities::all();

        return view('buyer/buyer-e-linkage', [
            'user' => $user,
            'userProfile' => $userProfile,
            'ELinkages' => $ELinkages,
            'commodityValues' => $commodityValues,
        ]);
    }

    public function store(Request $request)
    {
        $user = $request->user();

        foreach ($request->input('buyerName') as $key => $name) {
            $data = [
                'name' => $name,
                'commodity' => $request->input('commodity')[$key],
                'subCommodity' => $request->input('subCommodity')[$key],
                'variety' => $request->input('variety')[$key],
                'frequency' => $request->input('frequency')[$key],
                'volume' => $request->input('volume')[$key],
                'userId' => $user->id,
            ];
            BuyerLinkage::create($data);
        }
        return redirect()->back()->with('success', 'Data saved successfully!');
    }
}

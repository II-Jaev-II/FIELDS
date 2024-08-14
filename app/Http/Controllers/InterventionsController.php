<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMachineriesRequest;
use App\Models\AssociationProfile;
use App\Models\EquipmentTypes;
use App\Models\Facilities;
use App\Models\FacilityTypes;
use App\Models\FundingAgencies;
use App\Models\FundSources;
use App\Models\Livestocks;
use App\Models\LivestockValues;
use App\Models\Machineries;
use App\Models\SubCommodities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InterventionsController extends Controller
{
    public function view(Request $request)
    {
        $user = $request->user();

        $associationProfile = AssociationProfile::where('userId', $user->id)->first();

        $equipmentValues = EquipmentTypes::pluck('equipment', 'id');

        $facilityValues = FacilityTypes::pluck('facility', 'id');

        $livestockValues = LivestockValues::pluck('livestock', 'id');

        $agencyValues = FundingAgencies::pluck('agency', 'id');

        $sourceValues = FundSources::pluck('source', 'id');

        return view('interventions/interventions', [
            'user' => $user,
            'associationProfile' => $associationProfile,
            'equipmentValues' => $equipmentValues,
            'agencyValues' => $agencyValues,
            'sourceValues' => $sourceValues,
            'facilityValues' => $facilityValues,
            'livestockValues' => $livestockValues,
        ]);
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $fileFields = [
            'engineNumber' => 'uploads/engine_serialNumber',
            'machineriesMoa' => 'uploads/machineriesMoa',
            'machineriesCoa' => 'uploads/machineriesCertificateOfAcceptance',
            'machineriesGeoTaggedPicture' => 'uploads/machineriesGeoTaggedPicture',
            'machineriesCms' => 'uploads/machineriesCms',
            'facilitiesMoa' => 'uploads/facilitiesMoa',
            'facilitiesCoa' => 'uploads/facilitiesCertificateOfAcceptance',
            'facilitiesGeoTaggedPic' => 'uploads/facilitiesGeoTaggedPicture',
            'facilitiesCms' => 'uploads/facilitiesCms',
            'livestockMoa' => 'uploads/livestockMoa',
            'livestockCoa' => 'uploads/livestockCertificateOfAcceptance',
            'livestockGeoTaggedPic' => 'uploads/livestockGeoTaggedPicture',
            'livestockCms' => 'uploads/livestockCms',
        ];

        $paths = [];

        foreach ($fileFields as $field => $basePath) {
            if ($request->hasFile($field)) {
                $files = $request->file($field);
                foreach ($files as $file) {
                    $extension = $file->getClientOriginalExtension();
                    $filename = time() . '_' . $file->getClientOriginalName();
                    $file->move($basePath, $filename);
                    $paths[$field][] = $basePath . '/' . $filename;
                }
            }
        }

        foreach ($request->input('associationName') as $key => $associationName) {
            $engineNumber = isset($paths['engineNumber'][$key]) ? $paths['engineNumber'][$key] : null;
            $moa = isset($paths['machineriesMoa'][$key]) ? $paths['machineriesMoa'][$key] : null;
            $certificateOfAcceptance = isset($paths['machineriesCoa'][$key]) ? $paths['machineriesCoa'][$key] : null;
            $geoTaggedPicture = isset($paths['machineriesGeoTaggedPicture'][$key]) ? $paths['machineriesGeoTaggedPicture'][$key] : null;
            $cms = isset($paths['machineriesCms'][$key]) ? $paths['machineriesCms'][$key] : null;

            $data = [
                'association' => $associationName,
                'intervention' => $request->input('intervention')[$key],
                'specification' => $request->input('specification')[$key],
                'amount' => $request->input('machineAmount')[$key],
                'status' => $request->input('serviceTypes')[$key],
                'fundingAgency' => $request->input('fundingAgency')[$key],
                'fundSource' => $request->input('fundSource')[$key],
                'engineNumber' => $engineNumber,
                'moa' => $moa,
                'certificateOfAcceptance' => $certificateOfAcceptance,
                'geoTaggedPicture' => $geoTaggedPicture,
                'cms' => $cms,
                'userId' => $user->id,
            ];
            Machineries::create($data);
        }

        foreach ($request->input('facilitiesAssociationName') as $key => $associationName) {
            $moa = isset($paths['facilitiesMoa'][$key]) ? $paths['facilitiesMoa'][$key] : null;
            $certificateOfAcceptance = isset($paths['facilitiesCoa'][$key]) ? $paths['facilitiesCoa'][$key] : null;
            $geoTaggedPicture = isset($paths['facilitiesGeoTaggedPic'][$key]) ? $paths['facilitiesGeoTaggedPic'][$key] : null;
            $cms = isset($paths['facilitiesCms'][$key]) ? $paths['facilitiesCms'][$key] : null;

            $data = [
                'association' => $associationName,
                'intervention' => $request->input('facilitiesInterventions')[$key],
                'specification' => $request->input('facilitiesSpecification')[$key],
                'amount' => $request->input('facilitiesMachineAmounts')[$key],
                'status' => $request->input('facilitiesServiceTypes')[$key],
                'fundingAgency' => $request->input('facilitiesFundingAgency')[$key],
                'fundSource' => $request->input('facilitiesFundSource')[$key],
                'moa' => $moa,
                'certificateOfAcceptance' => $certificateOfAcceptance,
                'geoTaggedPicture' => $geoTaggedPicture,
                'cms' => $cms,
                'userId' => $user->id,
            ];
            Facilities::create($data);
        }

        foreach ($request->input('livestockAssociationName') as $key => $associationName) {
            $moa = isset($paths['livestockMoa'][$key]) ? $paths['livestockMoa'][$key] : null;
            $certificateOfAcceptance = isset($paths['livestockCoa'][$key]) ? $paths['livestockCoa'][$key] : null;
            $geoTaggedPicture = isset($paths['livestockGeoTaggedPic'][$key]) ? $paths['livestockGeoTaggedPic'][$key] : null;
            $cms = isset($paths['livestockCms'][$key]) ? $paths['livestockCms'][$key] : null;

            $data = [
                'association' => $associationName,
                'intervention' => $request->input('livestockInterventions')[$key],
                'specification' => $request->input('livestockSpecification')[$key],
                'amount' => $request->input('livestockMachineAmounts')[$key],
                'status' => $request->input('livestockServiceTypes')[$key],
                'fundingAgency' => $request->input('livestockFundingAgency')[$key],
                'fundSource' => $request->input('livestockFundSource')[$key],
                'moa' => $moa,
                'certificateOfAcceptance' => $certificateOfAcceptance,
                'geoTaggedPicture' => $geoTaggedPicture,
                'cms' => $cms,
                'userId' => $user->id,
            ];
            Livestocks::create($data);
        }

        return redirect()->back()->with('success', 'Data saved successfully!');
    }
}

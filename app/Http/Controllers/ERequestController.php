<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreERequest;
use App\Http\Requests\UpdateERequest;
use App\Models\AgriculturalTypes;
use App\Models\AnimalTypes;
use App\Models\AssociationProfile;
use App\Models\EquipmentValues;
use App\Models\ERequest;
use App\Models\ERequestType;
use App\Models\FacilityValues;
use App\Models\MachineryTypes;
use App\Models\MemberProfile;
use App\Models\PresidentProfile;
use App\Models\RequestHistories;
use App\Models\ToolTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ERequestController extends Controller
{
    public function show(Request $request)
    {
        $user = $request->user();

        $associationProfile = AssociationProfile::join('provinces', 'association_profiles.province', '=', 'provinces.id')
            ->where('association_profiles.userId', $user->id)
            ->first(['association_profiles.*', 'provinces.province_name']);

        $presidentProfile = PresidentProfile::join('provinces', 'president_profiles.province', '=', 'provinces.id')
            ->join('municipalities', 'president_profiles.municipality', '=', 'municipalities.id')
            ->join('districts', 'municipalities.id', '=', 'districts.municipality_id')
            ->join('barangays', 'president_profiles.barangay', '=', 'barangays.id')
            ->where('president_profiles.userId', $user->id)
            ->first(['president_profiles.*', 'provinces.province_name', 'municipalities.municipality_name', 'districts.district_name', 'barangays.barangay_name']);

        $memberProfile = MemberProfile::where('userId', $user->id)->first();

        $machineryValues = MachineryTypes::pluck('machinery_type', 'machinery_type');

        $facilityValues = FacilityValues::pluck('facilityTypes', 'facilityTypes');

        $toolValues = ToolTypes::pluck('toolTypes', 'toolTypes');

        $equipmentValues = EquipmentValues::pluck('equipmentTypes', 'equipmentTypes');

        $agriculturalValues = AgriculturalTypes::pluck('agriculturalTypes', 'agriculturalTypes');

        $animalValues = AnimalTypes::pluck('animalTypes', 'animalTypes');

        return view('e-request/e-request', [
            'user' => $user,
            'associationProfile' => $associationProfile,
            'presidentProfile' => $presidentProfile,
            'memberProfile' => $memberProfile,
            'machineryValues' => $machineryValues,
            'facilityValues' => $facilityValues,
            'toolValues' => $toolValues,
            'equipmentValues' => $equipmentValues,
            'agriculturalValues' => $agriculturalValues,
            'animalValues' => $animalValues,
        ]);
    }

    public function list(Request $request)
    {
        $user = $request->user();

        $ERequests = ERequest::join('e_request_types', 'e_requests.referenceNumber', '=', 'e_request_types.referenceNumber')
            ->where('e_requests.userId', $user->id)
            ->get();

        return view('e-request-view/e-request-list', [
            'user' => $user,
            'ERequests' => $ERequests,
        ]);
    }

    public function view($referenceNumber, Request $request)
    {
        $user = $request->user();

        $associationProfile = AssociationProfile::where('userId', $user->id)->first();

        $presidentProfile = PresidentProfile::join('provinces', 'president_profiles.province', '=', 'provinces.id')
            ->join('municipalities', 'president_profiles.municipality', '=', 'municipalities.id')
            ->join('districts', 'municipalities.id', '=', 'districts.municipality_id')
            ->join('barangays', 'president_profiles.barangay', '=', 'barangays.id')
            ->where('president_profiles.userId', $user->id)
            ->first(['president_profiles.*', 'provinces.province_name', 'municipalities.municipality_name', 'districts.district_name', 'barangays.barangay_name']);

        $memberProfile = MemberProfile::where('userId', $user->id)->first();

        $ERequest = ERequest::where('referenceNumber', $referenceNumber)
            ->first();

        $RequestHistories = RequestHistories::where('referenceNumber', $referenceNumber)
            ->get();

        return view('e-request-view/e-request-view', [
            'user' => $user,
            'associationProfile' => $associationProfile,
            'presidentProfile' => $presidentProfile,
            'memberProfile' => $memberProfile,
            'ERequest' => $ERequest,
            'RequestHistories' => $RequestHistories,
        ]);
    }

    public function edit($referenceNumber, Request $request)
    {
        $user = $request->user();

        $associationProfile = AssociationProfile::join('provinces', 'association_profiles.province', '=', 'provinces.id')
            ->where('association_profiles.userId', $user->id)
            ->first(['association_profiles.*', 'provinces.province_name']);

        $presidentProfile = PresidentProfile::join('provinces', 'president_profiles.province', '=', 'provinces.id')
            ->join('municipalities', 'president_profiles.municipality', '=', 'municipalities.id')
            ->join('districts', 'municipalities.id', '=', 'districts.municipality_id')
            ->join('barangays', 'president_profiles.barangay', '=', 'barangays.id')
            ->where('president_profiles.userId', $user->id)
            ->first(['president_profiles.*', 'provinces.province_name', 'municipalities.municipality_name', 'districts.district_name', 'barangays.barangay_name']);

        $memberProfile = MemberProfile::where('userId', $user->id)->first();

        $ERequest = ERequest::where('referenceNumber', $referenceNumber)->first();

        return view('e-request-edit/e-request-edit', [
            'user' => $user,
            'associationProfile' => $associationProfile,
            'presidentProfile' => $presidentProfile,
            'memberProfile' => $memberProfile,
            'ERequest' => $ERequest,
        ]);
    }

    public function store(StoreERequest $request)
    {
        $user = Auth::user();

        $request->validated();

        $fileFields = [
            'letterIntent' => 'uploads/letterOfIntent',
            'animalLetterIntent' => 'uploads/letterOfIntent',
            'boardResolution' => 'uploads/boardResolution',
            'endorsementLetter' => 'uploads/endorsementLetter1',
            'endorsementLetter2' => 'uploads/endorsementLetter2',
            'animalEndorsementLetter2' => 'uploads/endorsementLetter2',
            'certificateAvailability' => 'uploads/certificateOfAvailability',
            'machineriesProposal' => 'uploads/machineriesProposal',
            'geoTaggedHousing' => 'uploads/geoTaggedPhotos',
            'geoTaggedForage' => 'uploads/geoTaggedLocation',
            'geoTaggedPhotos' => 'uploads/geoTaggedPhotos',
            'geoTaggedLocation' => 'uploads/geoTaggedLocation',
            'businessPlan' => 'uploads/businessPlan',
            'productionManagementPlan' => 'uploads/productionManagementPlan',
            'usufruct' => 'uploads/usufruct',
        ];

        $paths = [];
        foreach ($fileFields as $field => $basePath) {
            if ($request->has($field)) {
                $file = $request->file($field);
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move($basePath, $filename);
                $paths[$field] = $basePath . '/' . $filename;
            }
        }

        $associationName = $request->input('associationName');
        $firstLetters = collect(explode(' ', $associationName))->map(fn ($word) => strtoupper(substr($word, 0, 1)))->implode('');

        $optionMapping = [
            'Machinery' => $request->machineryType,
            'Facility' => $request->facilityType,
            'Tools' => $request->toolType,
            'Equipments' => $request->equipmentType,
            'Agricultural' => $request->agriculturalType,
            'Animals' => $request->animalType,
            'Others' => $request->othersType,
        ];

        $selectedOption = $request->input('selectedOption');
        $selectedValues = $optionMapping[$selectedOption] ?? [];

        foreach ($selectedValues as $value) {
            if (!is_null($value)) {
                $randomNumber = rand(1000, 9999);
                $referenceNumber = $firstLetters . '-' . $randomNumber;

                ERequestType::create([
                    'requestType' => $value,
                    'association' => $associationName,
                    'referenceNumber' => $referenceNumber,
                    'name' => $request->input('representativeName'),
                    'address' => $request->input('presidentAddress'),
                    'houseNumber' => $request->input('presidentHouseNumber') ?? null,
                    'street' => $request->input('presidentStreetName') ?? null,
                    'office' => $request->input('officeRadio'),
                    'contactNumber' => $request->input('contactNumber'),
                    'emailAddress' => $request->input('emailAddress'),
                    'birthDate' => $request->input('birthdate'),
                    'maleCount' => $request->input('maleCount'),
                    'femaleCount' => $request->input('femaleCount'),
                    'serviceArea' => $request->input('serviceArea'),
                    'userId' => $user->id,
                ]);

                $natureOfRequest = $request->input('request-radioButton');

                if ($natureOfRequest === "Animals") {
                    ERequest::create([
                        'referenceNumber' => $referenceNumber,
                        'province' => $request->input('province'),
                        'natureOfRequest' => $request->input('request-radioButton', ''),
                        'letterOfIntent' => $paths['animalLetterIntent'] ?? null,
                        'endorsementLetter2' => $paths['animalEndorsementLetter2'] ?? null,
                        'geoTaggedPhotos' => $paths['geoTaggedHousing'] ?? null,
                        'geoTaggedLocation' => $paths['geoTaggedForage'] ?? null,
                        'productionManagementPlan' => $paths['productionManagementPlan'] ?? null,
                        'requestStatus' => 'Pending',
                        'userId' => $user->id,
                    ]);
                } else {
                    ERequest::create([
                        'referenceNumber' => $referenceNumber,
                        'province' => $request->input('province'),
                        'natureOfRequest' => $request->input('request-radioButton', ''),
                        'letterOfIntent' => $paths['letterIntent'] ?? null,
                        'boardResolution' => $paths['boardResolution'] ?? null,
                        'endorsementLetter1' => $paths['endorsementLetter'] ?? null,
                        'endorsementLetter2' => $paths['endorsementLetter2'] ?? null,
                        'certificateOfAvailability' => $paths['certificateAvailability'] ?? null,
                        'machineriesProposal' => $paths['machineriesProposal'] ?? null,
                        'geoTaggedPhotos' => $paths['geoTaggedPhotos'] ?? null,
                        'geoTaggedLocation' => $paths['geoTaggedLocation'] ?? null,
                        'businessPlan' => $paths['businessPlan'] ?? null,
                        'usufruct' => $paths['usufruct'] ?? null,
                        'requestStatus' => 'Pending',
                        'userId' => $user->id,
                    ]);
                }
            }
        }

        return redirect()->back()->with('success', 'Requests created successfully!');
    }

    public function update($referenceNumber, UpdateERequest $request)
    {
        $user = Auth::user();

        $validatedRequest = $request->validated();

        $eRequest = ERequest::where('referenceNumber', $referenceNumber)->firstOrFail();

        $natureOfRequest = $eRequest->natureOfRequest;

        $fileFields = [
            'letterIntent' => 'uploads/letterOfIntent',
            'animalLetterIntent' => 'uploads/letterOfIntent',
            'boardResolution' => 'uploads/boardResolution',
            'endorsementLetter' => 'uploads/endorsementLetter1',
            'endorsementLetter2' => 'uploads/endorsementLetter2',
            'animalEndorsementLetter2' => 'uploads/endorsementLetter2',
            'certificateAvailability' => 'uploads/certificateOfAvailability',
            'machineriesProposal' => 'uploads/machineriesProposal',
            'geoTaggedHousing' => 'uploads/geoTaggedPhotos',
            'geoTaggedForage' => 'uploads/geoTaggedLocation',
            'geoTaggedPhotos' => 'uploads/geoTaggedPhotos',
            'geoTaggedLocation' => 'uploads/geoTaggedLocation',
            'businessPlan' => 'uploads/businessPlan',
            'productionManagementPlan' => 'uploads/productionManagementPlan',
            'usufruct' => 'uploads/usufruct',
        ];

        $paths = [];

        foreach ($fileFields as $field => $basePath) {
            if ($request->has($field)) {
                $file = $request->file($field);
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move($basePath, $filename);

                $paths[$field] = $basePath . '/' . $filename;
            }
        }

        if ($natureOfRequest === "Animals") {
            ERequest::where('referenceNumber', $referenceNumber)->update([
                'letterOfIntent' => $paths['animalLetterIntent'] ?? null,
                'endorsementLetter2' => $paths['animalEndorsementLetter2'] ?? null,
                'geoTaggedPhotos' => $paths['geoTaggedHousing'] ?? null,
                'geoTaggedLocation' => $paths['geoTaggedForage'] ?? null,
                'productionManagementPlan' => $paths['productionManagementPlan'] ?? null,
                'userId' => $user->id,
            ]);
        } else {
            ERequest::where('referenceNumber', $referenceNumber)->update([
                'letterOfIntent' => $paths['letterIntent'] ?? null,
                'boardResolution' => $paths['boardResolution'] ?? null,
                'endorsementLetter1' => $paths['endorsementLetter'] ?? null,
                'endorsementLetter2' => $paths['endorsementLetter2'] ?? null,
                'certificateOfAvailability' => $paths['certificateAvailability'] ?? null,
                'machineriesProposal' => $paths['machineriesProposal'] ?? null,
                'geoTaggedPhotos' => $paths['geoTaggedPhotos'] ?? null,
                'geoTaggedLocation' => $paths['geoTaggedLocation'] ?? null,
                'businessPlan' => $paths['businessPlan'] ?? null,
                'usufruct' => $paths['usufruct'] ?? null,
                'userId' => $user->id,
            ]);
        }

        return redirect()
            ->route('e-request.view', ['referenceNumber' => $referenceNumber])
            ->with('success', 'Request updated successfuly!');
    }
}

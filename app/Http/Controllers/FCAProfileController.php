<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFCAProfileRequest;
use App\Models\AssociationProfile;
use App\Models\AttendedTrainings;
use App\Models\MemberProfile;
use App\Models\PresidentProfile;
use App\Models\Province;
use App\Models\TrainingNeeds;
use App\Models\TrainingTypes;
use App\Models\WaterSourceProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class FCAProfileController extends Controller
{
    public function show(Request $request): View
    {
        $user = $request->user();

        $associationProfile = AssociationProfile::join('provinces', 'association_profiles.province', '=', 'provinces.id')
            ->join('municipalities', 'association_profiles.municipality', '=', 'municipalities.id')
            ->join('districts', 'municipalities.id', '=', 'districts.municipality_id')
            ->join('barangays', 'association_profiles.barangay', '=', 'barangays.id')
            ->where('association_profiles.userId', $user->id)
            ->first(['association_profiles.*', 'provinces.province_name', 'municipalities.municipality_name', 'districts.district_name', 'barangays.barangay_name', 'association_profiles.registrationCertificate', 'association_profiles.goodStandingCertificate', 'association_profiles.approvedByLaws', 'association_profiles.latestAuditedFinancialStatement']);

        $presidentProfile = PresidentProfile::join('provinces', 'president_profiles.province', '=', 'provinces.id')
            ->join('municipalities', 'president_profiles.municipality', '=', 'municipalities.id')
            ->join('districts', 'municipalities.id', '=', 'districts.municipality_id')
            ->join('barangays', 'president_profiles.barangay', '=', 'barangays.id')
            ->where('president_profiles.userId', $user->id)
            ->first(['president_profiles.*', 'provinces.province_name', 'municipalities.municipality_name', 'districts.district_name', 'barangays.barangay_name']);

        $memberProfile = MemberProfile::where('userId', $user->id)->first();

        $waterProfile = WaterSourceProfile::where('userId', $user->id)->first();

        $attendances = AttendedTrainings::join('training_types', 'attended_trainings.trainingsAttended', '=', 'training_types.id')
            ->where('userId', $user->id)
            ->get();

        $trainingTypes = TrainingTypes::pluck('trainingTypes', 'id');

        $trainingNeeds = TrainingNeeds::where('userId', $user->id)->get();

        $needs = [];

        $provinceValues = Province::all();

        foreach ($trainingNeeds as $need) {
            $ids = explode(',', $need->trainingNeeds);
            $trainingTypes = DB::table('training_types')
                ->whereIn('id', $ids)
                ->pluck('trainingTypes');

            $needs[] = [
                'need' => $need,
                'trainingTypes' => $trainingTypes
            ];
        }

        return view('fca-profile/fca-profile', [
            'user' => $user,
            'associationProfile' => $associationProfile,
            'attendances' => $attendances,
            'presidentProfile' => $presidentProfile,
            'memberProfile' => $memberProfile,
            'waterProfile' => $waterProfile,
            'trainingTypes' => $trainingTypes,
            'needs' => $needs,
            'provinceValues' => $provinceValues,
        ]);
    }

    public function edit(Request $request): View
    {
        $user = $request->user();

        $associationProfile = AssociationProfile::where('userId', $user->id)->first();

        $presidentProfile = PresidentProfile::where('userId', $user->id)->first();

        $memberProfile = MemberProfile::where('userId', $user->id)->first();

        $waterProfile = WaterSourceProfile::where('userId', $user->id)->first();

        $attendances = AttendedTrainings::where('userId', $user->id)->get();

        $trainingTypes = TrainingTypes::pluck('trainingTypes', 'id');

        $trainingNeeds = TrainingNeeds::where('userId', $user->id)->get();

        $needs = [];

        $provinceValues = Province::all();

        foreach ($trainingNeeds as $need) {
            $ids = explode(',', $need->trainingNeeds);
            $trainingTypes = TrainingTypes::pluck('trainingTypes', 'id');

            $needs[] = [
                'need' => $need,
                'trainingTypes' => $trainingTypes
            ];
        }

        return view('fca-profile-edit/fca-profile-edit', [
            'user' => $user,
            'associationProfile' => $associationProfile,
            'attendances' => $attendances,
            'presidentProfile' => $presidentProfile,
            'memberProfile' => $memberProfile,
            'waterProfile' => $waterProfile,
            'trainingTypes' => $trainingTypes,
            'needs' => $needs,
            'provinceValues' => $provinceValues,
        ]);
    }

    public function store(StoreFCAProfileRequest $request)
    {
        $user = Auth::user();

        $request->validated();

        $fileFields = [
            'certificateOfRegistration' => 'uploads/CertificateOfRegistration',
            'certificateOfGoodStanding' => 'uploads/certificateGoodStanding',
            'lawsFile' => 'uploads/lawsFile',
            'latestFinancialStatement' => 'uploads/latestFinancialStatement',
            'positionIdPresident' => 'uploads/PresidentID',
            'positionIdChairman' => 'uploads/ChairmanID',
            'positionIdManager' => 'uploads/ManagerID',
            'farmerProfile' => 'uploads/FarmerProfile',
        ];

        $paths = [];

        $positionIdPath = null;
        if ($request->has('positionRadio')) {
            $position = $request->get('positionRadio');
            $positionIdPath = $paths['positionId' . $position] ?? null;
        }

        foreach ($fileFields as $field => $basePath) {
            if ($request->has($field)) {
                $file = $request->file($field);
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move($basePath, $filename);

                $paths[$field] = $basePath . '/' . $filename;
            }
        }

        if (!empty($request->trainingsAttended)) {
            foreach ($request->trainingsAttended as $key => $trainings) {
                if (is_null($trainings) || is_null($request->trainingConductor[$key]) || is_null($request->yearAttended[$key])) {
                    continue;
                }

                $input['trainingsAttended'] = $trainings;
                $input['trainingConductor'] = $request->trainingConductor[$key];
                $input['yearAttended'] = $request->yearAttended[$key];
                $input['userId'] = auth()->user()->id;

                AttendedTrainings::create($input);
            }
        }

        AssociationProfile::create([
            'association' => $request->get('associationName', ''),
            'province' => $request->get('associationProvince', ''),
            'municipality' => $request->get('associationMunicipality', ''),
            'district' => $request->get('associationDistrict', ''),
            'barangay' => $request->get('associationBarangay', ''),
            'houseNumber' => $request->get('houseNumber', ''),
            'street' => $request->get('streetName', ''),
            'zipCode' => $request->get('zipCode', ''),
            'office' => $request->get('officeRadio', ''),
            'email' => $request->get('emailAddress', ''),
            'registrationNumber' => $request->get('registrationNumber', ''),
            'registrationDate' => $request->get('registrationDate', ''),
            'expirationDate' => $request->get('expirationDate', ''),
            'registrationCertificate' => $paths['certificateOfRegistration'] ?? null,
            'goodStandingCertificate' => $paths['certificateOfGoodStanding'] ?? null,
            'approvedByLaws' => $paths['lawsFile'] ?? null,
            'latestAuditedFinancialStatement' => $paths['latestFinancialStatement'] ?? null,
            'userId' => $user->id,
        ]);

        PresidentProfile::create([
            'firstName' => $request->get('firstName', ''),
            'middleName' => $request->get('middleName', ''),
            'lastName' => $request->get('lastName', ''),
            'suffix' => $request->get('suffix', ''),
            'province' => $request->get('presidentProvince', ''),
            'municipality' => $request->get('presidentMunicipality', ''),
            'district' => $request->get('presidentDistrict', ''),
            'barangay' => $request->get('presidentBarangay', ''),
            'houseNumber' => $request->get('presidentHouseNumber', ''),
            'street' => $request->get('presidentStreetName', ''),
            'zipCode' => $request->get('presidentZipCode', ''),
            'position' => $request->get('positionRadio', ''),
            'presidentId' => $paths['positionIdPresident'] ?? $paths['positionIdChairman'] ?? $paths['positionIdManager'] ?? null,
            'contactNumber' => $request->get('contactNumber', ''),
            'birthDate' => $request->get('birthDate', ''),
            'userId' => $user->id,
        ]);

        MemberProfile::create([
            'maleCount' => $request->get('maleCount', ''),
            'femaleCount' => $request->get('femaleCount', ''),
            'totalCount' => $request->get('totalCount', ''),
            'serviceArea' => $request->get('serviceArea', ''),
            'farmerProfile' => $paths['farmerProfile'] ?? null,
            'userId' => $user->id,
        ]);

        WaterSourceProfile::create([
            'SWIPHectares' => $request->get('swipHectares', null),
            'SFRHectares' => $request->get('sfrHectares', null),
            'CISTERNHectares' => $request->get('cisternHectares', null),
            'STWHectares' => $request->get('stwHectares', null),
            'PISOSHectares' => $request->get('pisosHectares', null),
            'PIPHectares' => $request->get('pipHectares', null),
            'RPISHectares' => $request->get('rpisHectares', null),
            'SPISHectares' => $request->get('spisHectares', null),
            'WPISHectares' => $request->get('wpisHectares', null),
            'DDHectares' => $request->get('ddHectares', null),
            'CDHectares' => $request->get('cdHectares', null),
            'SDHectares' => $request->get('sdHectares', null),
            'rainfallHectares' => $request->get('rainfallHectares', null),
            'grandHectares' => $request->get('grandTotalHectares', null),
            'userId' => $user->id,
        ]);

        $trainingNeeds = $request->input('trainingNeeds');
        if (is_null($trainingNeeds) || empty($trainingNeeds)) {
            $trainingNeedsString = '';
        } else {
            $trainingNeedsString = implode(',', $trainingNeeds);
        }

        TrainingNeeds::create([
            'trainingNeeds' => $trainingNeedsString,
            'userId' => $user->id,
        ]);

        return redirect()->back()->with('success', 'FCA Profile created succesfully!');
    }

    public function update(StoreFCAProfileRequest $request)
    {
        $user = Auth::user();

        $request->validated();

        $fileFields = [
            'certificateOfRegistration' => 'uploads/CertificateOfRegistration',
            'certificateOfGoodStanding' => 'uploads/certificateGoodStanding',
            'lawsFile' => 'uploads/lawsFile',
            'latestFinancialStatement' => 'uploads/latestFinancialStatement',
            'positionIdPresident' => 'uploads/PresidentID',
            'positionIdChairman' => 'uploads/ChairmanID',
            'positionIdManager' => 'uploads/ManagerID',
            'farmerProfile' => 'uploads/FarmerProfile',
        ];

        $paths = [];

        $positionIdPath = null;
        if ($request->has('positionRadio')) {
            $position = $request->get('positionRadio');
            $positionIdPath = $paths['positionId' . $position] ?? null;
        }

        foreach ($fileFields as $field => $basePath) {
            if ($request->has($field)) {
                $file = $request->file($field);
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move($basePath, $filename);

                $paths[$field] = $basePath . '/' . $filename;
            }
        }

        if (!empty($request->trainingsAttended)) {
            foreach ($request->trainingsAttended as $key => $trainings) {
                if (is_null($trainings) || is_null($request->trainingConductor[$key]) || is_null($request->yearAttended[$key])) {
                    continue;
                }

                $input['trainingsAttended'] = $trainings;
                $input['trainingConductor'] = $request->trainingConductor[$key];
                $input['yearAttended'] = $request->yearAttended[$key];
                $input['userId'] = auth()->user()->id;

                AttendedTrainings::create($input);
            }
        }

        AssociationProfile::where('userId', $user->id)->update([
            'association' => $request->get('associationName', ''),
            'province' => $request->get('associationProvince', ''),
            'municipality' => $request->get('associationMunicipality', ''),
            'district' => $request->get('associationDistrict', ''),
            'barangay' => $request->get('associationBarangay', ''),
            'houseNumber' => $request->get('houseNumber', ''),
            'street' => $request->get('streetName', ''),
            'zipCode' => $request->get('zipCode', ''),
            'office' => $request->get('officeRadio', ''),
            'email' => $request->get('emailAddress', ''),
            'registrationNumber' => $request->get('registrationNumber', ''),
            'registrationDate' => $request->get('registrationDate', ''),
            'expirationDate' => $request->get('expirationDate', ''),
            'registrationCertificate' => $paths['certificateOfRegistration'] ?? null,
            'goodStandingCertificate' => $paths['certificateOfGoodStanding'] ?? null,
            'approvedByLaws' => $paths['lawsFile'] ?? null,
            'latestAuditedFinancialStatement' => $paths['latestFinancialStatement'] ?? null,
            'userId' => $user->id,
        ]);

        PresidentProfile::where('userId', $user->id)->update([
            'firstName' => $request->get('firstName', ''),
            'middleName' => $request->get('middleName', ''),
            'lastName' => $request->get('lastName', ''),
            'suffix' => $request->get('suffix', ''),
            'province' => $request->get('presidentProvince', ''),
            'municipality' => $request->get('presidentMunicipality', ''),
            'district' => $request->get('presidentDistrict', ''),
            'barangay' => $request->get('presidentBarangay', ''),
            'houseNumber' => $request->get('presidentHouseNumber', ''),
            'street' => $request->get('presidentStreetName', ''),
            'zipCode' => $request->get('presidentZipCode', ''),
            'position' => $request->get('positionRadio', ''),
            'presidentId' => $paths['positionIdPresident'] ?? $paths['positionIdChairman'] ?? $paths['positionIdManager'] ?? null,
            'contactNumber' => $request->get('contactNumber', ''),
            'birthDate' => $request->get('birthDate', ''),
            'userId' => $user->id,
        ]);

        MemberProfile::where('userId', $user->id)->update([
            'maleCount' => $request->get('maleCount', ''),
            'femaleCount' => $request->get('femaleCount', ''),
            'totalCount' => $request->get('totalCount', ''),
            'serviceArea' => $request->get('serviceArea', ''),
            'farmerProfile' => $paths['farmerProfile'] ?? null,
            'userId' => $user->id,
        ]);

        WaterSourceProfile::where('userId', $user->id)->update([
            'SWIPHectares' => $request->get('swipHectares', null),
            'SFRHectares' => $request->get('sfrHectares', null),
            'CISTERNHectares' => $request->get('cisternHectares', null),
            'STWHectares' => $request->get('stwHectares', null),
            'PISOSHectares' => $request->get('pisosHectares', null),
            'PIPHectares' => $request->get('pipHectares', null),
            'RPISHectares' => $request->get('rpisHectares', null),
            'SPISHectares' => $request->get('spisHectares', null),
            'WPISHectares' => $request->get('wpisHectares', null),
            'DDHectares' => $request->get('ddHectares', null),
            'CDHectares' => $request->get('cdHectares', null),
            'SDHectares' => $request->get('sdHectares', null),
            'rainfallHectares' => $request->get('rainfallHectares', null),
            'grandHectares' => $request->get('grandTotalHectares', null),
            'userId' => $user->id,
        ]);

        $trainingNeeds = $request->input('trainingNeeds');
        if (is_null($trainingNeeds) || empty($trainingNeeds)) {
            $trainingNeedsString = '';
        } else {
            $trainingNeedsString = implode(',', $trainingNeeds);
        }

        TrainingNeeds::where('userId', $user->id)->update([
            'trainingNeeds' => $trainingNeedsString,
            'userId' => $user->id,
        ]);

        return redirect()->route('fca.view')->with('updated', 'FCA Profile updated successfully!');
    }
}

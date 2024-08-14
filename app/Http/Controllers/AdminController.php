<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRTDMFRequest;
use App\Models\AssociationProfile;
use App\Models\AttendedTrainings;
use App\Models\Commodities;
use App\Models\CSOAccreditation;
use App\Models\ELinkage;
use App\Models\ERequest;
use App\Models\Facilities;
use App\Models\Livestocks;
use App\Models\Machineries;
use App\Models\MemberProfile;
use App\Models\MLGUAccreditation;
use App\Models\PLGUAccreditation;
use App\Models\PresidentProfile;
use App\Models\Province;
use App\Models\RCEFAccreditation;
use App\Models\RSBSADetails;
use App\Models\RTDMFLists;
use App\Models\TrainingNeeds;
use App\Models\TrainingTypes;
use App\Models\User;
use App\Models\WaterSourceProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function list(Request $request)
    {
        $user = $request->user();

        $userTypes = ['FCA', 'BUYER', 'MLGU', 'PLGU'];
        $users = User::whereIn('userType', $userTypes)
            ->where('authorizedUser', 'yes') // Add this condition
            ->get();

        return view('admin/user-management/user-management', [
            'user' => $user,
            'users' => $users,
        ]);
    }

    public function fcaView($id)
    {
        $userProfile = User::where('users.id', $id)
            ->join('provinces', 'users.province', '=', 'provinces.id')
            ->join('municipalities', 'users.municipality', '=', 'municipalities.id')
            ->join('barangays', 'users.barangay', '=', 'barangays.id')
            ->select('users.*', 'provinces.province_name', 'municipalities.municipality_name', 'barangays.barangay_name')
            ->first();

        $userProfile->formattedBirthDate = Date::parse($userProfile->birthDate)->format('F d, Y');

        $associationProfile = AssociationProfile::join('provinces', 'association_profiles.province', '=', 'provinces.id')
            ->join('municipalities', 'association_profiles.municipality', '=', 'municipalities.id')
            ->join('districts', 'municipalities.id', '=', 'districts.municipality_id')
            ->join('barangays', 'association_profiles.barangay', '=', 'barangays.id')
            ->where('association_profiles.userId', $id)
            ->first(['association_profiles.*', 'provinces.province_name', 'municipalities.municipality_name', 'districts.district_name', 'barangays.barangay_name', 'association_profiles.registrationCertificate', 'association_profiles.goodStandingCertificate', 'association_profiles.approvedByLaws', 'association_profiles.latestAuditedFinancialStatement']);

        $presidentProfile = PresidentProfile::join('provinces', 'president_profiles.province', '=', 'provinces.id')
            ->join('municipalities', 'president_profiles.municipality', '=', 'municipalities.id')
            ->join('districts', 'municipalities.id', '=', 'districts.municipality_id')
            ->join('barangays', 'president_profiles.barangay', '=', 'barangays.id')
            ->where('president_profiles.userId', $id)
            ->first(['president_profiles.*', 'provinces.province_name', 'municipalities.municipality_name', 'districts.district_name', 'barangays.barangay_name']);

        $memberProfile = MemberProfile::where('userId', $id)->first();

        $waterProfile = WaterSourceProfile::where('userId', $id)->first();

        $attendances = AttendedTrainings::join('training_types', 'attended_trainings.trainingsAttended', '=', 'training_types.id')
            ->where('userId', $id)
            ->get();

        $trainingTypes = TrainingTypes::pluck('trainingTypes', 'id');

        $trainingNeeds = TrainingNeeds::where('userId', $id)->get();

        $needs = [];

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

        return view('admin/user-management/fca-profile/fca-profile', [
            'id' => $id,
            'associationProfile' => $associationProfile,
            'presidentProfile' => $presidentProfile,
            'attendances' => $attendances,
            'needs' => $needs,
            'memberProfile' => $memberProfile,
            'waterProfile' => $waterProfile,
        ]);
    }

    public function rsbsaView($id)
    {
        $rsbsaDetails = RSBSADetails::where('userId', $id)->get();

        return view('admin/user-management/rsbsa-details/rsbsa', [
            'id' => $id,
            'rsbsaDetails' => $rsbsaDetails,
        ]);
    }

    public function eRequestView($id)
    {
        $ERequests = ERequest::join('e_request_types', 'e_requests.referenceNumber', '=', 'e_request_types.referenceNumber')
            ->where('e_requests.userId', $id)
            ->get();

        return view('admin/user-management/e-request/e-request-list', [
            'id' => $id,
            'ERequests' => $ERequests,
        ]);
    }

    public function accreditationView($id)
    {
        $csoAccreditation = CSOAccreditation::where('userId', $id)->first();

        $rcefAccreditation = RCEFAccreditation::where('userId', $id)->first();

        $mlguAccreditation = MLGUAccreditation::where('userId', $id)->first();

        $plguAccreditation = PLGUAccreditation::where('userId', $id)->first();

        return view('admin/user-management/accreditations/accreditations', [
            'id' => $id,
            'csoAccreditation' => $csoAccreditation,
            'rcefAccreditation' => $rcefAccreditation,
            'mlguAccreditation' => $mlguAccreditation,
            'plguAccreditation' => $plguAccreditation,
        ]);
    }

    public function eLinkageView($id)
    {
        $eLinkages = ELinkage::join('commodities', 'e_linkages.commodity', '=', 'commodities.id')
            ->join('sub_commodities', 'e_linkages.subCommodity', '=', 'sub_commodities.id')
            ->select('e_linkages.*', 'commodities.commodity as commodity_name', 'sub_commodities.subCommodities as subCommodity_name')
            ->where('userId', $id)
            ->get();

        return view('admin/user-management/e-linkage/e-linkage', [
            'id' => $id,
            'eLinkages' => $eLinkages,
        ]);
    }

    public function interventionView($id)
    {
        $interventions = Machineries::join('machinery_types', 'machineries.intervention', '=', 'machinery_types.id')
            ->join('funding_agencies', 'machineries.fundingAgency', '=', 'funding_agencies.id')
            ->join('fund_sources', 'machineries.fundSource', '=', 'fund_sources.id')
            ->select('machineries.*', 'machinery_types.machinery_type as machinery_name', 'funding_agencies.agency as fundingAgency', 'fund_sources.source as fundSource')
            ->where('userId', $id)
            ->get();

        $facilities = Facilities::join('facility_types', 'facilities.intervention', '=', 'facility_types.id')
            ->join('funding_agencies', 'facilities.fundingAgency', '=', 'funding_agencies.id')
            ->join('fund_sources', 'facilities.fundSource', '=', 'fund_sources.id')
            ->select('facilities.*', 'facility_types.facility as facility_name', 'funding_agencies.agency as fundingAgency', 'fund_sources.source as fundSource')
            ->where('userId', $id)
            ->get();

        $livestocks = Livestocks::join('livestock_types', 'livestocks.intervention', '=', 'livestock_types.id')
            ->join('funding_agencies', 'livestocks.fundingAgency', '=', 'funding_agencies.id')
            ->join('fund_sources', 'livestocks.fundSource', '=', 'fund_sources.id')
            ->select('livestocks.*', 'livestock_types.livestock as livestock_name', 'funding_agencies.agency as fundingAgency', 'fund_sources.source as fundSource')
            ->where('userId', $id)
            ->get();

        return view('admin/user-management/interventions/interventions', [
            'id' => $id,
            'interventions' => $interventions,
            'facilities' => $facilities,
            'livestocks' => $livestocks,
        ]);
    }

    public function userView($id)
    {
        $userProfile = User::where('users.id', $id)
            ->join('provinces', 'users.province', '=', 'provinces.id')
            ->join('municipalities', 'users.municipality', '=', 'municipalities.id')
            ->join('barangays', 'users.barangay', '=', 'barangays.id')
            ->select('users.*', 'provinces.province_name', 'municipalities.municipality_name', 'barangays.barangay_name')
            ->first();

        $userProfile->formattedBirthDate = Date::parse($userProfile->birthDate)->format('F d, Y');

        return view('admin/user-management/user-edit', [
            'userProfile' => $userProfile,
        ]);
    }

    public function create(Request $request)
    {
        $user = $request->user();

        $commodityValues = Commodities::pluck('commodity', 'id');

        $provinceValues = Province::all();

        return view('admin/admin-rtdmf', [
            'user' => $user,
            'commodityValues' => $commodityValues,
            'provinceValues' => $provinceValues,
        ]);
    }

    public function store(StoreRTDMFRequest $request)
    {
        $user = Auth::user();

        $request->validated();

        $fileFields = [
            'attachedResult' => 'uploads/rtdmf',
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

        RTDMFLists::create([
            'title' => $request->get('title', ''),
            'commodity' => $request->get('commodity', ''),
            'startDate' => $request->get('startDate', ''),
            'endDate' => $request->get('endDate', ''),
            'province' => $request->get('province', ''),
            'municipality' => $request->get('municipality', ''),
            'attachedResult' => $paths['attachedResult'],
            'userId' => $user->id,
        ]);

        return redirect()->back()->with('success', 'RTDMF created succesfully!');
    }

    public function update($id, Request $request)
    {
        User::where('id', $id)->update([
            'userType' => $request->get('userType', ''),
        ]);

        return redirect()->back()->with('success', 'User type has been updated succesfully!');
    }
}

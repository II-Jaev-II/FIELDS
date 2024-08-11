<?php

namespace App\Http\Controllers;

use App\Models\AgriculturalTypes;
use App\Models\AnimalTypes;
use App\Models\AssociationProfile;
use App\Models\Commodities;
use App\Models\CSOAccreditation;
use App\Models\ELinkage;
use App\Models\EquipmentTypes;
use App\Models\EquipmentValues;
use App\Models\ERequest;
use App\Models\Facilities;
use App\Models\FacilityTypes;
use App\Models\FacilityValues;
use App\Models\FundingAgencies;
use App\Models\FundSources;
use App\Models\Machineries;
use App\Models\MachineryTypes;
use App\Models\NatureOfRequest;
use App\Models\Province;
use App\Models\RCEFAccreditation;
use App\Models\RTDMFLists;
use App\Models\SubCommodities;
use App\Models\ToolTypes;
use App\Models\WaterSourceProfile;
use App\Models\WaterSourceTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function view(Request $request)
    {
        $user = $request->user();

        $profiles = AssociationProfile::join('provinces', 'association_profiles.province', '=', 'provinces.id')
            ->join('municipalities', 'association_profiles.municipality', '=', 'municipalities.id')
            ->join('districts', 'municipalities.id', '=', 'districts.municipality_id')
            ->join('barangays', 'association_profiles.barangay', '=', 'barangays.id')
            ->leftJoin('president_profiles', 'association_profiles.userId', '=', 'president_profiles.userId')
            ->leftJoin('member_profiles', 'association_profiles.userId', '=', 'member_profiles.userId')
            ->leftJoin('water_source_profiles', 'association_profiles.userId', '=', 'water_source_profiles.userId')
            ->get();

        $provinces = Province::all()->pluck('province_name');

        $provinceCounts = $profiles->groupBy('province_name')->map(function ($row) {
            return $row->count();
        });

        $provinceCounts = $provinces->mapWithKeys(function ($province) use ($provinceCounts) {
            return [$province => $provinceCounts->get($province, 0)];
        });

        $waterSourceProfile = WaterSourceProfile::all();

        $waterSourceTypes = WaterSourceTypes::all()->pluck('waterSourceTypes');

        $abbreviationToFullName = [
            'SWIPHectares' => 'Small Water Impounding Project (SWIP)',
            'SFRHectares' => 'Small Farm Reservoir (SFR)',
            'CISTERNHectares' => 'CISTERN',
            'STWHectares' => 'Shallow Tube Well (STW)',
            'PISOSHectares' => 'Pump Irrigation System for Open Source (PISOS)',
            'PIPHectares' => 'Pump Irrigation Projects (PIP)',
            'RPISHectares' => 'Hydraulic Ram Pump Irrigation System (RPIS)',
            'SPISHectares' => 'Solar Powered Irrigation System (SPIS)',
            'WPISHectares' => 'Wind Pump Irrigation System (WPIS)',
            'DDHectares' => 'Diversion DAM (DD)',
            'CDHectares' => 'Check DAM (CD)',
            'SDHectares' => 'Spring Development (SD)',
            'rainfallHectares' => 'Rainfall',
        ];

        $waterSourceTypeCounts = $waterSourceTypes->mapWithKeys(function ($waterSourceType) use ($waterSourceProfile) {
            return [$waterSourceType => $waterSourceProfile->whereNotNull($waterSourceType)->count()];
        });

        $chartLabels = $waterSourceTypes->map(function ($type) use ($abbreviationToFullName) {
            return $abbreviationToFullName[$type] ?? $type;
        });

        $requests = ERequest::join('e_request_types', 'e_requests.referenceNumber', '=', 'e_request_types.referenceNumber')
            ->leftJoin('machinery_types', 'e_request_types.requestType', '=', 'machinery_types.machinery_type')
            ->leftJoin('facility_values', 'e_request_types.requestType', '=', 'facility_values.facilityTypes')
            ->leftJoin('association_profiles', 'e_requests.userId', '=', 'association_profiles.userId')
            ->get();

        $machineryTypes = MachineryTypes::join('e_request_types', 'machinery_types.machinery_type', '=', 'e_request_types.requestType')
            ->get();

        $facilityTypes = FacilityValues::join('e_request_types', 'facility_values.facilityTypes', '=', 'e_request_types.requestType')
            ->get();

        $toolTypes = ToolTypes::join('e_request_types', 'tool_types.toolTypes', '=', 'e_request_types.requestType')
            ->get();

        $equipmentTypes = EquipmentValues::join('e_request_types', 'equipment_values.equipmentTypes', '=', 'e_request_types.requestType')
            ->get();

        $agriculturalTypes = AgriculturalTypes::join('e_request_types', 'agricultural_types.agriculturalTypes', '=', 'e_request_types.requestType')
            ->get();

        $animalTypes = AnimalTypes::join('e_request_types', 'animal_types.animalTypes', '=', 'e_request_types.requestType')
            ->get();

        $natureOfRequests = NatureOfRequest::all()->pluck('natureOfRequest');

        $natureOfRequestCounts = $natureOfRequests->mapWithKeys(function ($nature) use ($requests) {
            return [$nature => $requests->where('natureOfRequest', $nature)->count()];
        });

        $machinery = MachineryTypes::all()->pluck('machinery_type');

        $machineryCounts = $machinery->mapWithKeys(function ($machinery) use ($machineryTypes) {
            return [$machinery => $machineryTypes->where('machinery_type', $machinery)->count()];
        });

        $facility = FacilityValues::all()->pluck('facilityTypes');

        $facilityCounts = $facility->mapWithKeys(function ($facility) use ($facilityTypes) {
            return [$facility => $facilityTypes->where('facilityTypes', $facility)->count()];
        });

        $tool = ToolTypes::all()->pluck('toolTypes');

        $toolCounts = $tool->mapWithKeys(function ($tool) use ($toolTypes) {
            return [$tool => $toolTypes->where('toolTypes', $tool)->count()];
        });

        $equipmentValues = EquipmentValues::all()->pluck('equipmentTypes');

        $equipmentValueCounts = $equipmentValues->mapWithKeys(function ($equipment) use ($equipmentTypes) {
            return [$equipment => $equipmentTypes->where('equipmentTypes', $equipment)->count()];
        });

        $agricultural = AgriculturalTypes::all()->pluck('agriculturalTypes');

        $agriculturalCounts = $agricultural->mapWithKeys(function ($agricultural) use ($agriculturalTypes) {
            return [$agricultural => $agriculturalTypes->where('agriculturalTypes', $agricultural)->count()];
        });

        $animal = AnimalTypes::all()->pluck('animalTypes');

        $animalCounts = $animal->mapWithKeys(function ($animal) use ($animalTypes) {
            return [$animal => $animalTypes->where('animalTypes', $animal)->count()];
        });

        $accreditations = CSOAccreditation::leftJoin('rcef_accreditations', 'cso_accreditations.userId', '=', 'rcef_accreditations.userId')
            ->leftJoin('provinces', 'cso_accreditations.province', '=', 'provinces.id')
            ->select(
                'cso_accreditations.*',
                'rcef_accreditations.endorsementLetter',
                'rcef_accreditations.farmerProfile',
                'rcef_accreditations.letterOfIntent',
                'rcef_accreditations.omnibusSwornCertificateNotary',
                'provinces.province_name as province_name',
                DB::raw(
                    '
            CASE
                WHEN rcef_accreditations.userId IS NOT NULL AND cso_accreditations.userId IS NOT NULL THEN "CSO and RCEF Accredited"
                WHEN rcef_accreditations.userId IS NOT NULL THEN "RCEF Accredited"
                WHEN cso_accreditations.userId IS NOT NULL THEN "CSO Accredited"
                ELSE "Not Accredited"
            END as accreditation_status'
                )
            )
            ->get();

        $rcefAccreditations = RCEFAccreditation::leftJoin('provinces', 'rcef_accreditations.province', '=', 'provinces.id')
            ->get();

        $csoAccreditationCounts = $provinces->mapWithKeys(function ($province) use ($accreditations) {
            return [$province => $accreditations->where('province_name', $province)->count()];
        });

        $rcefAccreditationCounts = $provinces->mapWithKeys(function ($province) use ($rcefAccreditations) {
            return [$province => $rcefAccreditations->where('province_name', $province)->count()];
        });

        $linkages = ELinkage::join('commodities', 'e_linkages.commodity', '=', 'commodities.id')
            ->join('sub_commodities', 'e_linkages.subCommodity', '=', 'sub_commodities.id')
            ->get();

        $subCommodityTypes = SubCommodities::join('e_linkages', 'sub_commodities.id', '=', 'e_linkages.subCommodity')
            ->get();

        $commodities = Commodities::all()->pluck('commodity');

        $commodityCounts = $commodities->mapWithKeys(function ($commodity) use ($linkages) {
            return [$commodity => $linkages->where('commodity', $commodity)->count()];
        });

        $subCommodities = SubCommodities::all()->pluck('subCommodities');

        $subCommodityCounts = $subCommodities->mapWithKeys(function ($subCommodity) use ($subCommodityTypes) {
            return [$subCommodity => $subCommodityTypes->where('subCommodities', $subCommodity)->count()];
        });

        $machineries = Machineries::leftJoin('association_profiles', 'machineries.userId', '=', 'association_profiles.userId')
            ->join('equipment_types', 'machineries.intervention', 'equipment_types.id')
            ->join('funding_agencies', 'machineries.fundingAgency', 'funding_agencies.id')
            ->join('fund_sources', 'machineries.fundSource', 'fund_sources.id')
            ->get();

        $equipments = EquipmentTypes::all()->pluck('equipment');

        $equipmentCounts = $equipments->mapWithKeys(function ($equipment) use ($machineries) {
            return [$equipment => $machineries->where('equipment', $equipment)->count()];
        });

        $fundingAgencies = FundingAgencies::all()->pluck('agency');

        $fundingAgencyCounts = $fundingAgencies->mapWithKeys(function ($fundingAgency) use ($machineries) {
            return [$fundingAgency => $machineries->where('agency', $fundingAgency)->count()];
        });

        $fundSources = FundSources::all()->pluck('source');

        $fundSourceCounts = $fundSources->mapWithKeys(function ($fundSource) use ($machineries) {
            return [$fundSource => $machineries->where('source', $fundSource)->count()];
        });

        $facilities = Facilities::leftJoin('association_profiles', 'facilities.userId', '=', 'association_profiles.userId')
            ->join('facility_types', 'facilities.intervention', 'facility_types.id')
            ->join('funding_agencies', 'facilities.fundingAgency', 'funding_agencies.id')
            ->join('fund_sources', 'facilities.fundSource', 'fund_sources.id')
            ->get();

        $facilityTypes = FacilityTypes::all()->pluck('facility');

        $facilityValueCounts = $facilityTypes->mapWithKeys(function ($facility) use ($facilities) {
            return [$facility => $facilities->where('facility', $facility)->count()];
        });

        $facilityAgencyCounts = $fundingAgencies->mapWithKeys(function ($facilityAgency) use ($facilities) {
            return [$facilityAgency => $facilities->where('agency', $facilityAgency)->count()];
        });

        $facilitySourceCounts = $fundSources->mapWithKeys(function ($facilitysource) use ($facilities) {
            return [$facilitysource => $facilities->where('source', $facilitysource)->count()];
        });

        $rtdmfValues = RTDMFLists::leftJoin('commodities', 'rtdmf_lists.commodity', '=', 'commodities.id')
            ->leftJoin('provinces', 'rtdmf_lists.province', '=', 'provinces.id')
            ->leftJoin('municipalities', 'rtdmf_lists.municipality', '=', 'municipalities.id')
            ->get();

        $expiredCount = DB::table('association_profiles')->where('cocStatus', 'Expired')->count();
        $notExpiredCount = DB::table('association_profiles')->where('cocStatus', 'Not Expired')->count();

        return view('welcome', [
            'user' => $user,
            'profiles' => $profiles,
            'provinceCounts' => $provinceCounts,
            'provinces' => $provinces,
            'waterSourceTypes' => $waterSourceTypes,
            'waterSourceTypeCounts' => $waterSourceTypeCounts,
            'chartLabels' => $chartLabels,
            'requests' => $requests,
            'natureOfRequestCounts' => $natureOfRequestCounts,
            'natureOfRequests' => $natureOfRequests,
            'machineryCounts' => $machineryCounts,
            'machinery' => $machinery,
            'facilityCounts' => $facilityCounts,
            'facility' => $facility,
            'toolCounts' => $toolCounts,
            'tool' => $tool,
            'equipmentValueCounts' => $equipmentValueCounts,
            'equipmentValues' => $equipmentValues,
            'agriculturalCounts' => $agriculturalCounts,
            'agricultural' => $agricultural,
            'animalCounts' => $animalCounts,
            'animal' => $animal,
            'accreditations' => $accreditations,
            'csoAccreditationCounts' => $csoAccreditationCounts,
            'rcefAccreditationCounts' => $rcefAccreditationCounts,
            'linkages' => $linkages,
            'commodities' => $commodities,
            'commodityCounts' => $commodityCounts,
            'subCommodities' => $subCommodities,
            'subCommodityCounts' => $subCommodityCounts,
            'machineries' => $machineries,
            'equipments' => $equipments,
            'equipmentCounts' => $equipmentCounts,
            'fundingAgencies' => $fundingAgencies,
            'fundingAgencyCounts' => $fundingAgencyCounts,
            'fundSources' => $fundSources,
            'fundSourceCounts' => $fundSourceCounts,
            'facilities' => $facilities,
            'facilityTypes' => $facilityTypes,
            'facilityValueCounts' => $facilityValueCounts,
            'facilityAgencyCounts' => $facilityAgencyCounts,
            'facilitySourceCounts' => $facilitySourceCounts,
            'rtdmfValues' => $rtdmfValues,
            'expiredCount' => $expiredCount,
            'notExpiredCount' => $notExpiredCount,
        ]);
    }
}

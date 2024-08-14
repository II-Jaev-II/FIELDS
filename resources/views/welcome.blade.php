<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('shared.welcome-head')

<body>
    @include('components.navigation-header')

    <nav class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand navbar-title">
                FIELDS
            </a>
            @if (Route::has('login'))
                <div class="links-container">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="label-style">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="label-style">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="label-style">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </nav>

    <section class="hero">
        <div class="container">
            <div class="dashboardLogo">
                <img src="/storage/images/DA_Logo.png" alt="DA Logo">
                <img src="/storage/images/Bagong_Pilipinas_logo.png" alt="Bagong Pilipinas Logo">
            </div>
            <h1>FOD Integrated E-Link Database System</h1>
            <hr class="custom-hr">
        </div>
    </section>

    <section class="buttons">
        <div class="container">
            <button type="button" class="modal-btn" data-bs-toggle="modal" data-bs-target="#fcaModal">FCA
                Profile</button>
            <button type="button" class="modal-btn" data-bs-toggle="modal"
                data-bs-target="#eRequestModal">E-Request</button>
            <button type="button" class="modal-btn" data-bs-toggle="modal"
                data-bs-target="#accreditationModal">Accreditations</button>
            <button type="button" class="modal-btn" data-bs-toggle="modal"
                data-bs-target="#eLinkageModal">E-Linkage</button>
            <button type="button" class="modal-btn" data-bs-toggle="modal"
                data-bs-target="#interventionModal">Interventions</button>
            <button type="button" class="modal-btn" data-bs-toggle="modal" data-bs-target="#rtdmfModal">RTDMF</button>
        </div>
    </section>

    {{-- FCA Profile Modal --}}
    <div class="modal fade" id="fcaModal" tabindex="-1" aria-labelledby="fcaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="fcaModalLabel">FCA Profile</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2 class="bg-success text-white p-2 text-center">FCA Profile</h2>
                    @if ($profiles)
                        <table id="fcaTable" class="table table-hover table-bordered border-success"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th class="text-center">Name of Association</th>
                                    <th class="text-center">Province</th>
                                    <th class="text-center">Municipality</th>
                                    <th class="text-center">District</th>
                                    <th class="text-center">Barangay</th>
                                    <th class="text-center">Office</th>
                                    <th class="text-center">Registration Number</th>
                                    <th class="text-center">Registration Date</th>
                                    <th class="text-center">Expiration Date</th>
                                    <th class="text-center">President Name</th>
                                    <th class="text-center">Members:</th>
                                    <th class="text-center">Service Area:</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @foreach ($profiles as $profile)
                                    <tr>
                                        <td class="text-center">{{ $profile->association }}</td>
                                        <td class="text-center">{{ $profile->province_name }}</td>
                                        <td class="text-center">{{ $profile->municipality_name }}</td>
                                        <td class="text-center">{{ $profile->district_name }}</td>
                                        <td class="text-center">{{ $profile->barangay_name }}</td>
                                        <td class="text-center">{{ $profile->office }}</td>
                                        <td class="text-center">{{ $profile->registrationNumber }}</td>
                                        <td class="text-center">{{ $profile->registrationDate }}</td>
                                        <td class="text-center">{{ $profile->expirationDate }}</td>
                                        <td class="text-center">
                                            {{ $profile->firstName . ' ' . $profile->middleName . ' ' . $profile->lastName . ' ' . $profile->suffix }}
                                        </td>
                                        <td class="text-center">{{ $profile->totalCount }}</td>
                                        <td class="text-center">{{ $profile->serviceArea }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                    <div class="requestChart">
                        <div class="fcaChartBox">
                            <canvas id="fcaChart"></canvas>
                        </div>
                        <div id="chart-data" data-labels='{{ json_encode($provinces->toArray()) }}'
                            data-counts='{{ json_encode(array_values($provinceCounts->toArray())) }}'
                            style="display:none;">
                        </div>

                        <div class="fcaChartBox">
                            <canvas id="statusChart"></canvas>
                        </div>

                    </div>


                    <h2 class="bg-success text-white p-2 mt-2 text-center">Water Source Profile</h2>
                    @if ($profiles)
                        <table id="waterSourceTable" class="table table-hover table-bordered border-success"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th class="text-center">Association</th>
                                    <th class="text-center">Service Area</th>
                                    <th class="text-center">Small Water Impounding Project(SWIP) Hectares</th>
                                    <th class="text-center">Small Farm Reservoir(SFR) Hectares</th>
                                    <th class="text-center">CISTERN Hectares</th>
                                    <th class="text-center">Shallow Tube Well(STW) Hectares</th>
                                    <th class="text-center">Pump Irrigation System for Open Source(PISOS) Hectares
                                    </th>
                                    <th class="text-center">Pump Irrigation Projects(PIP) Hectares</th>
                                    <th class="text-center">Hydraulic Ram Pump Irrigation System(RPIS) Hectares
                                    </th>
                                    <th class="text-center">Solar Powered Irrigation System(SPIS) Hectares</th>
                                    <th class="text-center">Wind Pump Irrigation System(WPIS) Hectares</th>
                                    <th class="text-center">Diversion DAM(DD) Hectares</th>
                                    <th class="text-center">Check DAM(CD) Hectares</th>
                                    <th class="text-center">Spring Development(SD) Hectares</th>
                                    <th class="text-center">Rainfall Hectares</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @foreach ($profiles as $profile)
                                    <tr>
                                        <td class="text-center">{{ $profile->association }}</td>
                                        <td class="text-center">{{ $profile->serviceArea }}</td>
                                        <td class="text-center">{{ $profile->SWIPHectares }}</td>
                                        <td class="text-center">{{ $profile->SFRHectares }}</td>
                                        <td class="text-center">{{ $profile->CISTERNHectares }}</td>
                                        <td class="text-center">{{ $profile->STWHectares }}</td>
                                        <td class="text-center">{{ $profile->PISOSHectares }}</td>
                                        <td class="text-center">{{ $profile->PIPHectares }}</td>
                                        <td class="text-center">{{ $profile->RPISHectares }}</td>
                                        <td class="text-center">{{ $profile->SPISHectares }}</td>
                                        <td class="text-center">{{ $profile->WPISHectares }}</td>
                                        <td class="text-center">{{ $profile->DDHectares }}</td>
                                        <td class="text-center">{{ $profile->CDHectares }}</td>
                                        <td class="text-center">{{ $profile->SDHectares }}</td>
                                        <td class="text-center">{{ $profile->rainfallHectares }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                    <div class="requestChart">
                        <div class="fcaChartBox">
                            <canvas id="waterSourceChart"></canvas>
                        </div>
                        <div id="water-source-data"
                            water-source-data-labels='{{ json_encode($chartLabels->toArray()) }}'
                            water-source-data-counts='{{ json_encode(array_values($waterSourceTypeCounts->toArray())) }}'
                            style="display:none;">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- E-Request Modal --}}
    <div class="modal fade" id="eRequestModal" tabindex="-1" aria-labelledby="eRequestModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="eRequestModalLabel">E Request</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2 class="bg-success text-white p-2 text-center">E-Request</h2>
                    @if ($requests)
                        <table id="eRequestTable" class="table table-hover table-bordered border-success"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th class="text-center">Name of Association</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Address</th>
                                    <th class="text-center">Nature of Request</th>
                                    <th class="text-center">Type</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @foreach ($requests as $request)
                                    <tr>
                                        <td class="text-center">{{ $request->association }}</td>
                                        <td class="text-center">{{ $request->name }}</td>
                                        <td class="text-center">{{ $request->address }}</td>
                                        <td class="text-center">{{ $request->natureOfRequest }}</td>
                                        <td class="text-center">{{ $request->requestType }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                    <div class="requestChart">
                        <div class="requestChartBox">
                            <canvas id="requestChart"></canvas>
                        </div>
                        <div id="request-chart-data"
                            data-request-labels='{{ json_encode($natureOfRequests->toArray()) }}'
                            data-request-counts='{{ json_encode(array_values($natureOfRequestCounts->toArray())) }}'
                            style="display:none;">
                        </div>

                        <div class="requestChartBox">
                            <canvas id="requestTypeChart"></canvas>
                        </div>
                        <div id="request-type-chart-data"
                            data-request-type-labels='{{ json_encode($machinery->toArray()) }}'
                            data-request-type-counts='{{ json_encode(array_values($machineryCounts->toArray())) }}'
                            style="display:none;">
                        </div>
                    </div>
                    <div class="requestChart">
                        <div class="requestChartBox">
                            <canvas id="facilityTypeChart"></canvas>
                        </div>
                        <div id="facility-type-chart-data"
                            data-facility-type-labels='{{ json_encode($facility->toArray()) }}'
                            data-facility-type-counts='{{ json_encode(array_values($facilityCounts->toArray())) }}'
                            style="display:none;">
                        </div>

                        <div class="requestChartBox">
                            <canvas id="toolTypeChart"></canvas>
                        </div>
                        <div id="tool-type-chart-data" data-tool-type-labels='{{ json_encode($tool->toArray()) }}'
                            data-tool-type-counts='{{ json_encode(array_values($toolCounts->toArray())) }}'
                            style="display:none;">
                        </div>
                    </div>
                    <div class="requestChart">
                        <div class="requestChartBox">
                            <canvas id="equipmentTypeChart"></canvas>
                        </div>
                        <div id="equipment-type-chart-data"
                            data-equipment-type-labels='{{ json_encode($equipmentValues->toArray()) }}'
                            data-equipment-type-counts='{{ json_encode(array_values($equipmentValueCounts->toArray())) }}'
                            style="display:none;">
                        </div>

                        <div class="requestChartBox">
                            <canvas id="agriculturalTypeChart"></canvas>
                        </div>
                        <div id="agricultural-type-chart-data"
                            data-agricultural-type-labels='{{ json_encode($agricultural->toArray()) }}'
                            data-agricultural-type-counts='{{ json_encode(array_values($agriculturalCounts->toArray())) }}'
                            style="display:none;">
                        </div>
                    </div>
                    <div class="requestChart">
                        <div class="requestChartBox">
                            <canvas id="animalTypeChart"></canvas>
                        </div>
                        <div id="animal-type-chart-data"
                            data-animal-type-labels='{{ json_encode($animal->toArray()) }}'
                            data-animal-type-counts='{{ json_encode(array_values($animalCounts->toArray())) }}'
                            style="display:none;">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Accreditation Modal --}}
    <div class="modal fade" id="accreditationModal" tabindex="-1" aria-labelledby="accreditationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="accreditationModalLabel">Accreditations</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2 class="bg-success text-white p-2 text-center">Accreditations</h2>
                    @if ($accreditations)
                        <table id="accreditationTable" class="table table-hover table-bordered border-success"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th class="text-center">Name of Association</th>
                                    <th class="text-center">Province</th>
                                    <th class="text-center">Accreditation Status</th>
                                    <th class="text-center">Date of Registration</th>
                                    <th class="text-center">Expiration Date</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @foreach ($accreditations as $accreditation)
                                    <tr>
                                        <td class="text-center">{{ $accreditation->association }}</td>
                                        <td class="text-center">{{ $accreditation->province_name }}</td>
                                        <td class="text-center">{{ $accreditation->accreditation_status }}</td>
                                        <td class="text-center">
                                            {{ \Carbon\Carbon::parse($accreditation->registrationDate)->format('F j, Y') }}
                                        </td>
                                        <td class="text-center">
                                            {{ \Carbon\Carbon::parse($accreditation->expirationDate)->format('F j, Y') }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                    <div class="requestChart">
                        <div class="requestChartBox">
                            <canvas id="csoChart"></canvas>
                        </div>
                        <div id="cso-data" cso-data-labels='{{ json_encode($provinces->toArray()) }}'
                            cso-data-counts='{{ json_encode(array_values($csoAccreditationCounts->toArray())) }}'
                            style="display:none;">
                        </div>

                        <div class="requestChartBox">
                            <canvas id="rcefChart"></canvas>
                        </div>
                        <div id="rcef-data" rcef-data-labels='{{ json_encode($provinces->toArray()) }}'
                            rcef-data-counts='{{ json_encode(array_values($rcefAccreditationCounts->toArray())) }}'
                            style="display:none;">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- E-Linkage Modal --}}
    <div class="modal fade" id="eLinkageModal" tabindex="-1" aria-labelledby="eLinkageModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="eLinkageModalLabel">E-Linkage</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2 class="bg-success text-white p-2 text-center">E-Linkage</h2>
                    @if ($linkages)
                        <table id="eLinkageTable" class="table table-hover table-bordered border-success"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th class="text-center">Name of Association</th>
                                    <th class="text-center">Commodity</th>
                                    <th class="text-center">Sub Commodity</th>
                                    <th class="text-center">Variety</th>
                                    <th class="text-center">Volume(Kg)</th>
                                    <th class="text-center">Estimated Time of Harvest (Start Date)</th>
                                    <th class="text-center">Estimated Time of Harvest (End Date)</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @foreach ($linkages as $linkage)
                                    <tr>
                                        <td class="text-center">{{ $linkage->association }}</td>
                                        <td class="text-center">{{ $linkage->commodity }}</td>
                                        <td class="text-center">{{ $linkage->subCommodities }}</td>
                                        <td class="text-center">{{ $linkage->variety }}</td>
                                        <td class="text-center">{{ $linkage->volume }}</td>
                                        <td class="text-center">{{ $linkage->startDate }}</td>
                                        <td class="text-center">{{ $linkage->endDate }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                    <div class="requestChart">
                        <div class="requestChartBox">
                            <canvas id="commodityChart"></canvas>
                        </div>
                        <div id="commodity-data" commodity-data-labels='{{ json_encode($commodities->toArray()) }}'
                            commodity-data-counts='{{ json_encode(array_values($commodityCounts->toArray())) }}'
                            style="display:none;">
                        </div>

                        <div class="requestChartBox">
                            <canvas id="subCommodityChart"></canvas>
                        </div>
                        <div id="subCommodity-data"
                            subCommodity-data-labels='{{ json_encode($subCommodities->toArray()) }}'
                            subCommodity-data-counts='{{ json_encode(array_values($subCommodityCounts->toArray())) }}'
                            style="display:none;">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Interventions Modal --}}
    <div class="modal fade" id="interventionModal" tabindex="-1" aria-labelledby="interventionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="interventionModalLabel">Interventions</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2 class="bg-success text-white p-2 text-center">Machineries</h2>
                    @if ($machineries)
                        <table id="machineriesTable" class="table table-hover table-bordered border-success"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th class="text-center">Name of Association</th>
                                    <th class="text-center">Intervention</th>
                                    <th class="text-center">Specification</th>
                                    <th class="text-center">Amount</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Funding Agency</th>
                                    <th class="text-center">Fund Source</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @foreach ($machineries as $machinery)
                                    <tr>
                                        <td class="text-center">{{ $machinery->association }}</td>
                                        <td class="text-center">{{ $machinery->equipment }}</td>
                                        <td class="text-center">{{ $machinery->specification }}</td>
                                        <td class="text-center">{{ $machinery->amount }}</td>
                                        <td class="text-center">{{ $machinery->status }}</td>
                                        <td class="text-center">{{ $machinery->agency }}</td>
                                        <td class="text-center">{{ $machinery->source }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                    <div class="requestChart">
                        <div class="requestChartBox">
                            <canvas id="equipmentChart"></canvas>
                        </div>
                        <div id="equipment-data" equipment-data-labels='{{ json_encode($equipments->toArray()) }}'
                            equipment-data-counts='{{ json_encode(array_values($equipmentCounts->toArray())) }}'
                            style="display:none;">
                        </div>

                        <div class="requestChartBox">
                            <canvas id="fundingAgencyChart"></canvas>
                        </div>
                        <div id="fundingAgency-data"
                            fundingAgency-data-labels='{{ json_encode($fundingAgencies->toArray()) }}'
                            fundingAgency-data-counts='{{ json_encode(array_values($fundingAgencyCounts->toArray())) }}'
                            style="display:none;">
                        </div>
                    </div>

                    <div class="requestChart">
                        <div class="requestChartBox">
                            <canvas id="fundSourceChart"></canvas>
                        </div>
                        <div id="fundSource-data" fundSource-data-labels='{{ json_encode($fundSources->toArray()) }}'
                            fundSource-data-counts='{{ json_encode(array_values($fundSourceCounts->toArray())) }}'
                            style="display:none;">
                        </div>
                    </div>
                    <h2 class="bg-success text-white p-2 mt-5 text-center">Facilities</h2>
                    @if ($facilities)
                        <table id="facilitiesTable" class="table table-hover table-bordered border-success"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th class="text-center">Association</th>
                                    <th class="text-center">Intervention</th>
                                    <th class="text-center">Specification</th>
                                    <th class="text-center">Amount</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Funding Agency</th>
                                    <th class="text-center">Fund Source</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @foreach ($facilities as $facility)
                                    <tr>
                                        <td class="text-center">{{ $facility->association }}</td>
                                        <td class="text-center">{{ $facility->facility }}</td>
                                        <td class="text-center">{{ $facility->specification }}</td>
                                        <td class="text-center">{{ $facility->amount }}</td>
                                        <td class="text-center">{{ $facility->status }}</td>
                                        <td class="text-center">{{ $facility->agency }}</td>
                                        <td class="text-center">{{ $facility->source }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                    <div class="requestChart">
                        <div class="requestChartBox">
                            <canvas id="facilityChart"></canvas>
                        </div>
                        <div id="facility-data" facility-data-labels='{{ json_encode($facilityTypes->toArray()) }}'
                            facility-data-counts='{{ json_encode(array_values($facilityValueCounts->toArray())) }}'
                            style="display:none;">
                        </div>

                        <div class="requestChartBox">
                            <canvas id="facilityAgencyChart"></canvas>
                        </div>
                        <div id="facilityAgency-data"
                            facilityAgency-data-labels='{{ json_encode($fundingAgencies->toArray()) }}'
                            facilityAgency-data-counts='{{ json_encode(array_values($facilityAgencyCounts->toArray())) }}'
                            style="display:none;">
                        </div>
                    </div>

                    <div class="requestChart">
                        <div class="requestChartBox">
                            <canvas id="facilitySourceChart"></canvas>
                        </div>
                        <div id="facilitySource-data"
                            facilitySource-data-labels='{{ json_encode($fundSources->toArray()) }}'
                            facilitySource-data-counts='{{ json_encode(array_values($facilitySourceCounts->toArray())) }}'
                            style="display:none;">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- RTDMF Modal --}}
    <div class="modal fade" id="rtdmfModal" tabindex="-1" aria-labelledby="rtdmfModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="rtdmfModalLabel">RTDMF</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2 class="bg-success text-white p-2 text-center">RTDMF</h2>
                    @if ($rtdmfValues)
                        <table id="rtdmfTable" class="table table-hover table-bordered border-success"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Commodity</th>
                                    <th class="text-center">Province</th>
                                    <th class="text-center">Municipality</th>
                                    <th class="text-center">Project Duration (Start)</th>
                                    <th class="text-center">Project Duration (End)</th>
                                    <th class="text-center">Attached Result</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @foreach ($rtdmfValues as $rtdmfValue)
                                    <tr>
                                        <td class="text-center">{{ $rtdmfValue->title }}</td>
                                        <td class="text-center">{{ $rtdmfValue->commodity }}</td>
                                        <td class="text-center">{{ $rtdmfValue->province_name }}</td>
                                        <td class="text-center">{{ $rtdmfValue->municipality_name }}</td>
                                        <td class="text-center">{{ $rtdmfValue->startDate }}</td>
                                        <td class="text-center">{{ $rtdmfValue->endDate }}</td>
                                        <td class="text-center"><a href="{{ asset($rtdmfValue->attachedResult) }}"
                                                target="_blank">View File</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>

</html>

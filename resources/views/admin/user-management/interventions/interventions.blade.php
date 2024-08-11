<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('shared.e-request-head')

<body>
    @include('components.navigation-header')
    @include('layouts.admin-navigation')

    <div class="container mt-2">
        <a href="{{ route('fcaProfile.view', ['id' => $id]) }}" class="edit-link">FCA Profile</a>
        <a href="{{ route('rsbsaDetails.view', ['id' => $id]) }}" class="edit-link">RSBSA Details</a>
        <a href="{{ route('eRequest.view', ['id' => $id]) }}" class="edit-link">E-Request</a>
        <a href="{{ route('accreditation.view', ['id' => $id]) }}" class="edit-link">Accreditations</a>
        <a href="{{ route('eLinkage.view', ['id' => $id]) }}" class="edit-link">E-Linkage</a>
        <a href="{{ route('intervention.view', ['id' => $id]) }}" class="edit-link">Interventions</a>
        <hr>
        @if ($interventions)
            <h2 class="bg-success text-white p-2 text-center">Machineries</h2>
            <table id="machineriesTable"
                class="table table-success table-striped table-hover table-bordered border-success" style="width:100%">
                <thead>
                    <tr>
                        <th class="text-center">Intervention</th>
                        <th class="text-center">Specification</th>
                        <th class="text-center">Amount</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Funding Agency</th>
                        <th class="text-center">Funding Source</th>
                        <th class="text-center">Engine/Serial Number</th>
                        <th class="text-center">MOA/DOD</th>
                        <th class="text-center">Certificate of Acceptance</th>
                        <th class="text-center">Geo-tagged Picture</th>
                        <th class="text-center">CMS</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($interventions as $intervention)
                        <tr>
                            <td class="text-center">{{ $intervention->machinery_name }}</td>
                            <td class="text-center">{{ $intervention->specification }}</td>
                            <td class="text-center">{{ $intervention->amount }}</td>
                            <td class="text-center">{{ $intervention->status }}</td>
                            <td class="text-center">{{ $intervention->fundingAgency }}</td>
                            <td class="text-center">{{ $intervention->fundSource }}</td>
                            <td class="text-center">{!! $intervention->engineNumber
                                ? '<a href="' . asset($intervention->engineNumber) . '" target="_blank">View File</a>'
                                : 'No file available' !!}</td>
                            <td class="text-center">{!! $intervention->moa
                                ? '<a href="' . asset($intervention->moa) . '" target="_blank">View File</a>'
                                : 'No file available' !!}</td>
                            <td class="text-center">{!! $intervention->certificateOfAcceptance
                                ? '<a href="' . asset($intervention->certificateOfAcceptance) . '" target="_blank">View File</a>'
                                : 'No file available' !!}</td>
                            <td class="text-center">{!! $intervention->geoTaggedPicture
                                ? '<a href="' . asset($intervention->geoTaggedPicture) . '" target="_blank">View File</a>'
                                : 'No file available' !!}</td>
                            <td class="text-center">{!! $intervention->cms
                                ? '<a href="' . asset($intervention->cms) . '" target="_blank">View File</a>'
                                : 'No file available' !!}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
        @if ($facilities)
            <h2 class="bg-success text-white p-2 text-center mt-2">Facilities</h2>
            <table id="facilitiesTable"
                class="table table-success table-striped table-hover table-bordered border-success" style="width:100%">
                <thead>
                    <tr>
                        <th class="text-center">Intervention</th>
                        <th class="text-center">Specification</th>
                        <th class="text-center">Amount</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Funding Agency</th>
                        <th class="text-center">Funding Source</th>
                        <th class="text-center">MOA/DOD</th>
                        <th class="text-center">Certificate of Acceptance</th>
                        <th class="text-center">Geo-tagged Picture</th>
                        <th class="text-center">CMS</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($facilities as $facility)
                        <tr>
                            <td class="text-center">{{ $facility->facility_name }}</td>
                            <td class="text-center">{{ $facility->specification }}</td>
                            <td class="text-center">{{ $facility->amount }}</td>
                            <td class="text-center">{{ $facility->status }}</td>
                            <td class="text-center">{{ $facility->fundingAgency }}</td>
                            <td class="text-center">{{ $facility->fundSource }}</td>
                            <td class="text-center">{!! $facility->moa
                                ? '<a href="' . asset($facility->moa) . '" target="_blank">View File</a>'
                                : 'No file available' !!}</td>
                            <td class="text-center">{!! $facility->certificateOfAcceptance
                                ? '<a href="' . asset($facility->certificateOfAcceptance) . '" target="_blank">View File</a>'
                                : 'No file available' !!}</td>
                            <td class="text-center">{!! $facility->geoTaggedPicture
                                ? '<a href="' . asset($facility->geoTaggedPicture) . '" target="_blank">View File</a>'
                                : 'No file available' !!}</td>
                            <td class="text-center">{!! $facility->cms
                                ? '<a href="' . asset($facility->cms) . '" target="_blank">View File</a>'
                                : 'No file available' !!}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script>
        $('#machineriesTable').DataTable({
            responsive: true
        });
        $('#facilitiesTable').DataTable({
            responsive: true
        });
    </script>
</body>

</html>

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
        @if ($ERequests)
            <h2 class="bg-success text-white p-2 text-center">E-Request</h2>
            <table id="requestsTable"
                class="table table-success table-striped table-hover table-bordered border-success" style="width:100%">
                <thead>
                    <tr>
                        <th class="text-center">Nature of Request</th>
                        <th class="text-center">Request Types</th>
                        <th class="text-center">Reference Number</th>
                        <th class="text-center">Status</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($ERequests as $ERequest)
                        <tr>
                            <td class="text-center">{{ $ERequest->natureOfRequest }}</td>
                            <td class="text-center">{{ $ERequest->requestType }}</td>
                            <td class="text-center">{{ $ERequest->referenceNumber }}</td>
                            <td class="text-center">{{ $ERequest->requestStatus }}</td>
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
        $('#requestsTable').DataTable({
            responsive: true
        });
    </script>
</body>

</html>

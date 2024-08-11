<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('shared.rsbsa-head')

<body>
    @include('components.navigation-header')
    @include('layouts.admin-navigation')

    {{-- RSBSA Details Table --}}
    <div class="container mt-2">
        <a href="{{ route('fcaProfile.view', ['id' => $id]) }}" class="edit-link">FCA Profile</a>
        <a href="{{ route('rsbsaDetails.view', ['id' => $id]) }}" class="edit-link">RSBSA Details</a>
        <a href="{{ route('eRequest.view', ['id' => $id]) }}" class="edit-link">E-Request</a>
        <a href="{{ route('accreditation.view', ['id' => $id]) }}" class="edit-link">Accreditations</a>
        <a href="{{ route('eLinkage.view', ['id' => $id]) }}" class="edit-link">E-Linkage</a>
        <a href="{{ route('intervention.view', ['id' => $id]) }}" class="edit-link">Interventions</a>
        <hr>
        @if ($rsbsaDetails)
            <h2 class="bg-success text-white p-2 text-center">List of Members in Association</h2>
            <table id="rsbsaListTable"
                class="table table-success table-striped table-hover table-bordered border-success" style="width:100%">
                <thead>
                    <tr>
                        <th class="text-center">RSBSA No</th>
                        <th class="text-center">First Name</th>
                        <th class="text-center">Middle Name</th>
                        <th class="text-center">Last Name</th>
                        <th class="text-center">Ext. Name</th>
                        <th class="text-center">Sex</th>
                        <th class="text-center">Birthday</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($rsbsaDetails as $rsbsaDetail)
                        <tr>
                            <td class="text-center">{{ $rsbsaDetail->rsbsaNo }}</td>
                            <td class="text-center">{{ $rsbsaDetail->firstName }}</td>
                            <td class="text-center">{{ $rsbsaDetail->middleName }}</td>
                            <td class="text-center">{{ $rsbsaDetail->lastName }}</td>
                            <td class="text-center">{{ $rsbsaDetail->extName }}</td>
                            <td class="text-center">{{ $rsbsaDetail->sex }}</td>
                            <td class="text-center">{{ $rsbsaDetail->birthDate }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        $('#rsbsaListTable').DataTable({
            responsive: true
        });
    </script>
</body>

</html>

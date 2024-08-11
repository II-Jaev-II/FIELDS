<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('shared.e-linkage-head')

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
        <h2 class="bg-success text-white p-2 text-center">E-Linkage</h2>
        @include('admin.user-management.e-linkage.e-linkage-table')
    </div>
    <script>
        $('#eLinkageTable').DataTable({
            responsive: true
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>

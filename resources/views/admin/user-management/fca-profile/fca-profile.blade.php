<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('shared.admin-head')

<body x-data="addressDropdown()">
    @include('components.navigation-header')
    @include('layouts.admin-navigation')

    <div class="container mt-2">
        @if ($associationProfile)
            <a href="{{ route('fcaProfile.view', ['id' => $id]) }}" class="edit-link">FCA Profile</a>
            <a href="{{ route('rsbsaDetails.view', ['id' => $id]) }}" class="edit-link">RSBSA Details</a>
            <a href="{{ route('eRequest.view', ['id' => $id]) }}" class="edit-link">E-Request</a>
            <a href="{{ route('accreditation.view', ['id' => $id]) }}" class="edit-link">Accreditations</a>
            <a href="{{ route('eLinkage.view', ['id' => $id]) }}" class="edit-link">E-Linkage</a>
            <a href="{{ route('intervention.view', ['id' => $id]) }}" class="edit-link">Interventions</a>
            <hr>
            @include('admin.user-management.fca-profile.association-profile')
            @include('admin.user-management.fca-profile.training-profile')
            @include('admin.user-management.fca-profile.president-profile')
            @include('admin.user-management.fca-profile.members-profile')
            @include('admin.user-management.fca-profile.water-source-profile')
        @else
            <div class="d-flex justify-content-center align-items-center">
                <p>This association has no FCA Profile.</a></p>
            </div>
        @endif
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>

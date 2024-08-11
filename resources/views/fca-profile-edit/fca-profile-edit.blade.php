<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('shared.head')

<body x-data="addressDropdown()">
    @include('components.navigation-header')
    @include('layouts.navigation')

    <div class="container mt-2">
        @if ($associationProfile)
            <a href="{{ route('fca.view') }}" class="edit-link">View</a>
            <hr>
        @endif
        <form action="{{ route('fca.update') }}" method="post" enctype="multipart/form-data">
            @csrf

            @include('fca-profile-edit.association-profile')
            @include('fca-profile-edit.training-profile')
            @include('fca-profile-edit.president-profile')
            @include('fca-profile-edit.members-profile')
            @include('fca-profile-edit.water-source-profile')
            <hr>
            <input type="submit" value="{{ isset($fca) ? 'Update' : 'Submit' }}"
                class="btn btn-success text-white col-md-4 rounded-pill mb-2 mx-auto d-block">

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/fca-profile.js') }}"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('shared.head')

<body x-data="addressDropdown()">
    @include('components.navigation-header')
    @include('layouts.navigation')

    <div class="container mt-2">
        @if ($associationProfile)
            <a href="{{ route('fca.edit') }}" class="edit-link">Edit</a>
            <hr>
        @else
        @endif
        <form action="{{ route('fca.create') }}" method="post" enctype="multipart/form-data">
            @csrf
            @if (session()->has('success') || session()->has('updated'))
                <div class="alert alert-success">
                    {{ session('success') ?? session('updated') }}
                </div>
            @endif
            @include('fca-profile.association-profile')
            @include('fca-profile.training-profile')
            @include('fca-profile.president-profile')
            @include('fca-profile.members-profile')
            @include('fca-profile.water-source-profile')
            <hr>
            @if ($associationProfile)
            @else
                <input type="submit" value="{{ isset($fca) ? 'Update' : 'Submit' }}"
                    class="btn btn-success text-white col-md-4 rounded-pill mb-2 mx-auto d-block">
            @endif

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/fca-profile.js') }}"></script>
</body>

</html>

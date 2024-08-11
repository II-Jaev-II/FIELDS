<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('shared.interventions-head')

<body>
    @include('components.navigation-header')
    @include('layouts.navigation')

    <div class="container mt-2">

        <form action="{{ route('interventions.create') }}" method="post" enctype="multipart/form-data">
            @csrf
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if ($associationProfile)
                @include('interventions.machineries-components')
                @include('interventions.facilities-components')
                <input type="submit" value="Submit"
                    class="btn btn-success text-white col-md-4 rounded-pill mb-2 mx-auto d-block">
            @else
                <div class="d-flex justify-content-center align-items-center">
                    <p>Please submit your <a href="{{ route('fca.view') }}">FCA Profile.</a></p>
                </div>
            @endif

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/interventions.js') }}"></script>
</body>

</html>

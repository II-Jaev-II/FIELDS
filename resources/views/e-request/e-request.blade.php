<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('shared.e-request-head')

<body>
    @include('components.navigation-header')
    @include('layouts.navigation')

    <div class="container mt-2">
        <form action="{{ route('e-request.create') }}" method="post" enctype="multipart/form-data">
            @csrf
            @if ($associationProfile)
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-5">
                        @include('e-request.association-details')
                    </div>
                    <div class="col-md-7">
                        <h2 class="bg-success mt-3 text-white p-2 text-center rounded-3">Input Documents</h2>
                        @include('e-request.request-documents')
                        <hr x-show="selectedOption === 'Machinery' || selectedOption === 'Facility' || selectedOption === 'Tools' || selectedOption === 'Equipments' || selectedOption === 'Agricultural' || selectedOption === 'Animals' || selectedOption === 'Others'"
                            x-cloak style="display: none !important">
                        <input type="submit" value="Submit"
                            class="btn btn-success text-white col-md-4 rounded-pill mb-2 mx-auto d-block">
                    </div>
                </div>
            @else
                <div class="d-flex justify-content-center align-items-center">
                    <p>Please submit your <a href="{{ route('fca.view') }}">FCA Profile.</a></p>
                </div>
            @endif
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/e-request.js') }}"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('shared.head')

<body>
    @include('components.navigation-header')
    @include('layouts.navigation')

    <div class="container mt-2">
        @if ($rcefAccreditation)
            <a href="{{ route('rcef-accreditation') }}" class="edit-link">View</a>
            <hr>
        @else
        @endif
        <form action="{{ route('rcef-accreditation.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('accreditations.rcef-accreditation.input-documents-edit')

            <hr>
            <input type="submit" value="Update"
                class="btn btn-success text-white col-md-4 rounded-pill mb-2 mx-auto d-block">

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('shared.head')

<body>
    @include('components.navigation-header')
    @include('layouts.navigation')

    <div class="container mt-2">
        @if ($plguAccreditation)
            <a href="{{ route('plgu-accreditation.edit') }}" class="edit-link">Edit</a>
            <hr>
        @else
        @endif
        <form action="{{ route('plgu-accreditation.create') }}" method="post" enctype="multipart/form-data">
            @csrf
            @if (session()->has('success') || session()->has('updated'))
                <div class="alert alert-success">
                    {{ session('success') ?? session('updated') }}
                </div>
            @endif

            @include('accreditations.plgu-accreditation.input-documents')

            @if ($plguAccreditation)
            @else
                <hr>
                <input type="submit" value="Submit"
                    class="btn btn-success text-white col-md-4 rounded-pill mb-2 mx-auto d-block">
            @endif
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>

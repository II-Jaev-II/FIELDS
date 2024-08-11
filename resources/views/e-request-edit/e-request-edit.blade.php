<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('shared.e-request-head')

<body>
    @include('components.navigation-header')
    @include('layouts.navigation')

    <div class="container mt-2 mb-2">
        <a href="{{ route('e-request.view', ['referenceNumber' => $ERequest->referenceNumber]) }}"
            class="edit-link">View</a>
        <hr>
        <form action="{{ route('e-request.update', ['referenceNumber' => $ERequest->referenceNumber]) }}" method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-5">
                    @include('e-request.association-details')
                </div>
                <div class="col-md-7">
                    <h2 class="bg-success mt-3 text-white p-2 text-center rounded-3">Input Documents</h2>
                    @include('e-request-edit.edit-request-documents')
                    <hr>
                    <input type="submit" value="Update"
                        class="btn btn-success text-white col-md-4 rounded-pill mb-2 mx-auto d-block">
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        function initSelect2(dropdownId) {
            $("#" + dropdownId).select2();
        }
    </script>
</body>

</html>

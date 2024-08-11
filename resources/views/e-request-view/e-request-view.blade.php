<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('shared.e-request-head')

<body>
    @include('components.navigation-header')
    @include('layouts.navigation')


    <div class="container mt-2 mb-2">
        <a href="{{ route('e-request.edit', ['referenceNumber' => $ERequest->referenceNumber]) }}"
            class="edit-link">Edit</a>
        <hr>
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
                @include('e-request-view.view-request-documents')
                <h2 class="bg-success mt-3 text-white p-2 text-center rounded-3">Status History</h2>
                @include('e-request-view.request-history')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $('#historiesTable').DataTable({
            responsive: true
        });

        $(document).on('click', '.show-request-details', function(e) {
            let subject = $(this).data('subject');
            let status = $(this).data('status');
            let date = $(this).data('updated-date');
            let referenceNumber = $(this).data('reference-number');
            let remarks = $(this).data('remarks');
            let validationForm = $(this).data('validation-form');

            $('.subject').val(subject);
            $('.status').val(status);
            $('.updated-date').val(date);
            $('.reference-number').val(referenceNumber);
            $('.remarks').val(remarks);
            $('.validation-form').val(validationForm);

            if (status === 'Site Validated') {
                $('.validation-form').show();
                $('.validation-form-label').show();
            } else {
                $('.validation-form').hide();
                $('.validation-form-label').hide();
            }
        });
    </script>
</body>

</html>

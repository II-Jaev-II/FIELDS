<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('shared.e-request-head')

<body>
    @include('components.navigation-header')
    @include('layouts.apco-navigation')

    <div class="container">
        @if ($ERequests)
            <table id="apcoTable" class="table table-success table-striped table-hover table-bordered border-success"
                style="width:100%">
                <thead>
                    @if ($user->userType === 'APCOLAUNION')
                        <h1 class="text-center">APCO LA UNION</h1>
                    @elseif ($user->userType === 'APCOPANGASINAN')
                        <h1 class="text-center">APCO PANGASINAN</h1>
                    @elseif ($user->userType === 'APCOILOCOSSUR')
                        <h1 class="text-center">APCO ILOCOS SUR</h1>
                    @elseif ($user->userType === 'APCOILOCOSNORTE')
                        <h1 class="text-center">APCO ILOCOS NORTE</h1>
                    @endif
                    <tr>
                        <th class="text-center">Association</th>
                        <th class="text-center">Nature of Request</th>
                        <th class="text-center">Request Types</th>
                        <th class="text-center">Reference Number</th>
                        <th class="text-center">Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($ERequests as $ERequest)
                        @if (
                            ($user->userType === 'APCOLAUNION' && $ERequest->province === 'La Union') ||
                                ($user->userType === 'APCOPANGASINAN' && $ERequest->province === 'Pangasinan') ||
                                ($user->userType === 'APCOILOCOSSUR' && $ERequest->province === 'Ilocos Sur') ||
                                ($user->userType === 'APCOILOCOSNORTE' && $ERequest->province === 'Ilocos Norte'))
                            <tr>
                                <td class="text-center">{{ $ERequest->association }}</td>
                                <td class="text-center">{{ $ERequest->natureOfRequest }}</td>
                                <td class="text-center">{{ $ERequest->requestType }}</td>
                                <td class="text-center">{{ $ERequest->referenceNumber }}</td>
                                <td class="text-center">{{ $ERequest->requestStatus }}</td>
                                <td class="text-center"><a
                                        href="{{ route('apco.view', ['referenceNumber' => $ERequest->referenceNumber]) }}"
                                        class="btn btn-success">View</a></td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script>
        $('#apcoTable').DataTable({
            responsive: true
        });
    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('shared.rtdmf-head')

<body>
    @include('components.navigation-header')
    @include('layouts.navigation')
    <div class="container">
        @if ($rtdmfLists)
            <table id="rtdmfTable" class="table table-success table-striped table-hover table-bordered border-success"
                style="width:100%">
                <h2 class="bg-success text-white p-2 text-center">Research Techno Demo Model Farm</h2>
                <thead>
                    <tr>
                        <th class="text-center">Title</th>
                        <th class="text-center">Commodity</th>
                        <th class="text-center">Project Duration(Start)</th>
                        <th class="text-center">Project Duration(End)</th>
                        <th class="text-center">File</th>
                        <th class="text-center">Province</th>
                        <th class="text-center">Municipality</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($rtdmfLists as $rtdmfList)
                        <tr>
                            <td class="text-center">{{ $rtdmfList->title }}</td>
                            <td class="text-center">{{ $rtdmfList->commodity_name }}</td>
                            <td class="text-center">{{ $rtdmfList->startDate }}</td>
                            <td class="text-center">{{ $rtdmfList->endDate }}</td>
                            <td class="text-center"><a href="{{ asset($rtdmfList->attachedResult) }}"
                                    target="_blank">View File</a></td>
                            <td class="text-center">{{ $rtdmfList->province_name }}</td>
                            <td class="text-center">{{ $rtdmfList->municipality_name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
    <script>
        $('#rtdmfTable').DataTable({
            responsive: true
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('shared.admin-head')

<body>
    @include('components.navigation-header')
    @include('layouts.admin-navigation')

    <div class="container mt-2">
        @if ($users)
            <table id="usersTable" class="table table-success table-striped table-hover table-bordered border-success"
                style="width:100%">
                <thead>
                    <h1 class="text-center">User Management</h1>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">User Type</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($users as $user)
                        <tr>
                            <td class="text-center">{{ $user->id }}</td>
                            <td class="text-center">{{ $user->name }}</td>
                            <td class="text-center">{{ $user->userType }}</td>
                            <td class="text-center">
                                @if ($user->userType === 'FCA')
                                    <a href="{{ route('fcaProfile.view', ['id' => $user->id]) }}"
                                        class="btn btn-success">View</a>
                                @elseif ($user->userType === 'BUYER')
                                    <a href="{{ route('userProfile.view', ['id' => $user->id]) }}"
                                        class="btn btn-success">View</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script>
        $('#usersTable').DataTable({
            responsive: true
        });
    </script>
</body>

</html>

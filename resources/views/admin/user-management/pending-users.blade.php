<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('shared.admin-head')

<body>
    @include('components.navigation-header')
    @include('layouts.admin-navigation')

    <div class="container mt-2">
        @if (session()->has('success') || session()->has('denied'))
            <div class="alert {{ session()->has('denied') ? 'alert-danger' : 'alert-success' }}">
                {{ session('success') ?? session('denied') }}
            </div>
        @endif
        @if ($pendingUsers)
            <table id="usersTable" class="table table-success table-striped table-hover table-bordered border-success"
                style="width:100%">
                <thead>
                    <h1 class="text-center">Pending Users</h1>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">User Type</th>
                        <th class="text-center">Province</th>
                        <th class="text-center">Municipality</th>
                        <th class="text-center">Barangay</th>
                        <th class="text-center">Contact Number</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($pendingUsers as $pendingUser)
                        <tr>
                            <td class="text-center">{{ $pendingUser->id }}</td>
                            <td class="text-center">{{ $pendingUser->name }}</td>
                            <td class="text-center">{{ $pendingUser->email }}</td>
                            <td class="text-center">{{ $pendingUser->userType }}</td>
                            <td class="text-center">{{ $pendingUser->province }}</td>
                            <td class="text-center">{{ $pendingUser->municipality }}</td>
                            <td class="text-center">{{ $pendingUser->barangay }}</td>
                            <td class="text-center">{{ $pendingUser->phoneNumber }}</td>
                            <td class="text-center">
                                <a href="{{ route('pendingUsers.update', ['id' => $pendingUser->id]) }}"
                                    class="btn btn-success">Approve</a>
                                <hr>
                                <a href="{{ route('pendingUsers.destroy', ['id' => $pendingUser->id]) }}"
                                    class="btn btn-danger">Deny</a>
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

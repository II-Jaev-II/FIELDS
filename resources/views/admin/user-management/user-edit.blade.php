<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('shared.admin-head')

<body>
    @include('components.navigation-header')
    @include('layouts.admin-navigation')


    <div class="mt-2 d-flex justify-content-center align-items-center">
        <div class="user-management-container shadow bg-white rounded">
            <form action="{{ route('users.update', ['id' => $userProfile->id]) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="row">
                    <h2 class="bg-success text-white p-2 text-center rounded-3">User Information</h2>
                    <div>
                        <label for="name" class="form-label user-style">Name: {{ $userProfile->name }}</label>
                    </div>

                    <div>
                        <label for="email" class="form-label user-style">Email: {{ $userProfile->email }}</label>
                    </div>

                    <div>
                        <label for="province" class="form-label user-style">Province:
                            {{ $userProfile->province_name }}</label>
                    </div>

                    <div>
                        <label for="municipality" class="form-label user-style">Municipality:
                            {{ $userProfile->municipality_name }}</label>
                    </div>

                    <div>
                        <label for="barangay" class="form-label user-style">Barangay:
                            {{ $userProfile->barangay_name }}</label>
                    </div>

                    <div>
                        <label for="birthDate" class="form-label user-style">Birth Date:
                            {{ $userProfile->formattedBirthDate  }}</label>
                    </div>

                    <div>
                        <label for="phoneNumber" class="form-label user-style">Phone Number:
                            {{ $userProfile->phoneNumber }}</label>
                    </div>

                    <div class="col-md-3">
                        <label for="userType" class="form-label label-style">User Type</label>
                        <select id="userType" name="userType" class="form-select">
                            <option value="" disabled selected>{{ $userProfile->userType }}</option>
                            <option value="ADMIN">ADMIN</option>
                            <option value="BUYER">BUYER</option>
                            <option value="FCA">FCA</option>
                            <option value="MLGU">MLGU</option>
                            <option value="PLGU">PLGU</option>
                        </select>
                        @error('userType')
                            <span class="fs-6 text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <hr>
                <input type="submit" value="Submit"
                    class="btn btn-success text-white col-md-6 rounded-pill mb-1 mx-auto d-block">
            </form>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>

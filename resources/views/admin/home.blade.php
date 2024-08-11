<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('shared.admin-head')

<body>
    @include('components.navigation-header')
    @include('layouts.admin-navigation')

    <div class="d-flex justify-content-center align-items-center">
        <img src="/storage/images/DA_Logo.png" alt="DA Logo" class="logo">
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>

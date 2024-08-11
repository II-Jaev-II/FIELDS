<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('storage/css/guest.css') }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css'])

    <!-- Alpine Plugins -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/persist@3.x.x/dist/cdn.min.js"></script>

    <!-- Alpine Core -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body class="" style="font-family: 'Poppins', sans-serif;" x-data="addressDropdown()">
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="login-form-container shadow bg-white rounded">
            <img src="{{ asset('storage/images/DA_Logo.png') }}" alt="DA Logo" class="application-logo">
            {{ $slot }}
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script>
        function addressDropdown() {
            return {
                province: Alpine.$persist(null).using(sessionStorage),
                municipality: Alpine.$persist(null).using(sessionStorage),
                district: Alpine.$persist(null).using(sessionStorage),
                barangay: Alpine.$persist(null).using(sessionStorage),
                municipalities: [],
                districts: [],
                barangays: [],

                init() {
                    if (this.province) {
                        this.fetchMunicipalities(this.province);
                    }
                    if (this.municipality) {
                        this.fetchDistricts(this.municipality);
                    }
                    if (this.district) {
                        this.fetchBarangays(this.district);
                    }
                },
                onProvinceChange() {
                    this.district = null;
                    this.districts = [];

                    this.barangay = null;
                    this.barangays = [];

                    this.municipality = null;
                    this.fetchMunicipalities(this.province);
                },
                onMunicipalityChange() {
                    this.district = null;
                    this.fetchDistricts(this.municipality);
                },
                onDistrictChange() {
                    this.barangay = null;
                    this.fetchBarangays(this.district);
                },
                fetchMunicipalities(province) {
                    axios.get(`/provinces/${province}`).then(res => {
                        this.municipalities = res.data;
                    }).catch(error => {
                        console.error('Error fetching municipalities:', error);
                    });
                },
                fetchDistricts(municipality) {
                    axios.get(`/municipalities/${municipality}`).then(res => {
                        this.districts = res.data;
                    }).catch(error => {
                        console.error('Error fetching districts:', error);
                    });
                },
                fetchBarangays(district) {
                    axios.get(`/districts/${district}`).then(res => {
                        this.barangays = res.data;
                    }).catch(error => {
                        console.error('Error fetching barangays:', error);
                    });
                }
            };
        }
    </script>
</body>

</html>

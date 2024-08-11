<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('shared.e-linkage-head')

<body>
    @include('components.navigation-header')
    @include('layouts.navigation')


    <div class="container mt-2">
        <form action="{{ route('e-linkage.create') }}" method="post" enctype="multipart/form-data" x-data="{
            commodity: null,
            subCommodity: null,
            subCommodities: [],
            onCommodityChange(event) {
                axios.get(`/commodities/${event.target.value}`).then(res => {
                    this.subCommodities = res.data
                })
            }
        }">
            @csrf
            @if ($associationProfile)
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <h2 class="bg-success text-white p-2 text-center">E-Linkage</h2>
                <div x-data="eLinkageAddRow()">
                    <template x-for="(row,index) in rows" :key="row.id">
                        @include('e-linkage.input-components')
                    </template>
                    <div class="col-md-1 mb-2 d-flex mt-auto">
                        <button x-on:click="addRow()" type="button" class="btn btn-success">Add more</button>
                    </div>
                </div>
                <input type="submit" value="Submit"
                    class="btn btn-success text-white col-md-2 mb-2 rounded-pill mx-auto d-block">
                @include('e-linkage.e-linkage-table')
            @else
                <div class="d-flex justify-content-center align-items-center">
                    <p>Please submit your <a href="{{ route('fca.view') }}">FCA Profile.</a></p>
                </div>
            @endif

        </form>
    </div>
    <script>
        $('#eLinkageTable').DataTable({
            responsive: true
        });
    </script>
    <script>
        $(document).on('click', '.show-contact-details', function(e) {
            let buyerName = $(this).data('buyer-name');
            let emailAddress = $(this).data('email-address');
            let address = $(this).data('address');
            let phoneNumber = $(this).data('phone-number');

            $('.buyer-name').val(buyerName);
            $('.email-address').val(emailAddress);
            $('.address').val(address);
            $('.phone-number').val(phoneNumber);
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/e-linkage.js') }}"></script>
    <script src="https://kit.fontawesome.com/6692c90027.js" crossorigin="anonymous"></script>
</body>

</html>

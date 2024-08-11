<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('shared.buyer-linkage-head')

<body>
    @include('components.navigation-header')
    @include('layouts.buyer-navigation')

    <div class="container mt-2">

        <form action="{{ route('buyer.create') }}" method="post" x-data="{
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
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <h2 class="bg-success text-white p-2 text-center">E-Linkage</h2>

            <div x-data="buyerLinkageAddRow()">
                <template x-for="(row,index) in rows" :key="row.id">
                    <div class="row">
                        <div class="col-md-3 mb-2">
                            <label for="buyerName" class="form-label label-style">Name</label>
                            <input type="text" class="form-control mt-2" name="buyerName[]" id="buyerName"
                                autocomplete="off" readonly value="{{ $userProfile->name }}">
                        </div>

                        <div class="col-md-3 mb-2">
                            <label for="commodity" class="form-label label-style">Commodity</label>
                            <select x-model="commodities[index]" x-on:change="onCommodityChange($event, index)"
                                id="commodity" name="commodity[]" class="form-select mt-2" required
                                oninvalid="setCustomValidity('Please select a commodity.')"
                                oninput="setCustomValidity('')">
                                <option value="">Select Commodity</option>
                                @foreach ($commodityValues as $id => $commodityValue)
                                    <option :value="{{ $commodityValue->id }}">{{ $commodityValue->commodity }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-3 mb-2">
                            <label for="subCommodity" class="form-label label-style">Sub Commodity</label>
                            <select x-model="selectedSubCommodity[index]" id="subCommodity" name="subCommodity[]"
                                class="form-select mt-2" required
                                oninvalid="setCustomValidity('Please select a sub commodity.')"
                                oninput="setCustomValidity('')">
                                <option value="">Select Sub Commodity</option>
                                <template x-for="subCommodity in subCommodities[index]" :key="subCommodity.id">
                                    <option :value="subCommodity.id" x-text="subCommodity.subCommodities"></option>
                                </template>
                            </select>
                        </div>

                        <div class="col-md-2 mb-2">
                            <label for="Variety" class="form-label label-style">Variety</label>
                            <input type="text" class="form-control mt-2" name="variety[]" id="variety"
                                autocomplete="off" required oninvalid="setCustomValidity('Please enter the variety.')"
                                oninput="setCustomValidity('')">
                        </div>

                        <div class="col-md-2 mb-2">
                            <label for="Variety" class="form-label label-style">Frequency</label>
                            <input type="text" class="form-control mt-2" name="frequency[]" id="frequency"
                                autocomplete="off" required oninvalid="setCustomValidity('Please enter the frequency.')"
                                oninput="setCustomValidity('')">
                        </div>

                        <div class="col-md-2 mb-2">
                            <label for="end_Date" class="form-label label-style">Volume (Kg)</label>
                            <input type="text" class="form-control mt-2" name="volume[]" id="volume"
                                autocomplete="off" required oninvalid="setCustomValidity('Please enter the volume.')"
                                oninput="setCustomValidity('')">
                        </div>
                        <div x-show="index > 0">
                            <div class="col-md-2 mb-2 d-flex mt-auto">
                                <button x-on:click="removeRow(index)" type="button"
                                    class="btn btn-danger">Remove</button>
                            </div>
                        </div>
                        <hr>
                    </div>
                </template>
                <div class="col-md-1 mb-2 d-flex mt-auto">
                    <button x-on:click="addRow()" type="button" class="btn btn-success">Add more</button>
                </div>
            </div>
            <input type="submit" value="Submit"
                class="submit-btn bg-success text-white col-md-4 rounded-pill mb-2 mx-auto d-block">
        </form>
    </div>

    <div class="container-fluid linkage-table">
        <h2 class="bg-success text-white p-2 text-center">Farmers Cooperative Association</h2>
        @if ($ELinkages)
            <table id="eLinkageTable"
                class="table table-success table-striped table-hover table-bordered border-success" style="width:100%">
                <thead>
                    <tr>
                        <th class="text-center">Association</th>
                        <th class="text-center">Commodity</th>
                        <th class="text-center">Sub Commodity</th>
                        <th class="text-center">Variety</th>
                        <th class="text-center">Volume (Kg)</th>
                        <th class="text-center">Estimated Time of Harvest (Start)</th>
                        <th class="text-center">Estimated Time of Harvest (End)</th>
                        <th class="text-center"></th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($ELinkages as $ELinkage)
                        <tr>
                            <td class="text-center">{{ $ELinkage->association }}</td>
                            <td class="text-center">{{ $ELinkage->commodity_name }}</td>
                            <td class="text-center">{{ $ELinkage->subCommodity_name }}</td>
                            <td class="text-center">{{ $ELinkage->variety }}</td>
                            <td class="text-center">{{ $ELinkage->volume }}</td>
                            <td class="text-center">{{ $ELinkage->startDate }}</td>
                            <td class="text-center">{{ $ELinkage->endDate }}</td>
                            <td class="text-center"><a type="button" data-bs-toggle="modal"
                                    data-bs-target="#eLinkageModal" data-association="{{ $ELinkage->association }}"
                                    data-contact-number="{{ $ELinkage->contactNumber }}"
                                    data-position="{{ $ELinkage->firstName . ' ' . $ELinkage->middleName . ' ' . $ELinkage->lastName . ' ' . $ELinkage->suffix }}"
                                    data-email-address="{{ $ELinkage->email }}"
                                    class="btn btn-success fa-solid fa-phone show-contact-details" href="">
                                    Contact</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

    <div class="modal fade" id="eLinkageModal" tabindex="-1" aria-labelledby="eLinkageModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 label-style" id="eLinkageModalLabel">Contact Information</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-2">
                        <div class="col-md-7">
                            <label for="association" class="label-style">Association Name</label>
                            <input type="text" class="form-control association" name="association"
                                id="association" readonly>
                        </div>
                        <div class="col-md-3">
                            <label for="contactNumber" class="label-style">Contact Number</label>
                            <input type="text" class="form-control contact-number" name="contactNumber"
                                id="contactNumber" readonly>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label for="position" class="label-style">President/Chairman/Manager</label>
                            <input type="text" class="form-control position" name="position" id="position"
                                readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="emailAddress" class="label-style">Email Address</label>
                            <input type="text" class="form-control email-address" name="emailAddress"
                                id="emailAddress" readonly>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#eLinkageTable').DataTable({
            responsive: true
        });
    </script>
    <script>
        $(document).on('click', '.show-contact-details', function(e) {
            let association = $(this).data('association');
            let contactNumber = $(this).data('contact-number');
            let position = $(this).data('position');
            let emailAddress = $(this).data('email-address');

            $('.association').val(association);
            $('.contact-number').val(contactNumber);
            $('.position').val(position);
            $('.email-address').val(emailAddress);
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/buyer-linkage.js') }}"></script>
    <script src="https://kit.fontawesome.com/6692c90027.js" crossorigin="anonymous"></script>
</body>

</html>

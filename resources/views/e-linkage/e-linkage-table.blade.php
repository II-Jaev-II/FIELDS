<div class="container-fluid linkage-table">
    <h2 class="bg-success text-white p-2 text-center">Institutional Buyer</h2>
    @if ($ELinkages)
        <table id="eLinkageTable" class="table table-success table-striped table-hover table-bordered border-success"
            style="width:100%">
            <thead>
                <tr>
                    <th class="text-center">Name</th>
                    <th class="text-center">Commodity</th>
                    <th class="text-center">Sub Commodity</th>
                    <th class="text-center">Variety</th>
                    <th class="text-center">Frequency</th>
                    <th class="text-center">Volume (Kg)</th>
                    <th class="text-center"></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($ELinkages as $ELinkage)
                    <tr>
                        <td class="text-center">{{ $ELinkage->name }}</td>
                        <td class="text-center">{{ $ELinkage->commodity_name }}</td>
                        <td class="text-center">{{ $ELinkage->subCommodity_name }}</td>
                        <td class="text-center">{{ $ELinkage->variety }}</td>
                        <td class="text-center">{{ $ELinkage->frequency }}</td>
                        <td class="text-center">{{ $ELinkage->volume }}</td>
                        <td class="text-center"><a type="button" data-bs-toggle="modal" data-bs-target="#eLinkageModal"
                                data-buyer-name="{{ $ELinkage->name }}" data-email-address="{{ $ELinkage->email }}"
                                data-address="{{ $ELinkage->barangay_name . ', ' . $ELinkage->municipality_name . ', ' . $ELinkage->province_name }}"
                                data-phone-number="{{ $ELinkage->phoneNumber }}"
                                class="btn btn-success fa-solid fa-phone show-contact-details" href="">
                                Contact</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

<div class="modal fade" id="eLinkageModal" tabindex="-1" aria-labelledby="eLinkageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 label-style" id="eLinkageModalLabel">Contact Information</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-2">
                    <div class="col-md-6">
                        <label for="buyerName" class="label-style">Buyer Name</label>
                        <input type="text" class="form-control buyer-name" name="buyerName" id="buyerName" readonly>
                    </div>
                    <div class="col-md-5">
                        <label for="emailAddress" class="label-style">Email Address</label>
                        <input type="text" class="form-control email-address" name="emailAddress" id="emailAddress"
                            readonly>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <label for="address" class="label-style">Address</label>
                        <input type="text" class="form-control address" name="address" id="address" readonly>
                    </div>
                    <div class="col-md-3">
                        <label for="phoneNumber" class="label-style">Phone Number</label>
                        <input type="text" class="form-control phone-number" name="phoneNumber" id="phoneNumber"
                            readonly>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

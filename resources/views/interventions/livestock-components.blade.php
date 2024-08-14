<h2 class="bg-success text-white p-2 text-center">Livestock</h2>

<div x-data="livestockAddRow()">
    <template x-for="(row,index) in rows" :key="row.id">
        <div class="row">
            <div class="col-md-4 mb-2">
                <label for="livestockAssociationName" class="form-label label-style">Association Name</label>
                <input type="text" class="form-control" name="livestockAssociationName[]" id="livestockAssociationName"
                    autocomplete="off" value="{{ $associationProfile->association }}" readonly>
            </div>

            <div class="col-md-3 mb-2">
                <label for="livestockInterventions" class="form-label label-style">Interventions</label>
                <select id="livestockInterventions" name="livestockInterventions[]" class="form-select" required
                    oninvalid="setCustomValidity('Please select an intervention.')" oninput="setCustomValidity('')">
                    <option value="" disabled selected>Select Interventions</option>
                    @foreach ($livestockValues as $id => $key)
                        <option value="{{ $id }}">{{ $key }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-2 mb-2">
                <label for="livestockSpecification" class="form-label label-style">Specification</label>
                <input type="text" class="form-control" name="livestockSpecification[]" id="livestockSpecification"
                    autocomplete="off" required oninvalid="setCustomValidity('Please enter the specification.')"
                    oninput="setCustomValidity('')">
            </div>

            <div class="col-md-2 mb-2">
                <label for="livestockMachineAmounts" class="form-label label-style">Amount</label>
                <input type="text" class="form-control" name="livestockMachineAmounts[]" id="livestockMachineAmounts"
                    autocomplete="off" required oninvalid="setCustomValidity('Please enter the amount.')"
                    oninput="setCustomValidity('')">
            </div>

            <div class="row">
                <div class="col-md-2 mb-2">
                    <label for="livestockServiceTypes" class="form-label label-style">Status</label>
                    <select id="livestockServiceTypes" name="livestockServiceTypes[]" class="form-select" required
                        oninvalid="setCustomValidity('Please select the status.')" oninput="setCustomValidity('')">
                        <option value="" disabled selected>Select Status</option>
                        <option value="Functional">Functional</option>
                        <option value="Non-Functional">Non-Functional</option>
                    </select>
                </div>

                <div class="col-md-3 mb-2">
                    <label for="livestockFundingAgency" class="form-label label-style">Funding Agency</label>
                    <select id="livestockFundingAgency" name="livestockFundingAgency[]" class="form-select" required
                        oninvalid="setCustomValidity('Please select the funding agency.')"
                        oninput="setCustomValidity('')">
                        <option value="" disabled selected>Select Agency</option>
                        @foreach ($agencyValues as $id => $key)
                            <option value="{{ $id }}">{{ $key }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-3 mb-2">
                    <label for="livestockFundSource" class="form-label label-style">Fund Source</label>
                    <select id="livestockFundSource" name="livestockFundSource[]" class="form-select" required
                        oninvalid="setCustomValidity('Please select the fund source.')" oninput="setCustomValidity('')">
                        <option value="" disabled selected>Select Fund Source</option>
                        @foreach ($sourceValues as $id => $key)
                            <option value="{{ $id }}">{{ $key }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-3 mb-2">
                    <label for="livestockMoa" class="form-label label-style">MOA/DOD</label>
                    <input type="file" class="form-control" name="livestockMoa[]" id="livestockMoa" required
                        oninvalid="setCustomValidity('Please attach the MOA/DOD.')" oninput="setCustomValidity('')">
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 mb-2">
                    <label for="livestockCoa" class="form-label label-style">Certificate of Acceptance</label>
                    <input type="file" class="form-control" name="livestockCoa[]" id="livestockCoa" required
                        oninvalid="setCustomValidity('Please attach the certificate of acceptance.')"
                        oninput="setCustomValidity('')">
                </div>

                <div class="col-md-3 mb-2">
                    <label for="livestockGeoTaggedPic" class="form-label label-style">Geo-Tagged Picture</label>
                    <input type="file" class="form-control" name="livestockGeoTaggedPic[]"
                        id="livestockGeoTaggedPic" required
                        oninvalid="setCustomValidity('Please attach the geo-tagged picture.')"
                        oninput="setCustomValidity('')">
                </div>

                <div class="col-md-3 mb-2">
                    <label for="livestockCms" class="form-label label-style">CMS</label>
                    <input type="file" class="form-control" name="livestockCms[]" id="livestockCms" required
                        oninvalid="setCustomValidity('Please attach the CMS.')" oninput="setCustomValidity('')">
                </div>
            </div>
            <div x-show="index > 0">
                <div class="col-md-2 mb-2 d-flex mt-auto">
                    <button x-on:click="removeRow(index)" type="button" class="btn btn-danger">Remove</button>
                </div>
            </div>
            <hr>
        </div>
    </template>
    <div class="col-md-1 mb-2 d-flex mt-auto">
        <button x-on:click="addRow()" type="button" class="btn btn-success">Add more</button>
    </div>
</div>

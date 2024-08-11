<h2 class="bg-success text-white p-2 text-center">Facilities</h2>

<div x-data="facilitiesAddRow()">
    <template x-for="(row,index) in rows" :key="row.id">
        <div class="row">
            <div class="col-md-4 mb-2">
                <label for="associationName" class="form-label label-style">Association Name</label>
                <input type="text" class="form-control" name="facilitiesAssociationName[]" id="associationName"
                    autocomplete="off" value="{{ $associationProfile->association }}" readonly>
            </div>

            <div class="col-md-3 mb-2">
                <label for="interventions" class="form-label label-style">Interventions</label>
                <select id="interventions" name="facilitiesInterventions[]" class="form-select" required
                    oninvalid="setCustomValidity('Please select an intervention.')" oninput="setCustomValidity('')">
                    <option value="" disabled selected>Select Interventions</option>
                    @foreach ($facilityValues as $id => $key)
                        <option value="{{ $id }}">{{ $key }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-2 mb-2">
                <label for="specification" class="form-label label-style">Specification</label>
                <input type="text" class="form-control" name="facilitiesSpecification[]" id="specification"
                    autocomplete="off" required oninvalid="setCustomValidity('Please enter the specification.')"
                    oninput="setCustomValidity('')">
            </div>

            <div class="col-md-2 mb-2">
                <label for="amount" class="form-label label-style">Amount</label>
                <input type="text" class="form-control" name="facilitiesMachineAmounts[]" id="amount"
                    autocomplete="off" required oninvalid="setCustomValidity('Please enter the amount.')"
                    oninput="setCustomValidity('')">
            </div>

            <div class="row">
                <div class="col-md-2 mb-2">
                    <label for="typeSelected" class="form-label label-style">Status</label>
                    <select id="typeSelected" name="facilitiesServiceTypes[]" class="form-select" required
                        oninvalid="setCustomValidity('Please select the status.')" oninput="setCustomValidity('')">
                        <option value="" disabled selected>Select Status</option>
                        <option value="Functional">Functional</option>
                        <option value="Non-Functional">Non-Functional</option>
                    </select>
                </div>

                <div class="col-md-3 mb-2">
                    <label for="fund_agency" class="form-label label-style">Funding Agency</label>
                    <select id="fund_agency" name="facilitiesFundingAgency[]" class="form-select" required
                        oninvalid="setCustomValidity('Please select the funding agency.')"
                        oninput="setCustomValidity('')">
                        <option value="" disabled selected>Select Agency</option>
                        @foreach ($agencyValues as $id => $key)
                            <option value="{{ $id }}">{{ $key }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-3 mb-2">
                    <label for="fund_source" class="form-label label-style">Fund Source</label>
                    <select id="fund_source" name="facilitiesFundSource[]" class="form-select" required
                        oninvalid="setCustomValidity('Please select the fund source.')" oninput="setCustomValidity('')">
                        <option value="" disabled selected>Select Fund Source</option>
                        @foreach ($sourceValues as $id => $key)
                            <option value="{{ $id }}">{{ $key }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-3 mb-2">
                    <label for="moa" class="form-label label-style">MOA/DOD</label>
                    <input type="file" class="form-control" name="facilitiesMoa[]" id="moa" required
                        oninvalid="setCustomValidity('Please attach the MOA/DOD.')"
                        oninput="setCustomValidity('')">
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 mb-2">
                    <label for="COA" class="form-label label-style">Certificate of Acceptance</label>
                    <input type="file" class="form-control" name="facilitiesCoa[]" id="COA" required
                        oninvalid="setCustomValidity('Please attach the certificate of acceptance.')"
                        oninput="setCustomValidity('')">
                </div>

                <div class="col-md-3 mb-2">
                    <label for="geoTaggedPic" class="form-label label-style">Geo-Tagged Picture</label>
                    <input type="file" class="form-control" name="facilitiesGeoTaggedPic[]" id="geoTaggedPic"
                        required oninvalid="setCustomValidity('Please attach the geo-tagged picture.')"
                        oninput="setCustomValidity('')">
                </div>

                <div class="col-md-3 mb-2">
                    <label for="CMS" class="form-label label-style">CMS</label>
                    <input type="file" class="form-control" name="facilitiesCms[]" id="CMS" required
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

<h2 class="bg-success text-white p-2 text-center">Machineries</h2>

<div x-data="machineriesAddRow()">
    <template x-for="(row,index) in rows" :key="row.id">
        <div class="row">
            <div class="col-md-4 mb-2">
                <label for="associationName" class="form-label label-style">Association Name</label>
                <input type="text" class="form-control" name="associationName[]" id="associationName" autocomplete="off"
                    value="{{ $associationProfile->association }}" readonly>
            </div>

            <div class="col-md-3 mb-2">
                <label for="interventions" class="form-label label-style">Interventions</label>
                <select id="interventions" name="intervention[]" class="form-select" required
                    oninvalid="setCustomValidity('Please select an intervention.')" oninput="setCustomValidity('')">
                    <option value="" disabled selected>Select Interventions</option>
                    @foreach ($equipmentValues as $id => $value)
                        <option value="{{ $id }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-2 mb-2">
                <label for="specification" class="form-label label-style">Specification</label>
                <input type="text" class="form-control" name="specification[]" id="specification" autocomplete="off"
                    required oninvalid="setCustomValidity('Please enter the specification.')"
                    oninput="setCustomValidity('')">
                @error('specification')
                    <span class="fs-6 text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-md-2 mb-2">
                <label for="amount" class="form-label label-style">Amount</label>
                <input type="text" class="form-control" name="machineAmount[]" id="amount" autocomplete="off"
                    required oninvalid="setCustomValidity('Please enter the amount.')" oninput="setCustomValidity('')">
                @error('machineAmount')
                    <span class="fs-6 text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="row">
                <div class="col-md-2 mb-2">
                    <label for="typeSelected" class="form-label label-style">Status</label>
                    <select id="typeSelected" name="serviceTypes[]" class="form-select" required
                        oninvalid="setCustomValidity('Please select a status.')" oninput="setCustomValidity('')">
                        <option value="" disabled selected>Select Status</option>
                        <option value="Functional">Functional</option>
                        <option value="Non-Functional">Non-Functional</option>
                    </select>
                </div>

                <div class="col-md-3 mb-2">
                    <label for="fundingAgency" class="form-label label-style">Funding Agency</label>
                    <select id="fundingAgency" name="fundingAgency[]" class="form-select" required
                        oninvalid="setCustomValidity('Please select the funding agency.')"
                        oninput="setCustomValidity('')">
                        <option value="" disabled selected>Select Agency</option>
                        @foreach ($agencyValues as $id => $value)
                            <option value="{{ $id }}">{{ $value }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-3 mb-2">
                    <label for="fundSource" class="form-label label-style">Fund Source</label>
                    <select id="fundSource" name="fundSource[]" class="form-select" required
                        oninvalid="setCustomValidity('Please select the fund source.')" oninput="setCustomValidity('')">
                        <option value="" disabled selected>Select Fund Source</option>
                        @foreach ($sourceValues as $id => $value)
                            <option value="{{ $id }}">{{ $value }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-3 mb-2">
                    <label for="engineNumber" class="form-label label-style">Engine/Serial Number</label>
                    <input type="file" class="form-control" name="engineNumber[]" id="engineNumber" required
                        oninvalid="setCustomValidity('Please attach the engine/serial number.')"
                        oninput="setCustomValidity('')">
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 mb-2">
                    <label for="machineriesMoa" class="form-label label-style">MOA/DOD</label>
                    <input type="file" class="form-control" name="machineriesMoa[]" id="machineriesMoa" required
                        oninvalid="setCustomValidity('Please attach the MOA/DOD.')" oninput="setCustomValidity('')">
                </div>

                <div class="col-md-3 mb-2">
                    <label for="machineriesCoa" class="form-label label-style">Certificate of Acceptance</label>
                    <input type="file" class="form-control" name="machineriesCoa[]" id="machineriesCoa" required
                        oninvalid="setCustomValidity('Please attach the certificate of acceptance.')"
                        oninput="setCustomValidity('')">
                </div>

                <div class="col-md-3 mb-2">
                    <label for="machineriesGeoTaggedPicture" class="form-label label-style">Geo-Tagged Picture</label>
                    <input type="file" class="form-control" name="machineriesGeoTaggedPicture[]"
                        id="machineriesGeoTaggedPicture" required
                        oninvalid="setCustomValidity('Please attach the geo-tagged picture.')"
                        oninput="setCustomValidity('')">
                </div>

                <div class="col-md-3 mb-2">
                    <label for="machineriesCms" class="form-label label-style">CMS</label>
                    <input type="file" class="form-control" name="machineriesCms[]" id="machineriesCms" required
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

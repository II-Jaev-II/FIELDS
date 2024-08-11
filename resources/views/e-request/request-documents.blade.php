<label for="requestNature" class="form-label label-style">Nature of Request</label>
<div x-data="{ selectedOption: `{{ old('request-radioButton') }}` }" x-cloak>

    @include('e-request.request-radio-buttons')

    @include('e-request.request-multi-dropdown')

    <hr>

    <input type="hidden" name="request-radioButton" x-model="selectedOption">

    <div x-show="selectedOption === 'Machinery' || selectedOption === 'Facility' || selectedOption === 'Tools' || selectedOption === 'Equipments' || selectedOption === 'Agricultural' || selectedOption === 'Others'"
        x-cloak style="display: none !important">
        <div class="row mb-2">

            <input type="text" class="form-control" name="province" id="province"
                value="{{ $associationProfile->province_name }}" readonly hidden>

            <div class="col-md-6">
                <label for="letterIntent" class="form-label label-style">Letter of Intent</label>
                <input type="file" class="form-control" name="letterIntent" id="letterIntent">
                <div>
                    @error('letterIntent')
                        <span class="fs-6 text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <label for="boardResolution" class="form-label label-style">Board Resolution</label>
                <input type="file" class="form-control" name="boardResolution" id="boardResolution">
                <div>
                    @error('boardResolution')
                        <span class="fs-6 text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

        </div>

        <div class="row mb-2">

            <div class="col-md-6">
                <label for="endorsementLetter" class="form-label label-style">Endorsement Letter from
                    MAO/CAO/PAO</label>
                <input type="file" class="form-control" name="endorsementLetter" id="endorsementLetter">
                <div>
                    @error('endorsementLetter')
                        <span class="fs-6 text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <label for="endorsementLetter2" class="form-label label-style">Endorsement Letter from
                    MAFC/CAFC</label>
                <input type="file" class="form-control" name="endorsementLetter2" id="endorsementLetter2">
                <div>
                    @error('endorsementLetter2')
                        <span class="fs-6 text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

        </div>

        <div class="row mb-2">

            <div class="col-md-6">
                <label for="certificateAvailability" class="form-label label-style">Certificate of Availability of
                    Funds/Photocopy of Passbook</label>
                <input type="file" class="form-control" name="certificateAvailability" id="certificateAvailability">
                <div>
                    @error('certificateAvailability')
                        <span class="fs-6 text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <label for="machineriesProposal" class="form-label label-style">Machineries and Equipment
                    Utilization
                    Proposal</label>
                <input type="file" class="form-control" name="machineriesProposal" id="machineriesProposal">
                <div>
                    @error('machineriesProposal')
                        <span class="fs-6 text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

        </div>

        <div class="row mb-2">

            <div class="col-md-6">
                <label for="geoTaggedPhotos" class="form-label label-style">Geo-tagged Photos of Existing
                    Shed</label>
                <input type="file" class="form-control" name="geoTaggedPhotos" id="geoTaggedPhotos">
                <div>
                    @error('geoTaggedPhotos')
                        <span class="fs-6 text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <label for="geoTaggedLocation" class="form-label label-style">Geo-tagged Location of the
                    Service
                    Area</label>
                <input type="file" class="form-control" name="geoTaggedLocation" id="geoTaggedLocation">
                <div>
                    @error('geoTaggedLocation')
                        <span class="fs-6 text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

        </div>

        <div class="row mb-2">

            <div class="col-md-6">
                <label for="businessPlan" class="form-label label-style">Business Plan</label>
                <input type="file" class="form-control" name="businessPlan" id="businessPlan">
                <div>
                    @error('businessPlan')
                        <span class="fs-6 text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-md-6" x-show="selectedOption === 'Machinery'">
                <label for="usufruct" class="form-label label-style">USUFRUCT</label>
                <input type="file" class="form-control" name="usufruct" id="usufruct">
                <div>
                    @error('usufruct')
                        <span class="fs-6 text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

        </div>
    </div>

    <div x-show="selectedOption === 'Animals'" x-cloak style="display: none !important">
        <div class="row mb-2">
            <div class="col-md-6">
                <label for="animalLetterIntent" class="form-label label-style">Letter of Intent</label>
                <input type="file" class="form-control" name="animalLetterIntent" id="animalLetterIntent">
                <div>
                    @error('animalLetterIntent')
                        <span class="fs-6 text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <label for="animalEndorsementLetter2" class="form-label label-style">Endorsement Letter from
                    MAFC/CAFC</label>
                <input type="file" class="form-control" name="animalEndorsementLetter2"
                    id="animalEndorsementLetter2">
                <div>
                    @error('animalEndorsementLetter2')
                        <span class="fs-6 text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-6">
                <label for="geoTaggedHousing" class="form-label label-style">Geo-tagged Photos of Housing</label>
                <input type="file" class="form-control" name="geoTaggedHousing" id="geoTaggedHousing">
                <div>
                    @error('geoTaggedHousing')
                        <span class="fs-6 text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <label for="geoTaggedForage" class="form-label label-style">Geo-tagged Photos of Forage Area</label>
                <input type="file" class="form-control" name="geoTaggedForage" id="geoTaggedForage">
                <div>
                    @error('geoTaggedForage')
                        <span class="fs-6 text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-6">
                <label for="productionManagementPlan" class="form-label label-style">Production Management
                    Plan</label>
                <input type="file" class="form-control" name="productionManagementPlan"
                    id="productionManagementPlan">
                <div>
                    @error('productionManagementPlan')
                        <span class="fs-6 text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>

@if ($ERequest->natureOfRequest === 'Animals')
    <div class="row mb-2">
        <div class="col-md-6">
            <label for="letterIntent" class="form-label label-style">Letter of Intent</label>
            <div>
                <a href="{{ asset($ERequest->letterOfIntent) }}" target="_blank">View Letter of Intent</a>
            </div>
        </div>

        <div class="col-md-6">
            <label for="endorsementLetter2" class="form-label label-style">Endorsement Letter from
                MAFC/CAFC</label>
            <div>
                <a href="{{ asset($ERequest->endorsementLetter2) }}" target="_blank">View Endorsement Letter from
                    MAFC/CAFC</a>
            </div>
        </div>
    </div>

    <div class="row mb-2">

        <div class="col-md-6">
            <label for="geoTaggedPhotos" class="form-label label-style">Geo-tagged Photos of Housing</label>
            <div>
                <a href="{{ asset($ERequest->geoTaggedPhotos) }}" target="_blank">View Geo-tagged Photos of Housing</a>
            </div>
        </div>

        <div class="col-md-6">
            <label for="geoTaggedLocation" class="form-label label-style">Geo-tagged Location of the
                Forage Area</label>
            <div>
                <a href="{{ asset($ERequest->geoTaggedLocation) }}" target="_blank">View Geo-tagged Location of the
                    Forage Area</a>
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-6">
            <label for="productionManagementPlan" class="form-label label-style">Production Management Plan</label>
            <div>
                <a href="{{ asset($ERequest->productionManagementPlan) }}" target="_blank">View Production Management
                    Plan</a>
            </div>
        </div>
    </div>
@elseif ($ERequest->natureOfRequest === 'Machinery')
    <div class="row mb-2">

        <div class="col-md-6">
            <label for="letterIntent" class="form-label label-style">Letter of Intent</label>
            <div>
                <a href="{{ asset($ERequest->letterOfIntent) }}" target="_blank">View Letter of Intent</a>
            </div>
        </div>

        <div class="col-md-6">
            <label for="boardResolution" class="form-label label-style">Board Resolution</label>
            <div>
                <a href="{{ asset($ERequest->boardResolution) }}" target="_blank">View Board Resolution</a>
            </div>
        </div>

    </div>

    <div class="row mb-2">

        <div class="col-md-6">
            <label for="endorsementLetter" class="form-label label-style">Endorsement Letter from
                MAO/CAO/PAO</label>
            <div>
                <a href="{{ asset($ERequest->endorsementLetter1) }}" target="_blank">View Endorsement Letter from
                    MAO/CAO/PAO</a>
            </div>
        </div>

        <div class="col-md-6">
            <label for="endorsementLetter2" class="form-label label-style">Endorsement Letter from
                MAFC/CAFC</label>
            <div>
                <a href="{{ asset($ERequest->endorsementLetter2) }}" target="_blank">View Endorsement Letter from
                    MAFC/CAFC</a>
            </div>
        </div>

    </div>

    <div class="row mb-2">

        <div class="col-md-6">
            <label for="certificateAvailability" class="form-label label-style">Certificate of Availability of
                Funds/Photocopy of Passbook</label>
            <div>
                <a href="{{ asset($ERequest->certificateOfAvailability) }}" target="_blank">View Certificate of
                    Availability
                    of Funds/Photocopy of Passbook</a>
            </div>
        </div>

        <div class="col-md-6">
            <label for="machineriesProposal" class="form-label label-style">Machineries and Equipment
                Utilization
                Proposal</label>
            <div>
                <a href="{{ asset($ERequest->machineriesProposal) }}" target="_blank">View Machineries and Equipment
                    Utilization Proposal</a>
            </div>
        </div>
    </div>

    <div class="row mb-2">

        <div class="col-md-6">
            <label for="geoTaggedPhotos" class="form-label label-style">Geo-tagged Photos of Existing
                Shed</label>
            <div>
                <a href="{{ asset($ERequest->geoTaggedPhotos) }}" target="_blank">View Geo-tagged Photos of Existing
                    Shed</a>
            </div>
        </div>

        <div class="col-md-6">
            <label for="geoTaggedLocation" class="form-label label-style">Geo-tagged Location of the
                Service
                Area</label>
            <div>
                <a href="{{ asset($ERequest->geoTaggedLocation) }}" target="_blank">View Geo-tagged Location of the
                    Service
                    Area</a>
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-6">
            <label for="businessPlan" class="form-label label-style">Business Plan</label>
            <div>
                <a href="{{ asset($ERequest->businessPlan) }}" target="_blank">View Business Plan</a>
            </div>
        </div>

        <div class="col-md-6">
            <label for="usufruct" class="form-label label-style">USUFRUCT</label>
            <div>
                <a href="{{ asset($ERequest->usufruct) }}" target="_blank">View USUFRUCT</a>
            </div>
        </div>
    </div>
@else
    <div class="row mb-2">

        <div class="col-md-6">
            <label for="letterIntent" class="form-label label-style">Letter of Intent</label>
            <div>
                <a href="{{ asset($ERequest->letterOfIntent) }}" target="_blank">View Letter of Intent</a>
            </div>
        </div>

        <div class="col-md-6">
            <label for="boardResolution" class="form-label label-style">Board Resolution</label>
            <div>
                <a href="{{ asset($ERequest->boardResolution) }}" target="_blank">View Board Resolution</a>
            </div>
        </div>

    </div>

    <div class="row mb-2">

        <div class="col-md-6">
            <label for="endorsementLetter" class="form-label label-style">Endorsement Letter from
                MAO/CAO/PAO</label>
            <div>
                <a href="{{ asset($ERequest->endorsementLetter1) }}" target="_blank">View Endorsement Letter from
                    MAO/CAO/PAO</a>
            </div>
        </div>

        <div class="col-md-6">
            <label for="endorsementLetter2" class="form-label label-style">Endorsement Letter from
                MAFC/CAFC</label>
            <div>
                <a href="{{ asset($ERequest->endorsementLetter2) }}" target="_blank">View Endorsement Letter from
                    MAFC/CAFC</a>
            </div>
        </div>

    </div>

    <div class="row mb-2">

        <div class="col-md-6">
            <label for="certificateAvailability" class="form-label label-style">Certificate of Availability of
                Funds/Photocopy of Passbook</label>
            <div>
                <a href="{{ asset($ERequest->certificateOfAvailability) }}" target="_blank">View Certificate of
                    Availability
                    of Funds/Photocopy of Passbook</a>
            </div>
        </div>

        <div class="col-md-6">
            <label for="machineriesProposal" class="form-label label-style">Machineries and Equipment
                Utilization
                Proposal</label>
            <div>
                <a href="{{ asset($ERequest->machineriesProposal) }}" target="_blank">View Machineries and Equipment
                    Utilization Proposal</a>
            </div>
        </div>
    </div>

    <div class="row mb-2">

        <div class="col-md-6">
            <label for="geoTaggedPhotos" class="form-label label-style">Geo-tagged Photos of Existing
                Shed</label>
            <div>
                <a href="{{ asset($ERequest->geoTaggedPhotos) }}" target="_blank">View Geo-tagged Photos of Existing
                    Shed</a>
            </div>
        </div>

        <div class="col-md-6">
            <label for="geoTaggedLocation" class="form-label label-style">Geo-tagged Location of the
                Service
                Area</label>
            <div>
                <a href="{{ asset($ERequest->geoTaggedLocation) }}" target="_blank">View Geo-tagged Location of the
                    Service
                    Area</a>
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-6">
            <label for="businessPlan" class="form-label label-style">Business Plan</label>
            <div>
                <a href="{{ asset($ERequest->businessPlan) }}" target="_blank">View Business Plan</a>
            </div>
        </div>
    </div>
@endif

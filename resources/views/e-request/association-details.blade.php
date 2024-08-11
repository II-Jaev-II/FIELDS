<div class="col-md-8 mb-2 mt-3">
    <label for="associationName" class="form-label label-style">Association Name</label>
    <input type="text" class="form-control" name="associationName" id="associationName"
        value="{{ $associationProfile->association }}" readonly>
</div>

<div class="row mb-2">
    <div class="col-md-6">
        <label for="representativeName" class="form-label label-style">Certificate of
            Registration</label>
        <div>
            <a href="{{ asset($associationProfile->registrationCertificate) }}" target="_blank">View File</a>
        </div>
    </div>

    <div class="col-md-6">
        <label for="representativeName" class="form-label label-style">COC</label>
        <div>
            <a href="{{ asset($associationProfile->goodStandingCertificate) }}" target="_blank">View File</a>
        </div>
    </div>
</div>

<div class="col-md-8 mb-2">
    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
    <label for="representativeName" class="form-label label-style">Name of
        President/Chairman</label>
    <input type="text" class="form-control" name="representativeName" id="representativeName"
        value="{{ $presidentProfile->firstName . ' ' . $presidentProfile->middleName . ' ' . $presidentProfile->lastName }}"
        readonly>
</div>

<div class="col-md-10 mb-2">
    <label for="presidentAddress" class="form-label label-style">Address</label>
    <input type="text" class="form-control" name="presidentAddress" id="presidentAddress"
        value="{{ $presidentProfile->barangay_name . ', ' . $presidentProfile->municipality_name . ', ' . $presidentProfile->province_name }}"
        readonly>
</div>

<div class="mb-2 row">

    <div class="col-md-6 mb-2">
        <label for="houseNumber1" class="form-label label-style">House Number</label>
        <input type="text" class="form-control" name="presidentHouseNumber" id="houseNumber"
            value="{{ $presidentProfile->houseNumber }}" readonly>
    </div>

    <div class="col-md-6 mb-2">
        <label for="streetName1" class="form-label label-style">Street</label>
        <input type="text" class="form-control" name="presidentStreetName" id="streetName"
            value="{{ $presidentProfile->street }}" readonly>
    </div>

</div>

<input type="hidden" name="officeRadio" value="{{ $associationProfile->office }}">

<div class="col-sm-12 mb-2 mt-2">
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="officeRadios" id="cda-radio" value="CDA"
            @if ($associationProfile->office === 'CDA') checked @endif disabled>
        <label class="form-check-label" for="cda-radio">
            CDA
        </label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="officeRadios" id="dole-radio"
            @if ($associationProfile->office === 'DOLE') checked @endif disabled>
        <label class="form-check-label" for="dole-radio">
            DOLE
        </label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="officeRadios" id="sec-radio"
            @if ($associationProfile->office === 'SEC') checked @endif disabled>
        <label class="form-check-label" for="sec-radio">
            SEC
        </label>
    </div>
</div>

<div class="row">
    <div class="col-md-4 mb-2 mt-2">
        <label for="contactNumber" class="form-label label-style">Contact Number</label>
        <input type="text" class="form-control" name="contactNumber" id="contactNumber"
            value="{{ $presidentProfile->contactNumber }}" readonly>
    </div>
    <div class="col-md-8 mb-2 mt-2">
        <label for="contactNumber" class="form-label label-style">Email Address</label>
        <input type="text" class="form-control" name="emailAddress" id="emailAddress"
            value="{{ $associationProfile->email }}" readonly>
    </div>
    <div class="col-md-4 mt-2 mb-2">
        <label for="birthday" class="form-label label-style">Birthday</label>
        <input type="text" class="form-control" name="birthdate" id="birthday"
            value="{{ $presidentProfile->birthDate }}" readonly>
    </div>
</div>

<div class="row">
    <div class="col-sm-3">
        <label for="maleCount" class="form-label label-style">Male</label>
        <input type="text" class="form-control js-male-count" name="maleCount" id="maleCount"
            value="{{ $memberProfile->maleCount }}" readonly>
    </div>
    <div class="col-sm-3">
        <label for="femaleCount" class="form-label label-style">Female</label>
        <input type="text" class="form-control js-female-count" name="femaleCount"
            value="{{ $memberProfile->femaleCount }}" id="femaleCount" value="" readonly>

    </div>

    <input type="text" class="form-control js-total" name="totalCount" id="totalCount"
        value="{{ $memberProfile->totalCount }}" readonly hidden>

    <div class="col-md-3 mb-2">
        <label for="serviceArea" class="form-label label-style">Service Area</label>
        <input type="text" class="form-control" name="serviceArea" id="serviceArea"
            value="{{ $memberProfile->serviceArea }}" readonly>
    </div>


</div>

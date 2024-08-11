<h2 class="bg-success text-white mt-2 p-2 text-center rounded-3">Association Profile</h2>

<input type="hidden" name="user_id" value="{{ Auth::id() }}">

<div class="col-md-4 mb-2">
    <label for="associationName" class="form-label label-style">Name of Association/Cooperative</label>
    <input type="text" class="form-control" name="associationName" id="associationName" autocomplete="off"
        value="{{ old('associationName', optional($associationProfile)->association) }}" readonly>
</div>

<div class="row">

    <input type="text" class="form-control" value="Region 1" id="region" name="assocRegion" hidden>
    <div class="col-md-4 mb-2">
        <label for="provinceName" class="form-label label-style">Province</label>
        <input type="text" class="form-control" name="provinceName" id="provinceName" autocomplete="off"
            value="{{ old('provinceName', optional($associationProfile)->province_name) }}" readonly>
    </div>
    <div class="col-md-4 mb-2">
        <label for="municipalityName" class="form-label label-style">Municipality</label>
        <input type="text" class="form-control" name="municipalityName" id="municipalityName" autocomplete="off"
            value="{{ old('municipalityName', optional($associationProfile)->municipality_name) }}" readonly>
    </div>
    <div class="col-md-4 mb-2">
        <label for="districtName" class="form-label label-style">District</label>
        <input type="text" class="form-control" name="districtName" id="districtName" autocomplete="off"
            value="{{ old('districtName', optional($associationProfile)->district_name) }}" readonly>
    </div>
    <div class="col-md-4 mb-2">
        <label for="barangayName" class="form-label label-style">Barangay</label>
        <input type="text" class="form-control" name="barangayName" id="barangayName" autocomplete="off"
            value="{{ old('barangayName', optional($associationProfile)->barangay_name) }}" readonly>
    </div>

</div>

<div class="row">

    <div class="col-md-2 mb-2">
        <label for="houseNumber" class="form-label label-style">House Number</label>
        <input type="text" class="form-control" name="houseNumber" id="houseNumber" autocomplete="off"
            value="{{ old('houseNumber', optional($associationProfile)->houseNumber) }}" readonly>
    </div>

    <div class="col-md-2 mb-2">
        <label for="streetName" class="form-label label-style">Street</label>
        <input type="text" class="form-control" name="streetName" id="streetName" autocomplete="off"
            value="{{ old('streetName', optional($associationProfile)->street) }}" readonly>
    </div>

    <div class="col-sm-1 mb-2">
        <label for="zipCode" class="form-label label-style">Zip Code</label>
        <input type="text" class="form-control" name="zipCode" id="zipCode" maxlength="4"
            oninput="this.value = this.value.replace(/[^0-9]/g,'')" autocomplete="off"
            value="{{ old('zipCode', optional($associationProfile)->zipCode) }}" readonly>
    </div>

</div>

<div class="col-sm-12 mb-2">
    <div class="form-check form-check-inline">
        <input disabled class="form-check-input" type="radio" name="officeRadio" id="cda-radio" value="CDA"
            @if (old('officeRadio', optional($associationProfile)->office) === 'CDA') checked @endif>
        <label class="form-check-label label-style" for="cda-radio">
            CDA
        </label>
    </div>
    <div class="form-check form-check-inline">
        <input disabled class="form-check-input" type="radio" name="officeRadio" id="dole-radio" value="DOLE"
            @if (old('officeRadio', optional($associationProfile)->office) === 'DOLE') checked @endif>
        <label class="form-check-label label-style" for="dole-radio">
            DOLE
        </label>
    </div>
    <div class="form-check form-check-inline">
        <input disabled class="form-check-input" type="radio" name="officeRadio" id="sec-radio" value="SEC"
            @if (old('officeRadio', optional($associationProfile)->office) === 'SEC') checked @endif>
        <label class="form-check-label label-style" for="sec-radio">
            SEC
        </label>
    </div>
</div>

<div class="col-md-3 mb-2">
    <label for="emailAddress" class="form-label label-style">Email</label>
    <input type="email" class="form-control" name="emailAddress" id="emailAddress" autocomplete="off"
        value="{{ old('emailAddress', optional($associationProfile)->email) }}" readonly>
</div>

<div class="row">
    <div class="col-md-2 mb-2">
        <label for="registrationNumber" class="form-label label-style">Registration Number</label>
        <input type="text" class="form-control" name="registrationNumber" id="registrationNumber"
            autocomplete="off"
            value="{{ old('registrationNumber', optional($associationProfile)->registrationNumber) }}" readonly>
    </div>

    <div class="col-md-2 mb-2">
        <label for="registrationDate" class="form-label label-style">Date of Registration</label>
        <input type="date" class="form-control" name="registrationDate" id="registrationDate"
            value="{{ old('registrationDate', optional($associationProfile)->registrationDate) }}" readonly>
    </div>

    <div class="col-md-3 mb-2">
        <label for="certificateOfRegistration" class="form-label label-style">Certificate of Registration</label>
        <div>
            <a href="{{ asset($associationProfile->registrationCertificate) }}" target="_blank">View Certificate
                of Registration</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-2 mb-2">
        <label for="expirationDate" class="form-label label-style">Expiration Date</label>
        <input type="date" class="form-control" name="expirationDate" id="expirationDate"
            value="{{ old('expirationDate', optional($associationProfile)->expirationDate) }}" readonly>
    </div>

    <div class="col-md-3 mb-2">
        <label for="certificateOfGoodStanding" class="form-label label-style">Certificate of Good
            Standing</label>
        <div>
            <a href="{{ asset($associationProfile->goodStandingCertificate) }}" target="_blank">View Certificate
                of Good Standing</a>
        </div>
    </div>
</div>

<div class="row mt-2">
    <div class="col-md-3 mb-2">
        <label for="lawsFile" class="form-label label-style">Approved by Laws</label>
        <div>
            <a href="{{ asset($associationProfile->approvedByLaws) }}" target="_blank">View Approved by Laws</a>
        </div>
    </div>

    <div class="col-md-3 mb-2">
        <label for="latestFinancialStatement" class="form-label label-style">Latest Audited Financial
            Statement</label>
        <div>
            <a href="{{ asset($associationProfile->latestAuditedFinancialStatement) }}" target="_blank">View
                Latest
                Audited Financial Statement</a>
        </div>
    </div>
</div>

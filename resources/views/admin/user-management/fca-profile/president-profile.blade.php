<h2 class="bg-success text-white p-2 text-center rounded-3">President Profile</h2>
<div class="row">
    <div class="col-md-3 mb-2">
        <label for="firstName" class="form-label label-style">First name</label>
        <input type="text" class="form-control" name="firstName" id="firstName" autocomplete="off"
            value="{{ old('firstName', optional($presidentProfile)->firstName) }}" readonly>
    </div>

    <div class="col-md-3 mb-2">
        <label for="middleName" class="form-label label-style">Middle name</label>
        <input type="text" class="form-control" name="middleName" id="middleName" autocomplete="off"
            value="{{ old('middleName', optional($presidentProfile)->middleName) }}" readonly>
    </div>

    <div class="col-md-3 mb-2">
        <label for="lastName" class="form-label label-style">Last name</label>
        <input type="text" class="form-control" name="lastName" id="lastName" autocomplete="off"
            value="{{ old('lastName', optional($presidentProfile)->lastName) }}" readonly>
    </div>

    <div class="col-md-3 mb-2">
        <label for="suffix" class="form-label label-style">Suffix</label>
        <input type="text" class="form-control" name="suffix" id="suffix" style="width: 70px;" autocomplete="off"
            value="{{ old('suffix', optional($presidentProfile)->suffix) }}" readonly>
    </div>
</div>

<div class="row">
    <div class="col-md-4 mb-2">
        <label for="provinceName" class="form-label label-style">Province</label>
        <input type="text" class="form-control" name="provinceName" id="provinceName" autocomplete="off"
            value="{{ old('provinceName', optional($presidentProfile)->province_name) }}" readonly>
    </div>
    <div class="col-md-4 mb-2">
        <label for="municipalityName" class="form-label label-style">Municipality</label>
        <input type="text" class="form-control" name="municipalityName" id="municipalityName" autocomplete="off"
            value="{{ old('municipalityName', optional($presidentProfile)->municipality_name) }}" readonly>
    </div>
    <div class="col-md-4 mb-2">
        <label for="districtName" class="form-label label-style">District</label>
        <input type="text" class="form-control" name="districtName" id="districtName" autocomplete="off"
            value="{{ old('districtName', optional($presidentProfile)->district_name) }}" readonly>
    </div>
    <div class="col-md-4 mb-2">
        <label for="barangayName" class="form-label label-style">Barangay</label>
        <input type="text" class="form-control" name="barangayName" id="barangayName" autocomplete="off"
            value="{{ old('barangayName', optional($presidentProfile)->barangay_name) }}" readonly>
    </div>
</div>

<div class="row">

    <div class="col-md-2 mb-2">
        <label for="presidentHouseNumber" class="form-label label-style">House Number</label>
        <input type="text" class="form-control" name="presidentHouseNumber" id="presidentHouseNumber"
            autocomplete="off" value="{{ old('presidentHouseNumber', optional($presidentProfile)->houseNumber) }}"
            readonly>
    </div>

    <div class="col-md-2 mb-2">
        <label for="presidentStreetName" class="form-label label-style">Street</label>
        <input type="text" class="form-control" name="presidentStreetName" id="presidentStreetName"
            autocomplete="off" value="{{ old('street', optional($presidentProfile)->street) }}" readonly>
    </div>

    <div class="col-md-1 mb-2">
        <label for="presidentZipCode" class="form-label label-style">Zip Code</label>
        <input type="text" class="form-control" maxlength="4"
            oninput="this.value = this.value.replace(/[^0-9]/g,'')" name="presidentZipCode" id="presidentZipCode"
            autocomplete="off" autocomplete="off"
            value="{{ old('presidentZipCode', optional($presidentProfile)->zipCode) }}" readonly>
    </div>

</div>
<div class="form-check form-check-inline">
    <input disabled class="form-check-input" type="radio" name="positionRadio" id="president-radio"
        value="President" @if (old('positionRadio', optional($presidentProfile)->position) === 'President') checked @endif>
    <label class="form-check-label label-style" for="president-radio">
        President
    </label>
</div>
<div class="form-check form-check-inline">
    <input disabled class="form-check-input" type="radio" name="positionRadio" id="chairman-radio"
        value="Chairman" @if (old('positionRadio', optional($presidentProfile)->position) === 'Chairman') checked @endif>
    <label class="form-check-label label-style" for="chairman-radio">
        Chairman
    </label>
</div>
<div class="form-check form-check-inline">
    <input disabled class="form-check-input" type="radio" name="positionRadio" id="manager-radio" value="Manager"
        @if (old('positionRadio', optional($presidentProfile)->position) === 'Manager') checked @endif>
    <label class="form-check-label label-style" for="manager-radio">
        Manager
    </label>
</div>

<div class="col-md-3 mb-2">
    <label for="presidentId" class="form-label label-style">ID</label>
    <div>
        <a href="{{ asset($presidentProfile->presidentId) }}" target="_blank">View ID</a>
    </div>
</div>

<div class="row">
    <div class="col-2 mb-2">
        <label for="contactNumber" class="form-label label-style">Contact Number</label>
        <input type="text" class="form-control" name="contactNumber" id="contactNumber" autocomplete="off"
            maxlength="11" oninput="this.value = this.value.replace(/[^0-9]/g,'')"
            value="{{ old('contactNumber', optional($presidentProfile)->contactNumber) }}" readonly>
    </div>
    <div class="col-2 mb-2">
        <label for="birthDate" class="form-label label-style">Birthday</label>
        <input type="date" class="form-control" name="birthDate" id="birthDate"
            value="{{ old('birthDate', optional($presidentProfile)->birthDate) }}" readonly>
    </div>
</div>

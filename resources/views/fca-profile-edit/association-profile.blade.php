<h2 class="bg-success text-white mt-2 p-2 text-center rounded-3">Association Profile</h2>

<input type="hidden" name="user_id" value="{{ Auth::id() }}">

<div class="col-md-4 mb-2">
    <label for="associationName" class="form-label label-style">Name of Association/Cooperative</label>
    @if ($associationProfile)
        <input type="text" class="form-control" name="associationName" id="associationName" autocomplete="off"
            value="{{ old('associationName', optional($associationProfile)->association) }}">
    @endif
    @error('associationName')
        <span class="fs-6 text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="row">

    <div class="col-md-4 mb-2">
        <label for="associationProvince" class="form-label label-style">Province</label>
        <select x-model="province" x-on:change="onProvinceChange" id="associationProvince" name="associationProvince"
            class="form-select">
            <option value="">Choose Province</option>
            @foreach ($provinceValues as $id => $provinceValue)
                <option value="{{ $provinceValue->id }}">{{ $provinceValue->province_name }}</option>
            @endforeach
        </select>
        @error('associationProvince')
            <span class="fs-6 text-danger">Please choose a province.</span>
        @enderror
    </div>

    <div class="col-md-4 mb-2">
        <label for="associationMunicipality" class="form-label label-style">Municipality</label>
        <select x-model="municipality" x-on:change="onMunicipalityChange" id="associationMunicipality"
            name="associationMunicipality" class="form-select">
            <option value="">Choose Municipality</option>
            <template x-for="municipality_row in municipalities" :key="municipality_row.id">
                <option :value="municipality_row.id" :selected="municipality_row.id == municipality"
                    x-text="municipality_row.municipality_name">
                </option>
            </template>
        </select>
        @error('associationMunicipality')
            <span class="fs-6 text-danger">Please choose a municipality.</span>
        @enderror
    </div>

    <div class="col-md-4 mb-2">
        <label for="associationDistrict" class="form-label label-style">District</label>
        <select x-model="district" x-on:change="onDistrictChange" id="associationDistrict" name="associationDistrict"
            class="form-select">
            <option value="">Choose District</option>
            <template x-for="district_row in districts" :key="district_row.id">
                <option :value="district_row.id" :selected="district_row.id == district"
                    x-text="district_row.district_name">
                </option>
            </template>
        </select>
        @error('associationDistrict')
            <span class="fs-6 text-danger">Please choose a district.</span>
        @enderror
    </div>

    <div class="col-md-4 mb-2">
        <label for="associationBarangay" class="form-label label-style">Barangay</label>
        <select x-model="barangay" id="associationBarangay" name="associationBarangay" class="form-select">
            <option value="">Choose Barangay</option>
            <template x-for="barangay_row in barangays" :key="barangay_row.id">
                <option :value="barangay_row.id" :selected="barangay_row.id == barangay"
                    x-text="barangay_row.barangay_name"></option>
            </template>
        </select>
        @error('associationBarangay')
            <span class="fs-6 text-danger">Please choose a barangay.</span>
        @enderror
    </div>

</div>

<div class="row">

    <div class="col-md-2 mb-2">
        @if ($associationProfile)
            <label for="houseNumber" class="form-label label-style">House Number</label>
            <input type="text" class="form-control" name="houseNumber" id="houseNumber" autocomplete="off"
                value="{{ old('houseNumber', optional($associationProfile)->houseNumber) }}">
        @endif
    </div>

    <div class="col-md-2 mb-2">
        @if ($associationProfile)
            <label for="streetName" class="form-label label-style">Street</label>
            <input type="text" class="form-control" name="streetName" id="streetName" autocomplete="off"
                value="{{ old('streetName', optional($associationProfile)->street) }}">
        @endif
    </div>

    <div class="col-sm-1 mb-2">
        <label for="zipCode" class="form-label label-style">Zip Code</label>
        @if ($associationProfile)
            <input type="text" class="form-control" name="zipCode" id="zipCode" maxlength="4"
                oninput="this.value = this.value.replace(/[^0-9]/g,'')" autocomplete="off"
                value="{{ old('zipCode', optional($associationProfile)->zipCode) }}">
        @endif
        @error('zipCode')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

</div>

<div class="col-sm-12 mb-2">
    @if ($associationProfile)
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="officeRadio" id="cda-radio" value="CDA"
                @if (old('officeRadio', optional($associationProfile)->office) === 'CDA') checked @endif>
            <label class="form-check-label label-style" for="cda-radio">
                CDA
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="officeRadio" id="dole-radio" value="DOLE"
                @if (old('officeRadio', optional($associationProfile)->office) === 'DOLE') checked @endif>
            <label class="form-check-label label-style" for="dole-radio">
                DOLE
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="officeRadio" id="sec-radio" value="SEC"
                @if (old('officeRadio', optional($associationProfile)->office) === 'SEC') checked @endif>
            <label class="form-check-label label-style" for="sec-radio">
                SEC
            </label>
        </div>
    @endif
    @error('officeRadio')
        <span class="fs-6 text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-md-3 mb-2">
    <label for="emailAddress" class="form-label label-style">Email</label>
    @if ($associationProfile)
        <input type="email" class="form-control" name="emailAddress" id="emailAddress" autocomplete="off"
            value="{{ old('emailAddress', optional($associationProfile)->email) }}">
    @endif
    @error('emailAddress')
        <span class="fs-6 text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="row">
    <div class="col-md-2 mb-2">
        <label for="registrationNumber" class="form-label label-style">Registration Number</label>
        @if ($associationProfile)
            <input type="text" class="form-control" name="registrationNumber" id="registrationNumber"
                autocomplete="off"
                value="{{ old('registrationNumber', optional($associationProfile)->registrationNumber) }}">
        @endif
        @error('registrationNumber')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-2 mb-2">
        <label for="registrationDate" class="form-label label-style">Date of Registration</label>
        @if ($associationProfile)
            <input type="date" class="form-control" name="registrationDate" id="registrationDate"
                value="{{ old('registrationDate', optional($associationProfile)->registrationDate) }}">
        @endif
        @error('registrationDate')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-3 mb-2">
        <label for="certificateOfRegistration" class="form-label label-style">Certificate of Registration</label>
        <div>
            <input class="form-control" type="file" name="certificateOfRegistration"
                id="certificateOfRegistration">
        </div>
        @error('certificateOfRegistration')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>


</div>

<div class="row">

    <div class="col-md-2 mb-2">
        <label for="expirationDate" class="form-label label-style">Expiration Date</label>
        @if ($associationProfile)
            <input type="date" class="form-control" name="expirationDate" id="expirationDate"
                value="{{ old('expirationDate', optional($associationProfile)->expirationDate) }}">
        @endif
        @error('expirationDate')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-3 mb-2">
        <label for="certificateOfGoodStanding" class="form-label label-style">Certificate of Good
            Standing</label>
        <div>
            <input class="form-control" type="file" name="certificateOfGoodStanding"
                id="certificateOfGoodStanding">
        </div>
        @error('certificateOfGoodStanding')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="row mt-2">
    <div class="col-md-3 mb-2">
        <label for="lawsFile" class="form-label label-style">Approved by Laws</label>
        <div>
            <input class="form-control" type="file" name="lawsFile" id="lawsFile">
        </div>
        @error('lawsFile')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-3 mb-2">
        <label for="latestFinancialStatement" class="form-label label-style">Latest Audited Financial
            Statement</label>
        <div>
            <input class="form-control" type="file" name="latestFinancialStatement"
                id="latestFinancialStatement">
        </div>
        @error('latestFinancialStatement')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

</div>

<h2 class="bg-success text-white p-2 text-center rounded-3">President Profile</h2>
<div class="row">
    <div class="col-md-3 mb-2">
        <label for="firstName" class="form-label label-style">First name</label>
        @if ($presidentProfile)
            <input type="text" class="form-control" name="firstName" id="firstName" autocomplete="off"
                value="{{ old('firstName', optional($presidentProfile)->firstName) }}" readonly>
        @else
            <input type="text" class="form-control" name="firstName" id="firstName" autocomplete="off"
                value="{{ old('firstName') }}">
        @endif
        @error('firstName')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-3 mb-2">
        @if ($presidentProfile)
            <label for="middleName" class="form-label label-style">Middle name</label>
            <input type="text" class="form-control" name="middleName" id="middleName" autocomplete="off"
                value="{{ old('middleName', optional($presidentProfile)->middleName) }}" readonly>
        @else
            <label for="middleName" class="form-label label-style">Middle name <span
                    class="optional-style">(Optional)</span></label>
            <input type="text" class="form-control" name="middleName" id="middleName" autocomplete="off"
                value="{{ old('middleName') }}">
        @endif
    </div>

    <div class="col-md-3 mb-2">
        <label for="lastName" class="form-label label-style">Last name</label>
        @if ($presidentProfile)
            <input type="text" class="form-control" name="lastName" id="lastName" autocomplete="off"
                value="{{ old('lastName', optional($presidentProfile)->lastName) }}" readonly>
        @else
            <input type="text" class="form-control" name="lastName" id="lastName" autocomplete="off"
                value="{{ old('lastName') }}">
        @endif
        @error('lastName')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-3 mb-2">
        @if ($presidentProfile)
            <label for="suffix" class="form-label label-style">Suffix</label>
            <input type="text" class="form-control" name="suffix" id="suffix" style="width: 70px;"
                autocomplete="off" value="{{ old('suffix', optional($presidentProfile)->suffix) }}" readonly>
        @else
            <label for="suffix" class="form-label label-style">Suffix <span
                    class="optional-style">(Optional)</span></label>
            <input type="text" class="form-control" name="suffix" id="suffix" style="width: 70px;"
                autocomplete="off" value="{{ old('suffix') }}">
        @endif
    </div>
</div>

<div class="row">

    @if ($presidentProfile)
        <input type="text" class="form-control" name="presidentProvince" id="presidentProvince" autocomplete="off"
            value="{{ old('presidentProvince', optional($presidentProfile)->province) }}" hidden readonly>
        <input type="text" class="form-control" name="presidentMunicipality" id="presidentMunicipality"
            autocomplete="off" value="{{ old('presidentMunicipality', optional($presidentProfile)->municipality) }}"
            hidden readonly>
        <input type="text" class="form-control" name="presidentDistrict" id="presidentDistrict" autocomplete="off"
            value="{{ old('presidentDistrict', optional($presidentProfile)->district) }}" hidden readonly>
        <input type="text" class="form-control" name="presidentBarangay" id="presidentBarangay" autocomplete="off"
            value="{{ old('presidentBarangay', optional($presidentProfile)->barangay) }}" hidden readonly>
        <div class="col-md-4 mb-2">
            <label for="provinceName" class="form-label label-style">Province</label>
            <input type="text" class="form-control" name="provinceName" id="provinceName" autocomplete="off"
                value="{{ old('provinceName', optional($presidentProfile)->province_name) }}" readonly>
        </div>
        <div class="col-md-4 mb-2">
            <label for="municipalityName" class="form-label label-style">Municipality</label>
            <input type="text" class="form-control" name="municipalityName" id="municipalityName"
                autocomplete="off"
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
    @else
        <div class="row">

            <div class="col-md-4 mb-2">
                <label for="presidentProvince" class="form-label label-style">Province</label>
                <select x-model="presidentProvince" x-on:change="onPresidentProvinceChange" id="presidentProvince"
                    name="presidentProvince" class="form-select">
                    <option value="">Choose Province</option>
                    @foreach ($provinceValues as $id => $provinceValue)
                        <option value="{{ $provinceValue->id }}">{{ $provinceValue->province_name }}</option>
                    @endforeach
                </select>
                @error('presidentProvince')
                    <span class="fs-6 text-danger">Please choose a province.</span>
                @enderror
            </div>

            <div class="col-md-4 mb-2">
                <label for="presidentMunicipality" class="form-label label-style">Municipality</label>
                <select x-model="presidentMunicipality" x-on:change="onPresidentMunicipalityChange"
                    id="presidentMunicipality" name="presidentMunicipality" class="form-select">
                    <option value="">Choose Municipality</option>
                    <template x-for="municipality_row in presidentMunicipalities" :key="municipality_row.id">
                        <option :value="municipality_row.id" :selected="municipality_row.id == presidentMunicipality"
                            x-text="municipality_row.municipality_name"></option>
                    </template>
                </select>
                @error('presidentMunicipality')
                    <span class="fs-6 text-danger">Please choose a municipality.</span>
                @enderror
            </div>

            <div class="col-md-4 mb-2">
                <label for="presidentDistrict" class="form-label label-style">District</label>
                <select x-model="presidentDistrict" x-on:change="onPresidentDistrictChange" id="presidentDistrict"
                    name="presidentDistrict" class="form-select">
                    <option value="">Choose District</option>
                    <template x-for="district_row in presidentDistricts" :key="district_row.id">
                        <option :value="district_row.id" :selected="district_row.id == presidentDistrict"
                            x-text="district_row.district_name"></option>
                    </template>
                </select>
                @error('presidentDistrict')
                    <span class="fs-6 text-danger">Please choose a district.</span>
                @enderror
            </div>

            <div class="col-md-4 mb-2">
                <label for="presidentBarangay" class="form-label label-style">Barangay</label>
                <select x-model="presidentBarangay" id="presidentBarangay" name="presidentBarangay"
                    class="form-select">
                    <option value="">Choose Barangay</option>
                    <template x-for="barangay_row in presidentBarangays" :key="barangay_row.id">
                        <option :value="barangay_row.id" :selected="barangay_row.id == presidentBarangay"
                            x-text="barangay_row.barangay_name"></option>
                    </template>
                </select>
                @error('presidentBarangay')
                    <span class="fs-6 text-danger">Please choose a barangay.</span>
                @enderror
            </div>

        </div>
    @endif

</div>
<div class="row">

    <div class="col-md-2 mb-2">
        @if ($presidentProfile)
            <label for="presidentHouseNumber" class="form-label label-style">House Number</label>
            <input type="text" class="form-control" name="presidentHouseNumber" id="presidentHouseNumber"
                autocomplete="off"
                value="{{ old('presidentHouseNumber', optional($presidentProfile)->houseNumber) }}" readonly>
        @else
            <label for="presidentHouseNumber" class="form-label label-style">House Number <span
                    class="optional-style">(Optional)</span></label>
            <input type="text" class="form-control" name="presidentHouseNumber" id="presidentHouseNumber"
                autocomplete="off" value="{{ old('presidentHouseNumber') }}">
        @endif
    </div>

    <div class="col-md-2 mb-2">
        @if ($presidentProfile)
            <label for="presidentStreetName" class="form-label label-style">Street</label>
            <input type="text" class="form-control" name="presidentStreetName" id="presidentStreetName"
                autocomplete="off" value="{{ old('street', optional($presidentProfile)->street) }}" readonly>
        @else
            <label for="presidentStreetName" class="form-label label-style">Street <span
                    class="optional-style">(Optional)</span></label>
            <input type="text" class="form-control" name="presidentStreetName" id="presidentStreetName"
                autocomplete="off" value="{{ old('presidentStreetName') }}">
        @endif
    </div>

    <div class="col-md-1 mb-2">
        <label for="presidentZipCode" class="form-label label-style">Zip Code</label>
        @if ($presidentProfile)
            <input type="text" class="form-control" maxlength="4"
                oninput="this.value = this.value.replace(/[^0-9]/g,'')" name="presidentZipCode" id="presidentZipCode"
                autocomplete="off" autocomplete="off"
                value="{{ old('presidentZipCode', optional($presidentProfile)->zipCode) }}" readonly>
        @else
            <input type="text" class="form-control" maxlength="4"
                oninput="this.value = this.value.replace(/[^0-9]/g,'')" name="presidentZipCode" id="presidentZipCode"
                autocomplete="off" value="{{ old('presidentZipCode') }}">
        @endif
        @error('presidentZipCode')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

</div>

@if ($presidentProfile)
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
        <input disabled class="form-check-input" type="radio" name="positionRadio" id="manager-radio"
            value="Manager" @if (old('positionRadio', optional($presidentProfile)->position) === 'Manager') checked @endif>
        <label class="form-check-label label-style" for="manager-radio">
            Manager
        </label>
    </div>
@else
    <div x-data="{ selectedOption: `{{ old('positionId') }}` }" x-cloak>
        <div class="col-sm-12">
            <div class="form-check form-check-inline mb-2">
                <input x-model="selectedOption" class="form-check-input" type="radio" name="positionRadio"
                    id="president-radio" value="President">
                <label class="form-check-label label-style" for="president-radio">
                    President
                </label>
                <div x-show="selectedOption === 'President'">
                    <span>Please attach any Government ID</span>
                    <input type="file" name="positionIdPresident" id="positionIdPresident">
                </div>
            </div>
            <div class="form-check form-check-inline mb-2">
                <input x-model="selectedOption" class="form-check-input" type="radio" name="positionRadio"
                    id="chairman-radio" value="Chairman">
                <label class="form-check-label label-style" for="chairman-radio">
                    Chairman
                </label>
                <div x-show="selectedOption === 'Chairman'">
                    <span>Please attach any Government ID</span>
                    <input type="file" name="positionIdChairman" id="positionIdChairman">
                </div>
            </div>
            <div class="form-check form-check-inline mb-2">
                <input x-model="selectedOption" class="form-check-input" type="radio" name="positionRadio"
                    id="manager-radio" value="Manager">
                <label class="form-check-label label-style" for="manager-radio">
                    Manager
                </label>
                <div x-show="selectedOption === 'Manager'">
                    <span>Please attach any Government ID</span>
                    <input type="file" name="positionIdManager" id="positionIdManager">
                </div>
            </div>
            @error('positionId')
                <span class="fs-6 text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
@endif

@if ($presidentProfile && $presidentProfile->presidentId !== null)
    <div class="col-md-3 mb-2">
        <label for="presidentId" class="form-label label-style">ID</label>
        <div>
            <a href="{{ asset($presidentProfile->presidentId) }}" target="_blank">View ID</a>
        </div>
    </div>
@endif

<div class="row">
    <div class="col-2 mb-2">
        <label for="contactNumber" class="form-label label-style">Contact Number</label>
        @if ($presidentProfile)
            <input type="text" class="form-control" name="contactNumber" id="contactNumber" autocomplete="off"
                maxlength="11" oninput="this.value = this.value.replace(/[^0-9]/g,'')"
                value="{{ old('contactNumber', optional($presidentProfile)->contactNumber) }}" readonly>
        @else
            <input type="text" class="form-control" name="contactNumber" id="contactNumber" autocomplete="off"
                maxlength="11" oninput="this.value = this.value.replace(/[^0-9]/g,'')"
                value="{{ old('contactNumber') }}">
        @endif
        @error('contactNumber')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-2 mb-2">
        <label for="birthDate" class="form-label label-style">Birthday</label>
        @if ($presidentProfile)
            <input type="date" class="form-control" name="birthDate" id="birthDate"
                value="{{ old('birthDate', optional($presidentProfile)->birthDate) }}" readonly>
        @else
            <input type="date" class="form-control" name="birthDate" id="birthDate"
                value="{{ old('birthDate') }}">
        @endif
        @error('birthDate')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

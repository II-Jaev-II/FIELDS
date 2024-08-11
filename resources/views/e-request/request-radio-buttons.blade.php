<div class="col-sm-12">
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="request-radioButton" id="machinery-radioButton"
            value="Machinery" x-model="selectedOption">
        <label class="form-check-label" for="request-radioButton">
            Machinery
        </label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="request-radioButton" id="facility-radioButton"
            value="Facility" x-model="selectedOption">
        <label class="form-check-label" for="request-radioButton">
            Facility
        </label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="request-radioButton" id="tools-radioButton" value="Tools"
            x-model="selectedOption">
        <label class="form-check-label" for="request-radioButton">
            Tools
        </label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="request-radioButton" id="equipments-radioButton"
            value="Equipments" x-model="selectedOption">
        <label class="form-check-label" for="request-radioButton">
            Equipments
        </label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="request-radioButton" id="agricultural-radioButton"
            value="Agricultural" x-model="selectedOption">
        <label class="form-check-label" for="request-radioButton">
            Agricultural Inputs
        </label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="request-radioButton" id="animals-radioButton"
            value="Animals" x-model="selectedOption">
        <label class="form-check-label" for="request-radioButton">
            Animals
        </label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="request-radioButton" id="others-radioButton" value="Others"
            x-model="selectedOption">
        <label class="form-check-label" for="request-radioButton">
            Others
        </label>
    </div>
    <div>
        @error('request-radioButton')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

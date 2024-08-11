<h2 class="bg-success text-white p-2 text-center rounded-3">Water Source Profile</h2>

<div class="col-md-6 mb-2">
    <h3 class="head-title-style">Small Scale Irrigation Projects</h3>
</div>
<div class="col-md-8">
    @error('at_least_one_checkbox')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div x-data="{ facilityHectares: {} }">
    @foreach (config('water-source.facility_names') as $key => $name)
        <div x-data="{ open: false }">
            <div class="col-md-8">
                <h5 class="label-style">{{ config("water-source.facility_titles.$key") }}</h5>
                <div class="form-check d-inline-block mt-2">
                    <input x-on:click="open = !open" class="form-check-input" type="checkbox"
                        name="{{ $key . 'Checkbox' }}" id="{{ $key . '-checkbox' }}">
                    <label class="form-check-label label-style" for="{{ $key . '-checkbox' }}">
                        {{ $name }}
                    </label>
                    <p>
                        {{ config("water-source.facility_descriptions.$key") }}
                    </p>
                </div>
                <div x-show="open">
                    <div class="form-group d-inline-block ml-2 col-md-2">
                        <input x-model.number="facilityHectares['{{ $key }}']"
                            oninput="this.value = this.value.replace(/[^0-9]/g,'')" class="form-control" type="text"
                            name="{{ strtolower($key) . 'Hectares' }}" id="{{ $key . '-text' }}" placeholder="Hectares"
                            autocomplete="off">
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="mt-3">
        <label for="grandTotal" class="form-label label-style">Grand Total of Hectares</label>
        <input :value="Object.values(facilityHectares).reduce((total, value) => total + (value || 0), 0)" type="text"
            class="form-control" name="grandTotalHectares" id="grandTotal" style="width: 70px;" readonly>
    </div>
</div>

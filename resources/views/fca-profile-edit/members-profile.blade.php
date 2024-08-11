<h2 class="bg-success text-white p-2 text-center rounded-3">Members Profile</h2>

@if ($memberProfile)
    <div x-data="{ maleCount: {{ old('maleCount', optional($memberProfile)->maleCount) ?? 0 }}, femaleCount: {{ old('femaleCount', optional($memberProfile)->femaleCount) ?? 0 }} }">
        <div class="row">
            <div class="col-sm-1 mb-2">
                <label for="maleCount" class="form-label label-style">Male</label>
                <input x-model.number="maleCount" type="text" class="form-control" name="maleCount" id="maleCount"
                    oninput="this.value = this.value.replace(/[^0-9]/g,'')" autocomplete="off" style="width: 70px;">
                @error('maleCount')
                    <span class="fs-6 text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-sm-1 mb-2">
                <label for="femaleCount" class="form-label label-style">Female</label>
                <input x-model.number="femaleCount" type="text" class="form-control" name="femaleCount"
                    id="femaleCount" oninput="this.value = this.value.replace(/[^0-9]/g,'')" autocomplete="off"
                    style="width: 70px;">
                @error('femaleCount')
                    <span class="fs-6 text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-sm-1 mb-2">
                <input :value="maleCount + femaleCount" type="text" class="form-control" name="totalCount"
                    id="totalCount" readonly hidden>
            </div>
        </div>
    </div>
@endif

<div class="row">
    <div class="col-md-3 mb-2">
        <label for="serviceArea" class="form-label label-style">Service Area</label>
        @if ($memberProfile)
            <input type="text" class="form-control" name="serviceArea" id="serviceArea" autocomplete="off"
                value="{{ old('serviceArea', optional($memberProfile)->serviceArea) }}">
        @endif
        @error('serviceArea')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-3 mb-2">
        <label for="farmerProfile" class="form-label label-style">Farmer's Profile</label>
        <div>
            <input class="form-control" type="file" name="farmerProfile" id="farmerProfile">
        </div>
        @error('farmerProfile')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

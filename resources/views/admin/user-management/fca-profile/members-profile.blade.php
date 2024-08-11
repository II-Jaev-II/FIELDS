<h2 class="bg-success text-white p-2 text-center rounded-3">Members Profile</h2>

<div class="row">
    <div class="col-sm-1 mb-2">
        <label for="maleCount" class="form-label label-style">Male</label>
        <input type="text" class="form-control" name="maleCount" id="maleCount" autocomplete="off" style="width: 70px;"
            value="{{ old('maleCount', optional($memberProfile)->maleCount) }}" readonly>
    </div>
    <div class="col-sm-1 mb-2">
        <label for="maleCount" class="form-label label-style">Female</label>
        <input type="text" class="form-control" name="femaleCount" id="femaleCount" autocomplete="off"
            style="width: 70px;" value="{{ old('femaleCount', optional($memberProfile)->femaleCount) }}" readonly>
    </div>
</div>

<div class="row">
    <div class="col-md-3 mb-2">
        <label for="serviceArea" class="form-label label-style">Service Area</label>
        <input type="text" class="form-control" name="serviceArea" id="serviceArea" autocomplete="off"
            value="{{ old('serviceArea', optional($memberProfile)->serviceArea) }}" readonly>
    </div>

    <div class="col-md-3 mb-2">
        <label for="farmerProfile" class="form-label label-style">Farmer's Profile</label>
        <div>
            <a href="{{ asset($memberProfile->farmerProfile) }}" target="_blank">View
                Farmer Profile</a>
        </div>
    </div>

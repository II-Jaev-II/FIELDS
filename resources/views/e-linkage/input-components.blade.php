<div class="row">
    <div class="col-md-4 mb-2">
        <label for="associationName" class="form-label label-style">Association Name</label>
        <input type="text" class="form-control" name="associationName[]" id="associationName" autocomplete="off" readonly
            value="{{ $associationProfile->association }}">
    </div>

    <div class="col-md-4 mb-2">
        <label for="commodity" class="form-label label-style">Commodity</label>
        <select x-model="commodities[index]" x-on:change="onCommodityChange($event, index)" id="commodity"
            name="commodity[]" class="form-select" required oninvalid="setCustomValidity('Please select a commodity.')"
            oninput="setCustomValidity('')">
            <option value="">Select Commodity</option>
            @foreach ($commodityValues as $id => $commodityValue)
                <option :value="{{ $commodityValue->id }}">{{ $commodityValue->commodity }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-4 mb-2">
        <label for="subCommodity" class="form-label label-style">Sub Commodity</label>
        <select x-model="selectedSubCommodity[index]" id="subCommodity" name="subCommodity[]" class="form-select"
            required oninvalid="setCustomValidity('Please select a sub commodity.')" oninput="setCustomValidity('')">
            <option value="">Select Sub Commodity</option>
            <template x-for="subCommodity in subCommodities[index]" :key="subCommodity.id">
                <option :value="subCommodity.id" x-text="subCommodity.subCommodities"></option>
            </template>
        </select>
    </div>

    <div class="row">
        <div class="col-md-2 mb-2">
            <label for="variety" class="form-label label-style">Variety</label>
            <input type="text" class="form-control" name="variety[]" id="variety" autocomplete="off" required
                oninvalid="setCustomValidity('Please enter the variety.')" oninput="setCustomValidity('')">
        </div>

        <div class="col-md-2 mb-2">
            <label for="volume" class="form-label label-style">Volume (Kg)</label>
            <input type="text" class="form-control" name="volume[]" id="volume" autocomplete="off" required
                oninvalid="setCustomValidity('Please enter the volume.')" oninput="setCustomValidity('')">
        </div>

        <div class="col-md-3 mb-2">
            <label for="startDate" class="form-label label-style">Estimated
                Time of Harvest (Start Date)</label>
            <input type="date" class="form-control" name="startDate[]" id="startDate" required
                oninvalid="setCustomValidity('Please select a date.')" oninput="setCustomValidity('')">
        </div>

        <div class="col-md-3 mb-2">
            <label for="endDate" class="form-label label-style">Estimated
                Time of Harvest (End Date)</label>
            <input type="Date" class="form-control" name="endDate[]" id="endDate" required
                oninvalid="setCustomValidity('Please select a date.')" oninput="setCustomValidity('')">
        </div>
    </div>
    <div x-show="index > 0">
        <div class="col-md-2 mb-2 d-flex mt-auto">
            <button x-on:click="removeRow(index)" type="button" class="btn btn-danger">Remove</button>
        </div>
    </div>
    <hr>
</div>

<h2 class="bg-success text-white mt-2 p-2 text-center rounded-3">Training Profile</h2>

<div x-data="trainingsAddRow()">
    <template x-for="(row, index) in rows" :key="row.id">
        <div class="row mt-2">
            <div class="col-md-3 mb-2">
                <label for="trainingsAttended" class="form-label label-style">Trainings Attended</label>
                <select class="form-control" name="trainingsAttended[]" id="trainingsAttended">
                    <option value=""></option>
                    @foreach ($trainingTypes as $id => $value)
                        <option value="{{ $id }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-3 mb-2">
                <label for="trainingConductor" class="form-label label-style">Conducted/Service by</label>
                <input type="text" class="form-control" name="trainingConductor[]" id="trainingConductor"
                    autocomplete="off">
            </div>

            <div class="col-md-2 mb-2">
                <label for="yearAttended" class="form-label label-style">Year</label>
                <input type="text" class="form-control" name="yearAttended[]" id="yearAttended" autocomplete="off"
                    maxlength="4" oninput="this.value = this.value.replace(/[^0-9]/g,'')">
            </div>

            <div class="col-md-2 mb-2 mt-auto">
                <div x-show="index > 0">
                    <button x-on:click="removeRow(index)" type="button" class="btn btn-danger">x</button>
                </div>
            </div>

        </div>
    </template>
    <div class="col-md-2 mb-2 d-flex mt-auto">
        <button x-on:click="addRow()" type="button" class="btn btn-success">Add more</button>
    </div>
    <hr>
</div>

<div class="col-md-3 mb-2">
    <label for="trainingNeeds" class="form-label label-style">Training Needs</label>
    <select id="trainingNeeds" name="trainingNeeds[]" class="trainingNeeds form-select" multiple="multiple">
        @foreach ($trainingTypes as $id => $value)
            <option value="{{ $id }}">{{ $value }}</option>
        @endforeach
    </select>
</div>

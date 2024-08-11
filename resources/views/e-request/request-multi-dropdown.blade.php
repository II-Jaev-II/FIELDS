<div x-data="requestsAddRow()">
    <template x-for="(row, index) in rows" :key="row.id">
        <div class="row mt-2">
            <input type="hidden" name="selectedOption" x-model="selectedOption">
            <div x-show="selectedOption === 'Machinery'">
                <div class="mb-2">
                    <div class="col-md-6">
                        <label for="machineryType" class="form-label label-style">Machinery Type</label>
                        <select id="multiDropdownMachinery" name="machineryType[]" class="form-select">
                            @foreach ($machineryValues as $id => $value)
                                <option value="{{ $id }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div>
                    @error('machineryType')
                        <span class="fs-6 text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div x-show="selectedOption === 'Facility'">
                <div class="mb-2">
                    <div class="col-md-6">
                        <label for="facilityType" class="form-label label-style">Facility Type</label>
                        <select id="multiDropdownFacility" name="facilityType[]" class="form-select">
                            @foreach ($facilityValues as $id => $value)
                                <option value="{{ $id }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div>
                    @error('facilityType')
                        <span class="fs-6 text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div x-show="selectedOption === 'Tools'">
                <div class="mb-2">
                    <div class="col-md-6">
                        <label for="toolType" class="form-label label-style">Tool Type</label>
                        <select id="multiDropdownTools" name="toolType[]" class="form-select">
                            @foreach ($toolValues as $id => $value)
                                <option value="{{ $id }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div>
                    @error('toolType')
                        <span class="fs-6 text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div x-show="selectedOption === 'Equipments'">
                <div class="mb-2">
                    <div class="col-md-6">
                        <label for="equipmentType" class="form-label label-style">Equipment Type</label>
                        <select id="multiDropdownEquipment" name="equipmentType[]" class="form-select">
                            @foreach ($equipmentValues as $id => $value)
                                <option value="{{ $id }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div>
                    @error('equipmentType')
                        <span class="fs-6 text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div x-show="selectedOption === 'Agricultural'">
                <div class="mb-2">
                    <div class="col-md-6">
                        <label for="agriculturalType" class="form-label label-style">Agricultural Type</label>
                        <select id="multiDropdownAgricultural" name="agriculturalType[]" class="form-select">
                            @foreach ($agriculturalValues as $id => $value)
                                <option value="{{ $id }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div>
                    @error('agriculturalType')
                        <span class="fs-6 text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div x-show="selectedOption === 'Animals'">
                <div class="mb-2">
                    <div class="col-md-6">
                        <label for="animalType" class="form-label label-style">Animal Type</label>
                        <select id="multiDropdownAnimal" name="animalType[]" class="form-select">
                            @foreach ($animalValues as $id => $value)
                                <option value="{{ $id }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div>
                    @error('animalType')
                        <span class="fs-6 text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div x-show="selectedOption === 'Others'">
                <div class="mb-2">
                    <div class="col-md-6">
                        <label for="letterIntent" class="form-label label-style">Others (Please specify)</label>
                        <input id="othersType" name="othersType[]" class="form-control">
                    </div>
                </div>
                <div>
                    @error('othersType')
                        <span class="fs-6 text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-2 mb-2 mt-auto">
                <div x-show="index > 0">
                    <button x-on:click="removeRow(index)" type="button" class="btn btn-danger">Remove</button>
                </div>
            </div>
        </div>
    </template>
    <template x-if="true">
        <div x-show="selectedOption">
            <div class="col-md-2 mb-2 d-flex mt-auto">
                <button x-on:click="addRow()" type="button" class="btn btn-success">Add more</button>
            </div>
        </div>
    </template>
</div>

<div class="container">
    @if ($RequestHistories)
        <table id="historiesTable" class="table table-success table-striped table-hover table-bordered border-success"
            style="width:100%">
            <thead>
                <tr>
                    <th class="text-center">Status</th>
                    <th class="text-center">Updated at</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($RequestHistories as $RequestHistory)
                    <tr>
                        <td class="text-center">{{ $RequestHistory->status }}</td>
                        <td class="text-center">{{ $RequestHistory->updatedDate }}</td>
                        <td class="text-center">
                            <a type="button" data-bs-toggle="modal" data-bs-target="#historyModal"
                                data-subject="{{ $RequestHistory->subject }}"
                                data-status="{{ $RequestHistory->status }}"
                                data-updated-date="{{ $RequestHistory->updatedDate }}"
                                data-reference-number="{{ $RequestHistory->referenceNumber }}"
                                data-remarks="{{ $RequestHistory->remarks }}"
                                data-validation-form="{{ $RequestHistory->validationForm }}"
                                class="btn btn-success show-request-details" href="">View</a>
                        </td>
                    </tr>

            </tbody>
        </table>

</div>

<div class="modal fade" id="historyModal" tabindex="-1" aria-labelledby="historyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 label-style" id="historyModalLabel">History</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-2">
                    <div class="col-md-4">
                        <label for="subject" class="label-style">Subject</label>
                        <input type="text" class="form-control subject" name="subject" id="subject" readonly>
                    </div>
                    <div class="col-md-4">
                        <label for="status" class="label-style">Status</label>
                        <input type="text" class="form-control status" name="status" id="status" readonly>
                    </div>
                    <div class="col-md-4">
                        <label for="updatedDate" class="label-style">Updated At</label>
                        <input type="text" class="form-control updated-date" name="updatedDate" id="updatedDate"
                            readonly>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-md-4">
                        <label for="referenceNumber" class="label-style">Reference Number</label>
                        <input type="text" class="form-control reference-number" name="referenceNumber"
                            id="referenceNumber" readonly>
                    </div>
                    <div class="col-md-4">
                        <label for="validationForm" class="label-style validation-form-label"
                            data-status="{{ $RequestHistory->status }}"
                            @if ($RequestHistory->status != 'Site Validated') style="display: none;" @endif>Validation Form</label>
                        <br>
                        <a class="btn btn-success validation-form" href="{{ asset($RequestHistory->validationForm) }}"
                            data-status="{{ $RequestHistory->status }}" target="_blank"
                            @if ($RequestHistory->status != 'Site Validated') style="display: none;" @endif>View Validation Form</a>
                    </div>
                </div>

                <label for="remarks" class="label-style">Remarks</label>
                <textarea class="form-control remarks" name="remarks" id="remarks" cols="10" rows="5" readonly></textarea>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
@endif

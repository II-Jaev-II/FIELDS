<h2 class="bg-success text-white p-2 text-center rounded-3">RCEF Accreditations</h2>

<div class="row">
    <div class="col-md-3 mb-2">
        <label for="endorsementLetter" class="form-label label-style mt-4">Endorsement Letter</label>
        <input type="file" class="form-control" name="endorsementLetter" id="endorsementLetter">
        @error('endorsementLetter')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-3 mb-2">
        <label for="farmerProfile" class="form-label label-style mt-4">Farmer Profile</label>
        <input type="file" class="form-control" name="farmerProfile" id="farmerProfile">
        @error('farmerProfile')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-3 mb-2">
        <label for="letterOfIntent" class="form-label label-style mt-4">Letter of Intent</label>
        <input type="file" class="form-control" name="letterOfIntent" id="letterOfIntent">
        @error('letterOfIntent')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-3 mb-2">
        <label for="OSCN" class="form-label label-style mt-4">Omnibus Sworn Certificate with Notary</label>
        <input type="file" class="form-control" name="OSCN" id="OSCN">
        @error('OSCN')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

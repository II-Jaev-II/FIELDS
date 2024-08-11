<h2 class="bg-success text-white p-2 text-center rounded-3">RCEF Accreditations</h2>

<div class="row">
    <input type="text" name="association" value="{{ $profile->association }}" hidden readonly>
    <input type="text" name="province" value="{{ $profile->province }}" hidden readonly>
    <div class="col-md-3 mb-2">
        <label for="endorsementLetter" class="form-label label-style mt-4">Endorsement Letter</label>
        @if ($rcefAccreditation)
            <div>
                <a href="{{ asset($rcefAccreditation->endorsementLetter) }}" target="_blank">View Endorsement Letter</a>
            </div>
        @else
            <input type="file" class="form-control" name="endorsementLetter" id="endorsementLetter">
        @endif
        @error('endorsementLetter')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-3 mb-2">
        <label for="farmerProfile" class="form-label label-style mt-4">Farmer Profile</label>
        @if ($rcefAccreditation)
            <div>
                <a href="{{ asset($rcefAccreditation->farmerProfile) }}" target="_blank">View Farmer Profile</a>
            </div>
        @else
            <input type="file" class="form-control" name="farmerProfile" id="farmerProfile">
        @endif
        @error('farmerProfile')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-3 mb-2">
        <label for="letterOfIntent" class="form-label label-style mt-4">Letter of Intent</label>
        @if ($rcefAccreditation)
            <div>
                <a href="{{ asset($rcefAccreditation->letterOfIntent) }}" target="_blank">View Letter of Intent</a>
            </div>
        @else
            <input type="file" class="form-control" name="letterOfIntent" id="letterOfIntent">
        @endif
        @error('letterOfIntent')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-3 mb-2">
        <label for="OSCN" class="form-label label-style mt-4">Omnibus Sworn Certificate with Notary</label>
        @if ($rcefAccreditation)
            <div>
                <a href="{{ asset($rcefAccreditation->omnibusSwornCertificateNotary) }}" target="_blank">View Omnibus
                    Sworn Certificate with Notary</a>
            </div>
        @else
            <input type="file" class="form-control" name="OSCN" id="OSCN">
        @endif
        @error('OSCN')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

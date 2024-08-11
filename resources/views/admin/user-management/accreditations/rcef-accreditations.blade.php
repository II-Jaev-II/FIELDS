<div class="row">
    <div class="col-md-3 mb-2">
        <label for="endorsementLetter" class="form-label label-style mt-4">Endorsement Letter</label>
        <div>
            <a href="{{ asset($rcefAccreditation->endorsementLetter) }}" target="_blank">View Endorsement Letter</a>
        </div>
    </div>

    <div class="col-md-3 mb-2">
        <label for="farmerProfile" class="form-label label-style mt-4">Farmer Profile</label>
        <div>
            <a href="{{ asset($rcefAccreditation->farmerProfile) }}" target="_blank">View Farmer Profile</a>
        </div>
    </div>

    <div class="col-md-3 mb-2">
        <label for="letterOfIntent" class="form-label label-style mt-4">Letter of Intent</label>
        <div>
            <a href="{{ asset($rcefAccreditation->letterOfIntent) }}" target="_blank">View Letter of Intent</a>
        </div>
    </div>

    <div class="col-md-3 mb-2">
        <label for="OSCN" class="form-label label-style mt-4">Omnibus Sworn Certificate with Notary</label>
        <div>
            <a href="{{ asset($rcefAccreditation->omnibusSwornCertificateNotary) }}" target="_blank">View Omnibus
                Sworn Certificate with Notary</a>
        </div>
    </div>
</div>

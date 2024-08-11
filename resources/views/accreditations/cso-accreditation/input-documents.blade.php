<h2 class="bg-success text-white p-2 text-center rounded-3">CSO Accreditations</h2>

<div class="row">

    <input type="text" name="association" value="{{ $profile->association }}" hidden readonly>
    <input type="text" name="province" value="{{ $profile->province }}" hidden readonly>

    <div class="col-md-4">
        <label for="amendedOmnibus" class="form-label label-style mt-3">Amended Omnibus Sworn Statement</label>
        @if ($csoAccreditation)
            <div>
                <a href="{{ asset($csoAccreditation->amendedOmnibusSwornStatement) }}" target="_blank">View Amended
                    Omnibus
                    Sworn Statement</a>
            </div>
        @else
            <input type="file" class="form-control" name="amendedOmnibus" id="amendedOmnibus">
        @endif
        @error('amendedOmnibus')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="csoChecklist" class="form-label label-style mt-3">Checklist of CSO Requirements</label>
        @if ($csoAccreditation)
            <div>
                <a href="{{ asset($csoAccreditation->checklistCsoRequirement) }}" target="_blank">View Checklist of CSO
                    Requirements</a>
            </div>
        @else
            <input type="file" class="form-control" name="csoChecklist" id="csoChecklist">
        @endif
        @error('csoChecklist')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="csoForm" class="form-label label-style mt-3">CSO Application Form</label>
        @if ($csoAccreditation)
            <div>
                <a href="{{ asset($csoAccreditation->csoApplicationForm) }}" target="_blank">View CSO Application
                    Form</a>
            </div>
        @else
            <input type="file" class="form-control" name="csoForm" id="csoForm">
        @endif
        @error('csoForm')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="SCIO" class="form-label label-style mt-3">Secretary Certificate of Incumbent Officers</label>
        @if ($csoAccreditation)
            <div>
                <a href="{{ asset($csoAccreditation->secretaryCertificate) }}" target="_blank">View Secretary
                    Certificate of Incumbent Officers</a>
            </div>
        @else
            <input type="file" class="form-control" name="SCIO" id="SCIO">
        @endif
        @error('SCIO')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="SACS" class="form-label label-style mt-3">Sworn Affidavit of the CSO Secretary</label>
        @if ($csoAccreditation)
            <div>
                <a href="{{ asset($csoAccreditation->swornAffidavit) }}" target="_blank">View Sworn Affidavit of the
                    CSO
                    Secretary</a>
            </div>
        @else
            <input type="file" class="form-control" name="SACS" id="SACS">
        @endif
        @error('SACS')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

</div>

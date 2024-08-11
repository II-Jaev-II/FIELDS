<h2 class="bg-success text-white p-2 text-center rounded-3">CSO Accreditations</h2>

<div class="row">

    <div class="col-md-4">
        <label for="amendedOmnibus" class="form-label label-style mt-3">Amended Omnibus Sworn Statement</label>
        <input type="file" class="form-control" name="amendedOmnibus" id="amendedOmnibus">
        @error('amendedOmnibus')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="csoChecklist" class="form-label label-style mt-3">Checklist of CSO Requirements</label>
        <input type="file" class="form-control" name="csoChecklist" id="csoChecklist">
        @error('csoChecklist')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="csoForm" class="form-label label-style mt-3">CSO Application Form</label>
        <input type="file" class="form-control" name="csoForm" id="csoForm">
        @error('csoForm')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="SCIO" class="form-label label-style mt-3">Secretary Certificate of Incumbent Officers</label>
        <input type="file" class="form-control" name="SCIO" id="SCIO">
        @error('SCIO')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="SACS" class="form-label label-style mt-3">Sworn Affidavit of the CSO Secretary</label>
        <input type="file" class="form-control" name="SACS" id="SACS">
        @error('SACS')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

</div>

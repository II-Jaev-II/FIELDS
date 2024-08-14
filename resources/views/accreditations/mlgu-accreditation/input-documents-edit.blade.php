<h2 class="bg-success text-white p-2 text-center rounded-3">MLGU Accreditations</h2>

<div class="row">

    <div class="col-md-4">
        <label for="dulyAccomplishedForm" class="form-label label-style mt-3">Duly Accomplished Application Form for
            Accreditation</label>
        <input type="file" class="form-control" name="dulyAccomplishedForm" id="dulyAccomplishedForm">
        @error('dulyAccomplishedForm')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="boardResolution" class="form-label label-style mt-3">Board Resolution</label>
        <input type="file" class="form-control" name="boardResolution" id="boardResolution">
        @error('boardResolution')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="byLaws" class="form-label label-style mt-3">By Laws</label>
        <input type="file" class="form-control" name="byLaws" id="byLaws">
        @error('byLaws')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="currentList" class="form-label label-style mt-3">List of Current Officers and Members</label>
        <input type="file" class="form-control" name="currentList" id="currentList">
        @error('currentList')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="originalSwornStatement" class="form-label label-style mt-3">Original Sworn Statement</label>
        <input type="file" class="form-control" name="originalSwornStatement" id="originalSwornStatement">
        @error('originalSwornStatement')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="annualAccomplishmentReport" class="form-label label-style mt-3">Annual Accomplishment Report</label>
        <input type="file" class="form-control" name="annualAccomplishmentReport" id="annualAccomplishmentReport">
        @error('annualAccomplishmentReport')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="financialStatement" class="form-label label-style mt-3">Financial Statement</label>
        <input type="file" class="form-control" name="financialStatement" id="financialStatement">
        @error('financialStatement')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="organizationPurpose" class="form-label label-style mt-3">Purpose & Objective of the
            Organization</label>
        <input type="file" class="form-control" name="organizationPurpose" id="organizationPurpose">
        @error('organizationPurpose')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="copyofMinutes" class="form-label label-style mt-3">Copy of the Minutes of the Meeting of the
            Organization</label>
        <input type="file" class="form-control" name="copyofMinutes" id="copyofMinutes">
        @error('copyofMinutes')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="certificateOfRegistration" class="form-label label-style mt-3">Certificate of Registration issued
            by Cooperative
            Development Authority</label>
        <input type="file" class="form-control" name="certificateOfRegistration" id="certificateOfRegistration">
        @error('certificateOfRegistration')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

</div>

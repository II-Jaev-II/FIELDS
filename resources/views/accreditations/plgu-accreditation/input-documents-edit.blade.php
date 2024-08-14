<h2 class="bg-success text-white p-2 text-center rounded-3">PLGU Accreditations</h2>

<div class="row">

    <div class="col-md-4">
        <label for="letterOfApplication" class="form-label label-style mt-3">Letter of Application</label>
        <input type="file" class="form-control" name="letterOfApplication" id="letterOfApplication">
        @error('letterOfApplication')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="dulyAccomplishedForm" class="form-label label-style mt-3">Duly Accomplished Application Form for
            Accreditation</label>
        <input type="file" class="form-control" name="dulyAccomplishedForm" id="dulyAccomplishedForm">
        @error('dulyAccomplishedForm')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="dulyApprovedBoard" class="form-label label-style mt-3">Duly Approved Board Resolution</label>
        <input type="file" class="form-control" name="dulyApprovedBoard" id="dulyApprovedBoard">
        @error('dulyApprovedBoard')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="currentList" class="form-label label-style mt-3">List of Current Officers</label>
        <input type="file" class="form-control" name="currentList" id="currentList">
        @error('currentList')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="annualMeetings" class="form-label label-style mt-3">Minutes of the Annual Meetings</label>
        <input type="file" class="form-control" name="annualMeetings" id="annualMeetings">
        @error('annualMeetings')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="annualAccomplishment" class="form-label label-style mt-3">Annual Accomplishment Report</label>
        <input type="file" class="form-control" name="annualAccomplishment" id="annualAccomplishment">
        @error('annualAccomplishment')
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
        <label for="certificateOfRegistration" class="form-label label-style mt-3">Certificate of Registration or
            Existing Valid
            Certificate of Accreditation from any NGA</label>
        <input type="file" class="form-control" name="certificateOfRegistration" id="certificateOfRegistration">
        @error('certificateOfRegistration')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

</div>

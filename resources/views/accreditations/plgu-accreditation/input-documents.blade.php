<h2 class="bg-success text-white p-2 text-center rounded-3">PLGU Accreditations</h2>

<div class="row">

    <input type="text" name="association" value="{{ $profile->association }}" hidden readonly>
    <input type="text" name="province" value="{{ $profile->province }}" hidden readonly>

    <div class="col-md-4">
        <label for="letterOfApplication" class="form-label label-style mt-3">Letter of Application</label>
        @if ($plguAccreditation)
            <div>
                <a href="{{ asset($plguAccreditation->letterOfApplication) }}" target="_blank">View Letter of
                    Application</a>
            </div>
        @else
            <input type="file" class="form-control" name="letterOfApplication" id="letterOfApplication">
        @endif
        @error('letterOfApplication')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="dulyAccomplishedForm" class="form-label label-style mt-3">Duly Accomplished Application Form for
            Accreditation</label>
        @if ($plguAccreditation)
            <div>
                <a href="{{ asset($plguAccreditation->dulyAccomplishedForm) }}" target="_blank">View Duly Accomplished
                    Application Form for Accreditation</a>
            </div>
        @else
            <input type="file" class="form-control" name="dulyAccomplishedForm" id="dulyAccomplishedForm">
        @endif
        @error('dulyAccomplishedForm')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="dulyApprovedBoard" class="form-label label-style mt-3">Duly Approved Board Resolution</label>
        @if ($plguAccreditation)
            <div>
                <a href="{{ asset($plguAccreditation->dulyApprovedBoard) }}" target="_blank">View Duly Approved Board
                    Resolution</a>
            </div>
        @else
            <input type="file" class="form-control" name="dulyApprovedBoard" id="dulyApprovedBoard">
        @endif
        @error('dulyApprovedBoard')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="currentList" class="form-label label-style mt-3">List of Current Officers</label>
        @if ($plguAccreditation)
            <div>
                <a href="{{ asset($plguAccreditation->currentList) }}" target="_blank">View List of Current
                    Officers</a>
            </div>
        @else
            <input type="file" class="form-control" name="currentList" id="currentList">
        @endif
        @error('currentList')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="annualMeetings" class="form-label label-style mt-3">Minutes of the Annual Meetings</label>
        @if ($plguAccreditation)
            <div>
                <a href="{{ asset($plguAccreditation->annualMeetings) }}" target="_blank">View Minutes of the Annual
                    Meetings</a>
            </div>
        @else
            <input type="file" class="form-control" name="annualMeetings" id="annualMeetings">
        @endif
        @error('annualMeetings')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="annualAccomplishment" class="form-label label-style mt-3">Annual Accomplishment Report</label>
        @if ($plguAccreditation)
            <div>
                <a href="{{ asset($plguAccreditation->annualAccomplishment) }}" target="_blank">View Annual
                    Accomplishment
                    Report</a>
            </div>
        @else
            <input type="file" class="form-control" name="annualAccomplishment" id="annualAccomplishment">
        @endif
        @error('annualAccomplishment')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="financialStatement" class="form-label label-style mt-3">Financial Statement</label>
        @if ($plguAccreditation)
            <div>
                <a href="{{ asset($plguAccreditation->financialStatement) }}" target="_blank">View Financial
                    Statement</a>
            </div>
        @else
            <input type="file" class="form-control" name="financialStatement" id="financialStatement">
        @endif
        @error('financialStatement')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="certificateOfRegistration" class="form-label label-style mt-3">Certificate of Registration or
            Existing Valid
            Certificate of Accreditation from any NGA</label>
        @if ($plguAccreditation)
            <div>
                <a href="{{ asset($plguAccreditation->certificateOfRegistration) }}" target="_blank">View Certificate
                    of
                    Registration
                    or Existing Valid
                    Certificate of Accreditation from any NGA</a>
            </div>
        @else
            <input type="file" class="form-control" name="certificateOfRegistration" id="certificateOfRegistration">
        @endif
        @error('certificateOfRegistration')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

</div>

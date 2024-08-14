<h2 class="bg-success text-white p-2 text-center rounded-3">MLGU Accreditations</h2>

<div class="row">

    <input type="text" name="association" value="{{ $profile->association }}" hidden readonly>
    <input type="text" name="province" value="{{ $profile->province }}" hidden readonly>

    <div class="col-md-4">
        <label for="dulyAccomplishedForm" class="form-label label-style mt-3">Duly Accomplished Application Form for
            Accreditation</label>
        @if ($mlguAccreditation)
            <div>
                <a href="{{ asset($mlguAccreditation->dulyAccomplishedForm) }}" target="_blank">View Duly
                    Accomplished Application Form for Accreditation</a>
            </div>
        @else
            <input type="file" class="form-control" name="dulyAccomplishedForm" id="dulyAccomplishedForm">
        @endif
        @error('dulyAccomplishedForm')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="boardResolution" class="form-label label-style mt-3">Board Resolution</label>
        @if ($mlguAccreditation)
            <div>
                <a href="{{ asset($mlguAccreditation->boardResolution) }}" target="_blank">View Board
                    Resolution</a>
            </div>
        @else
            <input type="file" class="form-control" name="boardResolution" id="boardResolution">
        @endif
        @error('boardResolution')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="byLaws" class="form-label label-style mt-3">By Laws</label>
        @if ($mlguAccreditation)
            <div>
                <a href="{{ asset($mlguAccreditation->byLaws) }}" target="_blank">View By Laws</a>
            </div>
        @else
            <input type="file" class="form-control" name="byLaws" id="byLaws">
        @endif
        @error('byLaws')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="currentList" class="form-label label-style mt-3">List of Current Officers and Members</label>
        @if ($mlguAccreditation)
            <div>
                <a href="{{ asset($mlguAccreditation->currentList) }}" target="_blank">View List of Current
                    Officers and Members</a>
            </div>
        @else
            <input type="file" class="form-control" name="currentList" id="currentList">
        @endif
        @error('currentList')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="originalSwornStatement" class="form-label label-style mt-3">Original Sworn Statement</label>
        @if ($mlguAccreditation)
            <div>
                <a href="{{ asset($mlguAccreditation->originalSwornStatement) }}" target="_blank">View Original Sworn
                    Statement</a>
            </div>
        @else
            <input type="file" class="form-control" name="originalSwornStatement" id="originalSwornStatement">
        @endif
        @error('originalSwornStatement')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="annualAccomplishmentReport" class="form-label label-style mt-3">Annual Accomplishment Report</label>
        @if ($mlguAccreditation)
            <div>
                <a href="{{ asset($mlguAccreditation->annualAccomplishmentReport) }}" target="_blank">View Annual
                    Accomplishment
                    Report</a>
            </div>
        @else
            <input type="file" class="form-control" name="annualAccomplishmentReport"
                id="annualAccomplishmentReport">
        @endif
        @error('annualAccomplishmentReport')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="financialStatement" class="form-label label-style mt-3">Financial Statement</label>
        @if ($mlguAccreditation)
            <div>
                <a href="{{ asset($mlguAccreditation->financialStatement) }}" target="_blank">View Financial
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
        <label for="organizationPurpose" class="form-label label-style mt-3">Purpose & Objective of the
            Organization</label>
        @if ($mlguAccreditation)
            <div>
                <a href="{{ asset($mlguAccreditation->organizationPurpose) }}" target="_blank">View Profile Indicating
                    the
                    Purpose and Objective of the
                    Organization</a>
            </div>
        @else
            <input type="file" class="form-control" name="organizationPurpose" id="organizationPurpose">
        @endif
        @error('organizationPurpose')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="copyofMinutes" class="form-label label-style mt-3">Copy of the Minutes of the Meeting of the
            Organization</label>
        @if ($mlguAccreditation)
            <div>
                <a href="{{ asset($mlguAccreditation->copyofMinutes) }}" target="_blank">View Copy of the Minutes of
                    the Meeting of the
                    Organization</a>
            </div>
        @else
            <input type="file" class="form-control" name="copyofMinutes" id="copyofMinutes">
        @endif
        @error('copyofMinutes')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="certificateOfRegistration" class="form-label label-style mt-3">Certificate of Registration issued
            by Cooperative
            Development Authority</label>
        @if ($mlguAccreditation)
            <div>
                <a href="{{ asset($mlguAccreditation->certificateOfRegistration) }}" target="_blank">View Certificate
                    of
                    Registration issued by Cooperative Development Authority</a>
            </div>
        @else
            <input type="file" class="form-control" name="certificateOfRegistration"
                id="certificateOfRegistration">
        @endif
        @error('certificateOfRegistration')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>

</div>

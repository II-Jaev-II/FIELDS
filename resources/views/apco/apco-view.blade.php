<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('shared.e-request-head')

<body>
    @include('components.navigation-header')
    @include('layouts.apco-navigation')

    <div class="container mb-2">
        <form action="{{ route('apco.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="col-md-5">


                    <div class="col-md-8 mb-2">
                        <label for="associationName" class="form-label label-style">Association Name</label>
                        <input type="text" class="form-control" name="associationName" id="associationName"
                            value="{{ $ERequestType->association }}" readonly>
                    </div>

                    <div class="col-md-8 mb-2">
                        <label for="representativeName" class="form-label label-style">Name of
                            President/Chairman</label>
                        <input type="text" class="form-control" name="representativeName" id="representativeName"
                            value="{{ $ERequestType->name }}" readonly>
                    </div>

                    <div class="mb-2 row">

                        <div class="col-md-8 mb-2">
                            <label for="emailAddress" class="form-label label-style">Email Address</label>
                            <input id="emailAddress" name="emailAddress" class="form-control"
                                value="{{ $ERequestType->emailAddress }}" readonly>
                        </div>

                    </div>

                    <div class="col-md-10 mb-2">
                        <label for="presidentAddress" class="form-label label-style">Address</label>
                        <input type="text" class="form-control" name="presidentAddress" id="presidentAddress"
                            value="{{ $ERequestType->address }}" readonly>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <label for="maleCount" class="form-label label-style">Male</label>
                            <input type="text" class="form-control js-male-count" name="maleCount" id="maleCount"
                                value="{{ $ERequestType->maleCount }}" readonly>

                        </div>
                        <div class="col-sm-4">
                            <label for="femaleCount" class="form-label label-style">Female</label>
                            <input type="text" class="form-control js-female-count" name="femaleCount"
                                id="femaleCount" value="{{ $ERequestType->femaleCount }}" readonly>
                        </div>

                        <div class="col-md-4 mb-2">
                            <label for="serviceArea" class="form-label label-style">Service Area</label>
                            <input type="text" class="form-control" name="serviceArea" id="serviceArea"
                                value="{{ $ERequestType->serviceArea }}" readonly>
                        </div>
                    </div>

                    <div class="col-md-10 mb-2">
                        <label for="requestType" class="form-label label-style">Request</label>
                        <textarea class="form-control" name="requestType" id="requestType" readonly>{{ $ERequestType->requestType }}</textarea>
                    </div>

                    <div class="col-sm-4">
                        <label for="referenceNumber" class="form-label label-style">Reference Number</label>
                        <input type="text" class="form-control" name="referenceNumber"
                            value="{{ $ERequest->referenceNumber }}" readonly>
                    </div>

                </div>
                <div class="col-md-7">

                    <h2 class="bg-success mt-3 text-white p-2 text-center rounded-3">Documents</h2>

                    @if ($ERequest->natureOfRequest === 'Animals')
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label for="letterIntent" class="form-label label-style">Letter of Intent</label>
                                <div>
                                    <a href="{{ asset($ERequest->letterOfIntent) }}" target="_blank">View Letter of
                                        Intent</a>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="endorsementLetter2" class="form-label label-style">Endorsement Letter from
                                    MAFC/CAFC</label>
                                <div>
                                    <a href="{{ asset($ERequest->endorsementLetter2) }}" target="_blank">View
                                        Endorsement Letter from
                                        MAFC/CAFC</a>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">

                            <div class="col-md-6">
                                <label for="geoTaggedPhotos" class="form-label label-style">Geo-tagged Photos of
                                    Housing</label>
                                <div>
                                    <a href="{{ asset($ERequest->geoTaggedPhotos) }}" target="_blank">View Geo-tagged
                                        Photos of Housing</a>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="geoTaggedLocation" class="form-label label-style">Geo-tagged Location of the
                                    Forage Area</label>
                                <div>
                                    <a href="{{ asset($ERequest->geoTaggedLocation) }}" target="_blank">View
                                        Geo-tagged Location of the
                                        Forage Area</a>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label for="productionManagementPlan" class="form-label label-style">Production
                                    Management Plan</label>
                                <div>
                                    <a href="{{ asset($ERequest->productionManagementPlan) }}" target="_blank">View
                                        Production Management
                                        Plan</a>
                                </div>
                            </div>
                        </div>
                    @elseif ($ERequest->natureOfRequest === 'Machinery')
                        <div class="row mb-2">

                            <div class="col-md-6">
                                <label for="letterIntent" class="form-label label-style">Letter of Intent</label>
                                <div>
                                    <a href="{{ asset($ERequest->letterOfIntent) }}" target="_blank">View Letter of
                                        Intent</a>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="boardResolution" class="form-label label-style">Board Resolution</label>
                                <div>
                                    <a href="{{ asset($ERequest->boardResolution) }}" target="_blank">View Board
                                        Resolution</a>
                                </div>
                            </div>

                        </div>

                        <div class="row mb-2">

                            <div class="col-md-6">
                                <label for="endorsementLetter" class="form-label label-style">Endorsement Letter from
                                    MAO/CAO/PAO</label>
                                <div>
                                    <a href="{{ asset($ERequest->endorsementLetter1) }}" target="_blank">View
                                        Endorsement Letter from
                                        MAO/CAO/PAO</a>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="endorsementLetter2" class="form-label label-style">Endorsement Letter from
                                    MAFC/CAFC</label>
                                <div>
                                    <a href="{{ asset($ERequest->endorsementLetter2) }}" target="_blank">View
                                        Endorsement Letter from
                                        MAFC/CAFC</a>
                                </div>
                            </div>

                        </div>

                        <div class="row mb-2">

                            <div class="col-md-6">
                                <label for="certificateAvailability" class="form-label label-style">Certificate of
                                    Availability of
                                    Funds/Photocopy of Passbook</label>
                                <div>
                                    <a href="{{ asset($ERequest->certificateOfAvailability) }}" target="_blank">View
                                        Certificate of
                                        Availability
                                        of Funds/Photocopy of Passbook</a>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="machineriesProposal" class="form-label label-style">Machineries and
                                    Equipment
                                    Utilization
                                    Proposal</label>
                                <div>
                                    <a href="{{ asset($ERequest->machineriesProposal) }}" target="_blank">View
                                        Machineries and Equipment
                                        Utilization Proposal</a>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">

                            <div class="col-md-6">
                                <label for="geoTaggedPhotos" class="form-label label-style">Geo-tagged Photos of
                                    Existing
                                    Shed</label>
                                <div>
                                    <a href="{{ asset($ERequest->geoTaggedPhotos) }}" target="_blank">View Geo-tagged
                                        Photos of Existing
                                        Shed</a>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="geoTaggedLocation" class="form-label label-style">Geo-tagged Location of
                                    the
                                    Service
                                    Area</label>
                                <div>
                                    <a href="{{ asset($ERequest->geoTaggedLocation) }}" target="_blank">View
                                        Geo-tagged Location of the
                                        Service
                                        Area</a>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label for="businessPlan" class="form-label label-style">Business Plan</label>
                                <div>
                                    <a href="{{ asset($ERequest->businessPlan) }}" target="_blank">View Business
                                        Plan</a>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="usufruct" class="form-label label-style">USUFRUCT</label>
                                <div>
                                    <a href="{{ asset($ERequest->usufruct) }}" target="_blank">View USUFRUCT</a>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="row mb-2">

                            <div class="col-md-6">
                                <label for="letterIntent" class="form-label label-style">Letter of Intent</label>
                                <div>
                                    <a href="{{ asset($ERequest->letterOfIntent) }}" target="_blank">View Letter of
                                        Intent</a>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="boardResolution" class="form-label label-style">Board Resolution</label>
                                <div>
                                    <a href="{{ asset($ERequest->boardResolution) }}" target="_blank">View Board
                                        Resolution</a>
                                </div>
                            </div>

                        </div>

                        <div class="row mb-2">

                            <div class="col-md-6">
                                <label for="endorsementLetter1" class="form-label label-style">Endorsement Letter from
                                    MAO/CAO/PAO</label>
                                <div>
                                    <a href="{{ asset($ERequest->endorsementLetter1) }}" target="_blank">View
                                        Endorsement
                                        Letter from
                                        MAO/CAO/PAO</a>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="endorsementLetter2" class="form-label label-style">Endorsement Letter from
                                    MAFC/CAFC</label>
                                <div>
                                    <a href="{{ asset($ERequest->endorsementLetter2) }}" target="_blank">View
                                        Endorsement
                                        Letter from
                                        MAFC/CAFC</a>
                                </div>
                            </div>

                        </div>

                        <div class="row mb-2">

                            <div class="col-md-6">
                                <label for="certificateOfAvailability" class="form-label label-style">Certificate of
                                    Availability
                                    of Funds/Photocopy of Passbook</label>
                                <div>
                                    <a href="{{ asset($ERequest->certificateOfAvailability) }}" target="_blank">View
                                        Certificate of Availability
                                        of Funds/Photocopy of Passbook</a>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="machineriesProposal" class="form-label label-style">Machineries and
                                    Equipment
                                    Utilization Proposal</label>
                                <div>
                                    <a href="{{ asset($ERequest->machineriesProposal) }}" target="_blank">View
                                        Machineries
                                        and Equipment
                                        Utilization Proposal</a>
                                </div>
                            </div>

                        </div>

                        <div class="row mb-2">

                            <div class="col-md-6">
                                <label for="geoTaggedPhotos" class="form-label label-style">Geo-tagged Photos of
                                    Existing
                                    Shed</label>
                                <div>
                                    <a href="{{ asset($ERequest->geoTaggedPhotos) }}" target="_blank">View Geo-tagged
                                        Photos
                                        of Existing
                                        Shed</a>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="geoTaggedLocation" class="form-label label-style">Geo-tagged Location of
                                    the
                                    Service
                                    Area</label>
                                <div>
                                    <a href="{{ asset($ERequest->geoTaggedLocation) }}" target="_blank">View
                                        Geo-tagged
                                        Location of the Service
                                        Area</a>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="businessPlan" class="form-label label-style">Business Plan</label>
                                <div>
                                    <a href="{{ asset($ERequest->businessPlan) }}" target="_blank">View Business
                                        Plan</a>
                                </div>
                            </div>
                        </div>
                    @endif


                    <h2 class="bg-success mt-2 text-white p-2 text-center rounded-3">Status</h2>
                    <div x-data="{ selectedOption: `{{ old('request-radioButton') }}` }" x-cloak>
                        <div class="row">

                            <div class="col-md-4 mb-2">
                                <label for="subject" class="form-label label-style">Subject</label>
                                <input id="subject" name="subject" class="form-control">
                                @error('subject')
                                    <span class="fs-6 text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="col-md-4 mb-2">
                                <label for="status" class="form-label label-style">Status</label>
                                <select class="form-select" id="status" name="status" x-model="selectedOption">
                                    <option value="" selected disabled></option>
                                    <option value="Table Validated">Table Validated</option>
                                    <option value="RTS">RTS</option>
                                    <option value="Site Validated">Site Validated</option>
                                    <option value="Longlisted">Longlisted</option>
                                    <option value="Shortlisted">ShortListed</option>
                                </select>
                                @error('status')
                                    <span class="fs-6 text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-3 mb-2">
                                <label for="updatedRequestDate" class="form-label label-style">Date</label>
                                <input type="date" class="form-control" name="updatedRequestDate"
                                    id="updatedRequestDate">
                                @error('updatedRequestDate')
                                    <span class="fs-6 text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div x-show="selectedOption === 'Site Validated'" x-cloak
                                style="display: none !important">
                                <div class="col-md-6">
                                    <label for="validationForm" class="form-label label-style">Validation Form</label>
                                    <input type="file" class="form-control" name="validationForm"
                                        id="validationForm" x-bind:required="selectedOption === 'Site Validated'">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-2">
                        <label for="remarks" class="form-label label-style">Remarks</label>
                        <textarea class="form-control" id="remarks" name="remarks" rows="5"></textarea>
                        @error('remarks')
                            <span class="fs-6 text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <input type="submit" value="Submit"
                    class="submit-btn bg-success text-white col-md-4 rounded-pill mb-2 mx-auto d-block">

            </div>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>

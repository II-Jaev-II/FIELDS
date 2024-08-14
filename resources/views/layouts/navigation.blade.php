<nav class="navbar navbar-expand-lg" style="background-color: #698a61">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mx-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        FCA Profile
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('fca.view') }}">Create Profile</a></li>
                        <li><a class="dropdown-item" href="{{ route('rsbsa.index') }}">Member Details</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        E-request
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('e-request') }}">Add Request</a></li>
                        <li><a class="dropdown-item" href="{{ route('e-request-list') }}">View Request</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Accreditations
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('cso-accreditation') }}">CSO Accreditations</a></li>
                        <li><a class="dropdown-item" href="{{ route('rcef-accreditation') }}">RCEF Accreditations</a>
                        <li><a class="dropdown-item" href="{{ route('mlgu-accreditation') }}">MLGU Accreditations</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('plgu-accreditation') }}">PLGU Accreditations</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('e-linkage') }}">E-Linkage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('interventions') }}">Interventions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('rtdmf-list') }}">RTDMF</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="link" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Downloadable Forms
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-item dropend">
                            <a class="dropdown-item dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                E Request
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="downloadables/e_request/BOARD-RESOLUTION.doc">Board
                                        Resolution</a></li>
                                <li><a class="dropdown-item" href="downloadables/e_request/BUSINESS-PLAN.docx">Business
                                        Plan</a></li>
                                <li><a class="dropdown-item"
                                        href="downloadables/e_request/Format-Farmers-Profile.xlsx">Farmers Profile</a>
                                </li>
                                <li><a class="dropdown-item" href="downloadables/e_request/letter-of-intent.docx">Letter
                                        of Intent</a></li>
                                <li><a class="dropdown-item"
                                        href="downloadables/e_request/Machinery-and-Equipment-Utilization-Proposal.doc">Machinery
                                        & Equipment Utilization Proposal</a></li>
                                <li><a class="dropdown-item"
                                        href="downloadables/e_request/MAOPAO-EndorsementCertification.doc">MAOPAO
                                        Endorsement Certification</a></li>
                                <li><a class="dropdown-item"
                                        href="downloadables/e_request/Operational-Plan.doc">Operational Plan</a></li>
                                <li><a class="dropdown-item" href="downloadables/e_request/TURN-OVER-TEMPLATE.doc">Turn
                                        Over Template</a></li>
                                <li><a class="dropdown-item" href="downloadables/e_request/Usufruct.doc">USUFRUCT</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropend">
                            <a class="dropdown-item dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                CSO
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item"
                                        href="downloadables/cso/Amended_OMNIBUS-SWORN-STATEMENT.docx">Amended Omnibus
                                        Sworn Statement</a></li>
                                <li><a class="dropdown-item" href="downloadables/cso/Letter-of-Intent.docx">Checklist
                                        of CSO Requirements</a></li>
                                <li><a class="dropdown-item" href="downloadables/cso/CSO-APPLICATION-FORM.docx">CSO
                                        Application Form</a></li>
                                <li><a class="dropdown-item"
                                        href="downloadables/cso/Secretarys-Certificate-of-Incumbent-Officers.docx">Secretary
                                        Certificate of Incumbent Officers</a></li>
                                <li><a class="dropdown-item"
                                        href="downloadables/cso/Sworn-Affidavit-of-the-CSO-Secretary.docx">Sworn
                                        Affidavit
                                        of the CSO Secretary</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropend">
                            <a class="dropdown-item dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                RCEF
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item"
                                        href="downloadables/rcef/Endorsement-Letter_RCEF_application.doc">Endorsement
                                        Letter</a></li>
                                <li><a class="dropdown-item"
                                        href="downloadables/rcef/Format-Farmers-Profile.xlsx">Farmers Profile</a></li>
                                <li><a class="dropdown-item"
                                        href="downloadables/rcef/Letter-of-Intent_RECF_application.docx">Letter of
                                        Intent for RCEF</a></li>
                                <li><a class="dropdown-item"
                                        href="downloadables/rcef/OMNIBUS-SWORN-CERTIFICATION_with-Notary.docx">Omnibus
                                        Sworn Certification with Notary</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">Log Out</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

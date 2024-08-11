<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRCEFAccreditationRequest;
use App\Models\AssociationProfile;
use App\Models\RCEFAccreditation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RCEFAccreditationController extends Controller
{
    public function view(Request $request)
    {
        $user = $request->user();

        $rcefAccreditation = RCEFAccreditation::where('userId', $user->id)->first();

        $profile = AssociationProfile::where('userId', $user->id)->first();

        return view('accreditations/rcef-accreditation/rcef-accreditation', [
            'user' => $user,
            'rcefAccreditation' => $rcefAccreditation,
            'profile' => $profile,
        ]);
    }

    public function edit(Request $request)
    {
        $user = $request->user();

        $rcefAccreditation = RCEFAccreditation::where('userId', $user->id)->first();

        return view('accreditations/rcef-accreditation/rcef-accreditation-edit', [
            'user' => $user,
            'rcefAccreditation' => $rcefAccreditation,
        ]);
    }

    public function store(StoreRCEFAccreditationRequest $request)
    {
        $user = Auth::user();

        $request->validated();

        $fileFields = [
            'endorsementLetter' => 'uploads/rcefEndorsementLetter',
            'farmerProfile' => 'uploads/rcefFarmerProfile',
            'letterOfIntent' => 'uploads/rcefLetterOfIntent',
            'OSCN' => 'uploads/omnibusSwornCertificateNotary',
        ];

        $paths = [];

        foreach ($fileFields as $field => $basePath) {
            if ($request->has($field)) {
                $file = $request->file($field);
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move($basePath, $filename);

                $paths[$field] = $basePath . '/' . $filename;
            }
        }

        RCEFAccreditation::create([
            'association' => $request->get('association', ''),
            'province' => $request->get('province', ''),
            'endorsementLetter' => $paths['endorsementLetter'],
            'farmerProfile' => $paths['farmerProfile'],
            'letterOfIntent' => $paths['letterOfIntent'],
            'omnibusSwornCertificateNotary' => $paths['OSCN'],
            'userId' => $user->id,
        ]);

        return redirect()->back()->with('success', 'RCEF Accreditations submitted successfully!');
    }

    public function update(StoreRCEFAccreditationRequest $request)
    {
        $user = Auth::user();

        $validatedRequest = $request->validated();

        $fileFields = [
            'endorsementLetter' => 'uploads/rcefEndorsementLetter',
            'farmerProfile' => 'uploads/rcefFarmerProfile',
            'letterOfIntent' => 'uploads/rcefLetterOfIntent',
            'OSCN' => 'uploads/omnibusSwornCertificateNotary',
        ];

        $paths = [];

        foreach ($fileFields as $field => $basePath) {
            if ($request->has($field)) {
                $file = $request->file($field);
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move($basePath, $filename);

                $paths[$field] = $basePath . '/' . $filename;
            }
        }

        RCEFAccreditation::where('userId', $user->id)->update([
            'endorsementLetter' => $paths['endorsementLetter'],
            'farmerProfile' => $paths['farmerProfile'],
            'letterOfIntent' => $paths['letterOfIntent'],
            'omnibusSwornCertificateNotary' => $paths['OSCN'],
            'userId' => $user->id,
        ]);

        return redirect()->route('rcef-accreditation')->with('updated', 'RCEF Accreditations updated successfully!');
    }
}

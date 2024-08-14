<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMLGUAccreditationRequest;
use App\Models\AssociationProfile;
use App\Models\MLGUAccreditation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MLGUAccreditationController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();

        $mlguAccreditation = MLGUAccreditation::where('userId', $user->id)->first();

        $profile = AssociationProfile::where('userId', $user->id)->first();

        return view('accreditations/mlgu-accreditation/mlgu-accreditation', [
            'user' => $user,
            'mlguAccreditation' => $mlguAccreditation,
            'profile' => $profile,
        ]);
    }

    public function edit(Request $request)
    {
        $user = $request->user();

        $mlguAccreditation = MLGUAccreditation::where('userId', $user->id)->first();

        return view('accreditations/mlgu-accreditation/mlgu-accreditation-edit', [
            'user' => $user,
            'mlguAccreditation' => $mlguAccreditation,
        ]);
    }

    public function store(StoreMLGUAccreditationRequest $request)
    {
        $user = $request->user();

        $request->validated();

        $fileFields = [
            'dulyAccomplishedForm' => 'uploads/dulyAccomplishedForm',
            'boardResolution' => 'uploads/mlguBoardResolution',
            'byLaws' => 'uploads/byLaws',
            'currentList' => 'uploads/currentList',
            'originalSwornStatement' => 'uploads/originalSwornStatement',
            'annualAccomplishmentReport' => 'uploads/annualAccomplishmentReport',
            'financialStatement' => 'uploads/financialStatement',
            'organizationPurpose' => 'uploads/organizationPurpose',
            'copyofMinutes' => 'uploads/copyofMinutes',
            'certificateOfRegistration' => 'uploads/mlguCertificateOfRegistration',
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

        MLGUAccreditation::create([
            'dulyAccomplishedForm' => $paths['dulyAccomplishedForm'],
            'boardResolution' => $paths['boardResolution'],
            'byLaws' => $paths['byLaws'],
            'currentList' => $paths['currentList'],
            'originalSwornStatement' => $paths['originalSwornStatement'],
            'annualAccomplishmentReport' => $paths['annualAccomplishmentReport'],
            'financialStatement' => $paths['financialStatement'],
            'organizationPurpose' => $paths['organizationPurpose'],
            'copyofMinutes' => $paths['copyofMinutes'],
            'certificateOfRegistration' => $paths['certificateOfRegistration'],
            'userId' => $user->id,
        ]);

        return redirect()->back()->with('success', 'MLGU Accreditations submitted successfully!');
    }

    public function update(StoreMLGUAccreditationRequest $request)
    {
        $user = Auth::user();

        $request->validated();

        $fileFields = [
            'dulyAccomplishedForm' => 'uploads/dulyAccomplishedForm',
            'boardResolution' => 'uploads/mlguBoardResolution',
            'byLaws' => 'uploads/byLaws',
            'currentList' => 'uploads/currentList',
            'originalSwornStatement' => 'uploads/originalSwornStatement',
            'annualAccomplishmentReport' => 'uploads/annualAccomplishmentReport',
            'financialStatement' => 'uploads/financialStatement',
            'organizationPurpose' => 'uploads/organizationPurpose',
            'copyofMinutes' => 'uploads/copyofMinutes',
            'certificateOfRegistration' => 'uploads/mlguCertificateOfRegistration',
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

        MLGUAccreditation::where('userId', $user->id)->update([
            'dulyAccomplishedForm' => $paths['dulyAccomplishedForm'],
            'boardResolution' => $paths['boardResolution'],
            'byLaws' => $paths['byLaws'],
            'currentList' => $paths['currentList'],
            'originalSwornStatement' => $paths['originalSwornStatement'],
            'annualAccomplishmentReport' => $paths['annualAccomplishmentReport'],
            'financialStatement' => $paths['financialStatement'],
            'organizationPurpose' => $paths['organizationPurpose'],
            'copyofMinutes' => $paths['copyofMinutes'],
            'certificateOfRegistration' => $paths['certificateOfRegistration'],
            'userId' => $user->id,
        ]);

        return redirect()->route('mlgu-accreditation')->with('updated', 'MLGU Accreditations updated successfully!');
    }
}

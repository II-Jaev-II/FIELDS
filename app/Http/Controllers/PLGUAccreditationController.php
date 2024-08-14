<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePLGUAccreditationRequest;
use App\Models\AssociationProfile;
use App\Models\PLGUAccreditation;
use Illuminate\Http\Request;

class PLGUAccreditationController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();

        $plguAccreditation = PLGUAccreditation::where('userId', $user->id)->first();

        $profile = AssociationProfile::where('userId', $user->id)->first();

        return view('accreditations/plgu-accreditation/plgu-accreditation', [
            'user' => $user,
            'plguAccreditation' => $plguAccreditation,
            'profile' => $profile,
        ]);
    }

    public function edit(Request $request)
    {
        $user = $request->user();

        $plguAccreditation = PLGUAccreditation::where('userId', $user->id)->first();

        return view('accreditations/plgu-accreditation/plgu-accreditation-edit', [
            'user' => $user,
            'plguAccreditation' => $plguAccreditation,
        ]);
    }

    public function store(StorePLGUAccreditationRequest $request)
    {
        $user = $request->user();

        $request->validated();

        $fileFields = [
            'letterOfApplication' => 'uploads/letterOfApplication',
            'dulyAccomplishedForm' => 'uploads/plguDulyAccomplishedForm',
            'dulyApprovedBoard' => 'uploads/dulyApprovedBoard',
            'certificateOfRegistration' => 'uploads/plguCertificateOfRegistration',
            'currentList' => 'uploads/plguCurrentList',
            'annualMeetings' => 'uploads/annualMeetings',
            'annualAccomplishment' => 'uploads/plguAnnualAccomplishment',
            'financialStatement' => 'uploads/plguFinancialStatement',
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

        PLGUAccreditation::create([
            'letterOfApplication' => $paths['letterOfApplication'],
            'dulyAccomplishedForm' => $paths['dulyAccomplishedForm'],
            'dulyApprovedBoard' => $paths['dulyApprovedBoard'],
            'certificateOfRegistration' => $paths['certificateOfRegistration'],
            'currentList' => $paths['currentList'],
            'annualMeetings' => $paths['annualMeetings'],
            'annualAccomplishment' => $paths['annualAccomplishment'],
            'financialStatement' => $paths['financialStatement'],
            'userId' => $user->id,
        ]);

        return redirect()->back()->with('success', 'PLGU Accreditations submitted successfully!');
    }

    public function update(StorePLGUAccreditationRequest $request)
    {
        $user = $request->user();

        $request->validated();

        $fileFields = [
            'letterOfApplication' => 'uploads/letterOfApplication',
            'dulyAccomplishedForm' => 'uploads/plguDulyAccomplishedForm',
            'dulyApprovedBoard' => 'uploads/dulyApprovedBoard',
            'certificateOfRegistration' => 'uploads/plguCertificateOfRegistration',
            'currentList' => 'uploads/plguCurrentList',
            'annualMeetings' => 'uploads/annualMeetings',
            'annualAccomplishment' => 'uploads/plguAnnualAccomplishment',
            'financialStatement' => 'uploads/plguFinancialStatement',
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

        PLGUAccreditation::where('userId', $user->id)->update([
            'letterOfApplication' => $paths['letterOfApplication'],
            'dulyAccomplishedForm' => $paths['dulyAccomplishedForm'],
            'dulyApprovedBoard' => $paths['dulyApprovedBoard'],
            'certificateOfRegistration' => $paths['certificateOfRegistration'],
            'currentList' => $paths['currentList'],
            'annualMeetings' => $paths['annualMeetings'],
            'annualAccomplishment' => $paths['annualAccomplishment'],
            'financialStatement' => $paths['financialStatement'],
            'userId' => $user->id,
        ]);

        return redirect()->route('plgu-accreditation')->with('updated', 'PLGU Accreditations updated successfully!');
    }
}

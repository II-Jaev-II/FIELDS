<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCSOAccreditationRequest;
use App\Models\AssociationProfile;
use App\Models\CSOAccreditation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CSOAccreditationController extends Controller
{
    public function view(Request $request)
    {
        $user = $request->user();

        $csoAccreditation = CSOAccreditation::where('userId', $user->id)->first();

        $profile = AssociationProfile::where('userId', $user->id)->first();

        return view('accreditations/cso-accreditation/cso-accreditation', [
            'user' => $user,
            'csoAccreditation' => $csoAccreditation,
            'profile' => $profile,
        ]);
    }

    public function edit(Request $request)
    {
        $user = $request->user();

        $csoAccreditation = CSOAccreditation::where('userId', $user->id)->first();

        return view('accreditations/cso-accreditation/cso-accreditation-edit', [
            'user' => $user,
            'csoAccreditation' => $csoAccreditation,
        ]);
    }

    public function store(StoreCSOAccreditationRequest $request)
    {
        $user = Auth::user();

        $request->validated();

        $fileFields = [
            'amendedOmnibus' => 'uploads/amendedOmnibusSwornStatement',
            'csoChecklist' => 'uploads/checklistOfCSORequirements',
            'csoForm' => 'uploads/csoApplicationForm',
            'SCIO' => 'uploads/secretaryCertificateOfIncumbentOfficers',
            'SACS' => 'uploads/swornAffidavitOfCSOSecretary',
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

        CSOAccreditation::create([
            'association' => $request->get('association', ''),
            'province' => $request->get('province', ''),
            'amendedOmnibusSwornStatement' => $paths['amendedOmnibus'],
            'checklistCsoRequirement' => $paths['csoChecklist'],
            'csoApplicationForm' => $paths['csoForm'],
            'secretaryCertificate' => $paths['SCIO'],
            'swornAffidavit' => $paths['SACS'],
            'userId' => $user->id,
        ]);

        return redirect()->back()->with('success', 'CSO Accreditations submitted successfully!');
    }

    public function update(StoreCSOAccreditationRequest $request)
    {
        $user = Auth::user();

        $validatedRequest = $request->validated();

        $fileFields = [
            'amendedOmnibus' => 'uploads/amendedOmnibusSwornStatement',
            'csoChecklist' => 'uploads/checklistOfCSORequirements',
            'csoForm' => 'uploads/csoApplicationForm',
            'SCIO' => 'uploads/secretaryCertificateOfIncumbentOfficers',
            'SACS' => 'uploads/swornAffidavitOfCSOSecretary',
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

        CSOAccreditation::where('userId', $user->id)->update([
            'amendedOmnibusSwornStatement' => $paths['amendedOmnibus'],
            'checklistCsoRequirement' => $paths['csoChecklist'],
            'csoApplicationForm' => $paths['csoForm'],
            'secretaryCertificate' => $paths['SCIO'],
            'swornAffidavit' => $paths['SACS'],
            'userId' => $user->id,
        ]);

        return redirect()->route('cso-accreditation')->with('updated', 'CSO Accreditations updated successfully!');
    }
}

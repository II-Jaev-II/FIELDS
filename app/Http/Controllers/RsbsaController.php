<?php

namespace App\Http\Controllers;

use App\Models\RSBSADetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RsbsaController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();

        $rsbsaDetails = RSBSADetails::join('users', 'rsbsa_details.userId', '=', 'users.id')
            ->where('rsbsa_details.userId', $user->id)
            ->get();

        return view('rsbsa/rsbsa', [
            'user' => $user,
            'rsbsaDetails' => $rsbsaDetails,
        ]);
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'rsbsaRecords' => 'required|array',
            'rsbsaRecords.*.rsbsaNo' => 'required|string',
            'rsbsaRecords.*.firstName' => 'required|string',
            'rsbsaRecords.*.middleName' => 'nullable|string',
            'rsbsaRecords.*.lastName' => 'required|string',
            'rsbsaRecords.*.extName' => 'nullable|string',
            'rsbsaRecords.*.sex' => 'required|string',
            'rsbsaRecords.*.birthDate' => 'required|date',
        ]);

        $duplicateRsbsaNos = [];
        foreach ($request->rsbsaRecords as $record) {
            // Check if the RSBSA number already exists in the database
            $existingRecord = RSBSADetails::where('rsbsaNo', $record['rsbsaNo'])->first();
            if ($existingRecord) {
                $duplicateRsbsaNos[] = $record['rsbsaNo'];
            }
        }

        if (!empty($duplicateRsbsaNos)) {
            return response()->json([
                'success' => false,
                'message' => 'The following RSBSA numbers already exist: ' . implode(', ', $duplicateRsbsaNos)
            ]);
        }

        foreach ($request->rsbsaRecords as $record) {
            RSBSADetails::create([
                'rsbsaNo' => $record['rsbsaNo'],
                'firstName' => $record['firstName'],
                'middleName' => $record['middleName'] ?? '',
                'lastName' => $record['lastName'],
                'extName' => $record['extName'] ?? '',
                'sex' => $record['sex'],
                'birthDate' => $record['birthDate'],
                'userId' => $user->id,
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'RSBSA details submitted successfully!'
        ]);
    }
}

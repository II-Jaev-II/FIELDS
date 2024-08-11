<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateAPCORequest;
use App\Mail\ERequestEmail;
use App\Models\AssociationProfile;
use App\Models\ERequest;
use App\Models\ERequestType;
use App\Models\MemberProfile;
use App\Models\PresidentProfile;
use App\Models\RequestHistories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class APCOController extends Controller
{
    public function show(Request $request)
    {
        $user = $request->user();

        $ERequests = ERequest::join('e_request_types', 'e_requests.referenceNumber', '=', 'e_request_types.referenceNumber')
            ->get();

        return view('apco/apco-requests', [
            'user' => $user,
            'ERequests' => $ERequests,
        ]);
    }

    public function view($referenceNumber, Request $request)
    {
        $user = $request->user();

        $ERequestType = ERequestType::where('referenceNumber', $referenceNumber)->first();

        $ERequest = ERequest::where('referenceNumber', $referenceNumber)->first();

        return view('apco/apco-view', [
            'user' => $user,
            'ERequestType' => $ERequestType,
            'ERequest' => $ERequest,
        ]);
    }

    public function update(UpdateAPCORequest $request)
    {
        $subject = $request->input('subject');
        $message = $request->input('remarks');
        $referenceNumber = $request->input('referenceNumber');
        $emailAddress = $request->input('emailAddress');
        $emailAddressB = 'launionapco@gmail.com';
        $emailAddressC = 'cjave08@gmail.com';

        $fileFields = [
            'validationForm' => 'uploads/validationForm',
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

        // UPDATE REQUEST
        $requestToUpdate = ERequest::where('referenceNumber', $referenceNumber)->firstOrFail();

        $requestToUpdate->update([
            'requestStatus' => $request->input('status', ''),
            'updatedRequestDate' => $request->input('updatedRequestDate', ''),
            'validationForm' => $paths['validationForm'] ?? null,
        ]);

        $account = '';
        $recipients = [];

        if ($requestToUpdate->requestStatus === 'Table Validated' || $requestToUpdate->requestStatus === 'Site Validated' || $requestToUpdate->requestStatus === 'Longlisted' || $requestToUpdate->requestStatus === 'Shortlisted') {
            $account = 'account_a';
            $recipients = [$emailAddress, $emailAddressB, $emailAddressC];
        } else if ($requestToUpdate->requestStatus === 'RTS') {
            $account = 'account_a';
            $recipients = [$emailAddress];
        } else {
            $account = 'account_b';
            $recipients = [$emailAddressB];
        }

        foreach ($recipients as $recipient) {
            Mail::to($recipient)->send(new ERequestEmail($subject, $message, $referenceNumber, $account));
        }

        // STORE REQUEST
        RequestHistories::create([
            'subject' => $request->get('subject', ''),
            'status' => $request->get('status', ''),
            'validationForm' => $paths['validationForm'] ?? null,
            'updatedDate' => $request->get('updatedRequestDate', ''),
            'remarks' => $request->get('remarks', ''),
            'referenceNumber' => $request->get('referenceNumber', ''),
        ]);

        return redirect()->back()->with('success', 'Email(s) sent successfully!');
    }
}

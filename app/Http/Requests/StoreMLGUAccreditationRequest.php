<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMLGUAccreditationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'dulyAccomplishedForm' => 'required|max:10000|mimes:jpg,png,pdf,docx',
            'boardResolution' => 'required|max:10000|mimes:jpg,png,pdf,docx',
            'byLaws' => 'required|max:10000|mimes:jpg,png,pdf,docx',
            'currentList' => 'required|max:10000|mimes:jpg,png,pdf,docx',
            'originalSwornStatement' => 'required|max:10000|mimes:jpg,png,pdf,docx',
            'annualAccomplishmentReport' => 'required|max:10000|mimes:jpg,png,pdf,docx',
            'financialStatement' => 'required|max:10000|mimes:jpg,png,pdf,docx',
            'organizationPurpose' => 'required|max:10000|mimes:jpg,png,pdf,docx',
            'copyofMinutes' => 'required|max:10000|mimes:jpg,png,pdf,docx',
            'certificateOfRegistration' => 'required|max:10000|mimes:jpg,png,pdf,docx',
        ];
    }

    public function messages()
    {
        return [
            'dulyAccomplishedForm' => 'Please insert the Duly Accomplished Application Form for Accreditation.',
            'dulyAccomplishedForm.max' => 'The file should not be more than 10 MB.',
            'dulyAccomplishedForm.mimes' => 'The following file type are only supported: jpg,png,pdf, and docx',
            'boardResolution' => 'Please insert the Board Resolution.',
            'boardResolution.max' => 'The file should not be more than 10 MB.',
            'boardResolution.mimes' => 'The following file type are only supported: jpg,png,pdf, and docx',
            'byLaws' => 'Please insert the By Laws.',
            'byLaws.max' => 'The file should not be more than 10 MB.',
            'byLaws.mimes' => 'The following file type are only supported: jpg,png,pdf, and docx',
            'currentList' => 'Please insert the List of Current Officers and Members.',
            'currentList.max' => 'The file should not be more than 10 MB.',
            'currentList.mimes' => 'The following file type are only supported: jpg,png,pdf, and docx',
            'originalSwornStatement' => 'Please insert the Original Sworn Statement.',
            'originalSwornStatement.max' => 'The file should not be more than 10 MB.',
            'originalSwornStatement.mimes' => 'The following file type are only supported: jpg,png,pdf, and docx',
            'annualAccomplishmentReport' => 'Please insert the Annual Accomplishment Report.',
            'annualAccomplishmentReport.max' => 'The file should not be more than 10 MB.',
            'annualAccomplishmentReport.mimes' => 'The following file type are only supported: jpg,png,pdf, and docx',
            'financialStatement' => 'Please insert the Financial Statement.',
            'financialStatement.max' => 'The file should not be more than 10 MB.',
            'financialStatement.mimes' => 'The following file type are only supported: jpg,png,pdf, and docx',
            'organizationPurpose' => 'Please insert the Purpose & Objective of the Organization.',
            'organizationPurpose.max' => 'The file should not be more than 10 MB.',
            'organizationPurpose.mimes' => 'The following file type are only supported: jpg,png,pdf, and docx',
            'copyofMinutes' => 'Please insert the Copy of the Minutes of the Meeting of the Organization.',
            'copyofMinutes.max' => 'The file should not be more than 10 MB.',
            'copyofMinutes.mimes' => 'The following file type are only supported: jpg,png,pdf, and docx',
            'certificateOfRegistration' => 'Please insert the Certificate of Registration issued by Cooperative Development Authority.',
            'certificateOfRegistration.max' => 'The file should not be more than 10 MB.',
            'certificateOfRegistration.mimes' => 'The following file type are only supported: jpg,png,pdf, and docx',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePLGUAccreditationRequest extends FormRequest
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
            'letterOfApplication' => 'required|max:10000|mimes:jpg,png,pdf,docx',
            'dulyAccomplishedForm' => 'required|max:10000|mimes:jpg,png,pdf,docx',
            'dulyApprovedBoard' => 'required|max:10000|mimes:jpg,png,pdf,docx',
            'certificateOfRegistration' => 'required|max:10000|mimes:jpg,png,pdf,docx',
            'currentList' => 'required|max:10000|mimes:jpg,png,pdf,docx',
            'annualMeetings' => 'required|max:10000|mimes:jpg,png,pdf,docx',
            'annualAccomplishment' => 'required|max:10000|mimes:jpg,png,pdf,docx',
            'financialStatement' => 'required|max:10000|mimes:jpg,png,pdf,docx',
        ];
    }

    public function messages()
    {
        return [
            'letterOfApplication' => 'Please insert the Letter of Application.',
            'letterOfApplication.max' => 'The file should not be more than 10 MB.',
            'letterOfApplication.mimes' => 'The following file type are only supported: jpg,png,pdf, and docx',
            'dulyAccomplishedForm' => 'Please insert the Duly Accomplished Application Form for Accreditation.',
            'dulyAccomplishedForm.max' => 'The file should not be more than 10 MB.',
            'dulyAccomplishedForm.mimes' => 'The following file type are only supported: jpg,png,pdf, and docx',
            'dulyApprovedBoard' => 'Please insert the Duly Approved Board Resolution.',
            'dulyApprovedBoard.max' => 'The file should not be more than 10 MB.',
            'dulyApprovedBoard.mimes' => 'The following file type are only supported: jpg,png,pdf, and docx',
            'certificateOfRegistration' => 'Please insert the Certificate of Registration or Existing Valid Certificate of Accreditation from any NGA.',
            'certificateOfRegistration.max' => 'The file should not be more than 10 MB.',
            'certificateOfRegistration.mimes' => 'The following file type are only supported: jpg,png,pdf, and docx',
            'currentList' => 'Please insert the List of Current Officers.',
            'currentList.max' => 'The file should not be more than 10 MB.',
            'currentList.mimes' => 'The following file type are only supported: jpg,png,pdf, and docx',
            'annualMeetings' => 'Please insert the Minutes of the Annual Meetings.',
            'annualMeetings.max' => 'The file should not be more than 10 MB.',
            'annualMeetings.mimes' => 'The following file type are only supported: jpg,png,pdf, and docx',
            'annualAccomplishment' => 'Please insert the Annual Accomplishment Report.',
            'annualAccomplishment.max' => 'The file should not be more than 10 MB.',
            'annualAccomplishment.mimes' => 'The following file type are only supported: jpg,png,pdf, and docx',
            'financialStatement' => 'Please insert the Financial Statement.',
            'financialStatement.max' => 'The file should not be more than 10 MB.',
            'financialStatement.mimes' => 'The following file type are only supported: jpg,png,pdf, and docx',
        ];
    }
}

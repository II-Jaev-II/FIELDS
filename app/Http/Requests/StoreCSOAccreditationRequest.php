<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCSOAccreditationRequest extends FormRequest
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
            'amendedOmnibus' => 'required|max:10000|mimes:jpg,png,pdf,docx',
            'csoChecklist' => 'required|max:10000|mimes:jpg,png,pdf,docx',
            'csoForm' => 'required|max:10000|mimes:jpg,png,pdf,docx',
            'SCIO' => 'required|max:10000|mimes:jpg,png,pdf,docx',
            'SACS' => 'required|max:10000|mimes:jpg,png,pdf,docx',
        ];
    }

    public function messages()
    {
        return [
            'amendedOmnibus' => 'Please insert the Amended Omnibus Sworn Statement.',
            'amendedOmnibus.max' => 'The file should not be more than 10 MB.',
            'amendedOmnibus.mimes' => 'The following file type are only supported: jpg,png,pdf, and docx',
            'csoChecklist' => 'Please insert the Checklist of CSO Requirements.',
            'csoChecklist.max' => 'The file should not be more than 10 MB.',
            'csoChecklist.mimes' => 'The following file type are only supported: jpg,png,pdf, and docx',
            'csoForm' => 'Please insert the CSO Application Form.',
            'csoForm.max' => 'The file should not be more than 10 MB.',
            'csoForm.mimes' => 'The following file type are only supported: jpg,png,pdf, and docx',
            'SCIO' => 'Please insert the Secretary Certificate of Incumbent Officers.',
            'SCIO.max' => 'The file should not be more than 10 MB.',
            'SCIO.mimes' => 'The following file type are only supported: jpg,png,pdf, and docx',
            'SACS' => 'Please insert the Sworn Affidavit of the CSO Secretary.',
            'SACS.max' => 'The file should not be more than 10 MB.',
            'SACS.mimes' => 'The following file type are only supported: jpg,png,pdf, and docx',
        ];
    }
}

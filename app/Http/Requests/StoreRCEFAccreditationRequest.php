<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRCEFAccreditationRequest extends FormRequest
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
            'endorsementLetter' => 'required|max:10000|mimes:jpg,png,pdf,docx',
            'farmerProfile' => 'required|max:10000|mimes:jpg,png,pdf,docx',
            'letterOfIntent' => 'required|max:10000|mimes:jpg,png,pdf,docx',
            'OSCN' => 'required|max:10000|mimes:jpg,png,pdf,docx',
        ];
    }

    public function messages()
    {
        return [
            'endorsementLetter' => 'Please insert the Endorsement Letter.',
            'endorsementLetter.max' => 'The file should not be more than 10 MB.',
            'endorsementLetter.mimes' => 'The following file type are only supported: jpg,png,pdf, and docx',
            'farmerProfile' => 'Please insert the Farmer Profile.',
            'farmerProfile.max' => 'The file should not be more than 10 MB.',
            'farmerProfile.mimes' => 'The following file type are only supported: jpg,png,pdf, and docx',
            'letterOfIntent' => 'Please insert the Letter of Intent.',
            'letterOfIntent.max' => 'The file should not be more than 10 MB.',
            'letterOfIntent.mimes' => 'The following file type are only supported: jpg,png,pdf, and docx',
            'OSCN' => 'Please insert the Omnibus Sworn Certificate with Notary.',
            'OSCN.max' => 'The file should not be more than 10 MB.',
            'OSCN.mimes' => 'The following file type are only supported: jpg,png,pdf, and docx',
        ];
    }
}

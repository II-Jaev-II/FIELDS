<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreERequest extends FormRequest
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
        $rules = [
            'request-radioButton' => 'required',
            'province' => 'required|string',
        ];

        $selectedOption = $this->input('request-radioButton');

        switch ($selectedOption) {
            case 'Facility':
            case 'Tools':
            case 'Equipments':
            case 'Agricultural':
            case 'Others':
                $rules = array_merge($rules, [
                    'letterIntent' => 'required|max:10000|mimes:jpg,png,pdf,docx',
                    'boardResolution' => 'required|max:10000|mimes:jpg,png,pdf,docx',
                    'endorsementLetter' => 'required|max:10000|mimes:jpg,png,pdf,docx',
                    'endorsementLetter2' => 'required|max:10000|mimes:jpg,png,pdf,docx',
                    'certificateAvailability' => 'required|max:10000|mimes:jpg,png,pdf,docx',
                    'machineriesProposal' => 'required|max:10000|mimes:jpg,png,pdf,docx',
                    'geoTaggedPhotos' => 'required|max:10000|mimes:jpg,png,pdf,docx',
                    'geoTaggedLocation' => 'required|max:10000|mimes:jpg,png,pdf,docx',
                    'businessPlan' => 'required|max:10000|mimes:jpg,png,pdf,docx',
                ]);
                break;

            case 'Machinery':
                $rules = array_merge($rules, [
                    'letterIntent' => 'required|max:10000|mimes:jpg,png,pdf,docx',
                    'boardResolution' => 'required|max:10000|mimes:jpg,png,pdf,docx',
                    'endorsementLetter' => 'required|max:10000|mimes:jpg,png,pdf,docx',
                    'endorsementLetter2' => 'required|max:10000|mimes:jpg,png,pdf,docx',
                    'certificateAvailability' => 'required|max:10000|mimes:jpg,png,pdf,docx',
                    'machineriesProposal' => 'required|max:10000|mimes:jpg,png,pdf,docx',
                    'geoTaggedPhotos' => 'required|max:10000|mimes:jpg,png,pdf,docx',
                    'geoTaggedLocation' => 'required|max:10000|mimes:jpg,png,pdf,docx',
                    'businessPlan' => 'required|max:10000|mimes:jpg,png,pdf,docx',
                    'usufruct' => 'required|max:10000|mimes:jpg,png,pdf,docx',
                ]);
                break;

            case 'Animals':
                $rules = array_merge($rules, [
                    'animalLetterIntent' => 'required|max:10000|mimes:jpg,png,pdf,docx',
                    'animalEndorsementLetter2' => 'required|max:10000|mimes:jpg,png,pdf,docx',
                    'geoTaggedHousing' => 'required|max:10000|mimes:jpg,png,pdf,docx',
                    'geoTaggedForage' => 'required|max:10000|mimes:jpg,png,pdf,docx',
                    'productionManagementPlan' => 'required|max:10000|mimes:jpg,png,pdf,docx',
                ]);
                break;

            default:
                break;
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'request-radioButton.required' => 'Please select the nature of your request.',
            'letterIntent.required' => 'Please attach the letter of intent.',
            'letterIntent.max' => 'The file should not be more than 10 MB.',
            'letterIntent.mimes' => 'The following file types are only supported: jpg, png, pdf, and docx.',
            'animalLetterIntent.required' => 'Please attach the animal letter of intent.',
            'animalLetterIntent.max' => 'The file should not be more than 10 MB.',
            'animalLetterIntent.mimes' => 'The following file types are only supported: jpg, png, pdf, and docx.',
            'boardResolution.required' => 'Please attach the board resolution.',
            'boardResolution.max' => 'The file should not be more than 10 MB.',
            'boardResolution.mimes' => 'The following file types are only supported: jpg, png, pdf, and docx.',
            'endorsementLetter.required' => 'Please attach the endorsement letter from MAO/CAO/PAO.',
            'endorsementLetter.max' => 'The file should not be more than 10 MB.',
            'endorsementLetter.mimes' => 'The following file types are only supported: jpg, png, pdf, and docx.',
            'endorsementLetter2.required' => 'Please attach the endorsement letter from MAFC/CAFC.',
            'endorsementLetter2.max' => 'The file should not be more than 10 MB.',
            'endorsementLetter2.mimes' => 'The following file types are only supported: jpg, png, pdf, and docx.',
            'animalEndorsementLetter2.required' => 'Please attach the animal endorsement letter from MAFC/CAFC.',
            'animalEndorsementLetter2.max' => 'The file should not be more than 10 MB.',
            'animalEndorsementLetter2.mimes' => 'The following file types are only supported: jpg, png, pdf, and docx.',
            'certificateAvailability.required' => 'Please attach the certificate of availability of funds/photocopy of passbook.',
            'certificateAvailability.max' => 'The file should not be more than 10 MB.',
            'certificateAvailability.mimes' => 'The following file types are only supported: jpg, png, pdf, and docx.',
            'machineriesProposal.required' => 'Please attach the machineries and equipment utilization proposal.',
            'machineriesProposal.max' => 'The file should not be more than 10 MB.',
            'machineriesProposal.mimes' => 'The following file types are only supported: jpg, png, pdf, and docx.',
            'geoTaggedPhotos.required' => 'Please attach the geo-tagged photos of the existing shed.',
            'geoTaggedPhotos.max' => 'The file should not be more than 10 MB.',
            'geoTaggedPhotos.mimes' => 'The following file types are only supported: jpg, png, pdf, and docx.',
            'geoTaggedLocation.required' => 'Please attach the geo-tagged location of the service area.',
            'geoTaggedLocation.max' => 'The file should not be more than 10 MB.',
            'geoTaggedLocation.mimes' => 'The following file types are only supported: jpg, png, pdf, and docx.',
            'geoTaggedHousing.required' => 'Please attach the geo-tagged photos of housing.',
            'geoTaggedHousing.max' => 'The file should not be more than 10 MB.',
            'geoTaggedHousing.mimes' => 'The following file types are only supported: jpg, png, pdf, and docx.',
            'geoTaggedForage.required' => 'Please attach the geo-tagged location of the forage area.',
            'geoTaggedForage.max' => 'The file should not be more than 10 MB.',
            'geoTaggedForage.mimes' => 'The following file types are only supported: jpg, png, pdf, and docx.',
            'businessPlan.required' => 'Please attach the business plan.',
            'businessPlan.max' => 'The file should not be more than 10 MB.',
            'businessPlan.mimes' => 'The following file types are only supported: jpg, png, pdf, and docx.',
            'productionManagementPlan.required' => 'Please attach the production management plan.',
            'productionManagementPlan.max' => 'The file should not be more than 10 MB.',
            'productionManagementPlan.mimes' => 'The following file types are only supported: jpg, png, pdf, and docx.',
            'usufruct.max' => 'The file should not be more than 10 MB.',
            'usufruct.mimes' => 'The following file types are only supported: jpg, png, pdf, and docx.',
        ];
    }
}

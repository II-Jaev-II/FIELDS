<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFCAProfileRequest extends FormRequest
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
            'associationName' => 'required|min:5|max:60',
            'associationProvince' => 'required',
            'associationMunicipality' => 'required',
            'associationDistrict' => 'required',
            'associationBarangay' => 'required',
            'zipCode' => 'required|min:4|max:4',
            'officeRadio' => 'required',
            'emailAddress' => 'required|email|max:30',
            'registrationNumber' => 'required|min:4|max:50',
            'registrationDate' => 'required',
            'expirationDate' => 'required',
            'certificateOfRegistration' => 'required|max:10000|mimes:jpg,png,pdf,docx',
            'certificateOfGoodStanding' => 'required|max:10000|mimes:jpg,png,pdf,docx',
            'lawsFile' => 'required|max:10000|mimes:jpg,png,pdf,docx',
            'latestFinancialStatement' => 'required|max:10000|mimes:jpg,png,pdf,docx',
            'firstName' => 'required|min:1|max:240',
            'lastName' => 'required|min:1|max:240',
            'presidentProvince' => 'required',
            'presidentMunicipality' => 'required',
            'presidentDistrict' => 'required',
            'presidentBarangay' => 'required',
            'presidentZipCode' => 'required|min:4|max:4',
            'positionRadio' => 'required',
            'contactNumber' => 'required',
            'birthDate' => 'required',
            'maleCount' => ['required', 'numeric', 'min:10', 'max:10000'],
            'femaleCount' => ['required', 'numeric', 'min:10', 'max:10000'],
            'serviceArea' => ['required', 'numeric', 'min:10', 'max:10000'],
            'farmerProfile' => 'required|max:10000|mimes:png,jpg,pdf,docx',
            'at_least_one_checkbox' => 'required_without_all:SWIPCheckbox,SFRCheckbox,CISTERNCheckbox,STWCheckbox,PISOSCheckbox,PIPCheckbox,RPISCheckbox,SPISCheckbox,WPISCheckbox,DDCheckbox,SDCheckbox,CDCheckbox,rainfallCheckbox',
        ];
    }

    public function messages()
    {
        return [
            'associationName' => 'Please enter your association\'s name.',
            'associationName.min' => 'Your association name must be longer than 5 characters.',
            'associationName.max' => 'Your association name should not exceed more than 60 characters.',
            'zipCode' => 'Please enter the zip code.',
            'officeRadio' => 'Please select an office.',
            'emailAddress' => 'Please enter your association\'s email address.',
            'emailAddress.max' => 'Your association\'s email address should not be longer than 30 characters.',
            'registrationNumber' => 'Please enter the registration number.',
            'registrationNumber.min' => 'The registration number must be longer than 4 characters.',
            'registrationNumber.max' => 'The registration number must not be longer than 50 characters.',
            'registrationDate' => 'Please select the registration date.',
            'expirationDate' => 'Please select the expiration date.',
            'certificateOfRegistration' => 'Please insert the certificate of registration.',
            'certificateOfRegistration.max' => 'The file should not be more than 10 MB.',
            'certificateOfRegistration.mimes' => 'The following file type are only supported: jpg,png,pdf, and docx',
            'certificateOfGoodStanding' => 'Please insert the certificate of good standing.',
            'certificateOfGoodStanding.max' => 'The file should not be more than 10 MB.',
            'certificateOfGoodStanding.mimes' => 'The following file type are only supported: jpg,png,pdf, and docx',
            'lawsFile' => 'Please insert the approved by laws file.',
            'lawsFile.max' => 'The file should not be more than 10 MB.',
            'lawsFile.mimes' => 'The following file type are only supported: jpg,png,pdf, and docx',
            'latestFinancialStatement' => 'Please insert the latest audited financial statement file.',
            'latestFinancialStatement.max' => 'The file should not be more than 10 MB.',
            'latestFinancialStatement.mimes' => 'The following file type are only supported: jpg,png,pdf, and docx',
            'firstName' => 'Please enter your first name.',
            'lastName' => 'Please enter your last name.',
            'presidentZipCode' => 'Please enter the zip code.',
            'positionRadio' => 'Please select your position.',
            'contactNumber' => 'Please enter your contact number.',
            'birthDate' => 'Please select your birthdate.',
            'maleCount' => 'Please enter the quantity of male members.',
            'maleCount.min' => 'The quantity should be more than 9.',
            'maleCount.max' => 'The quantity should not be more than 10000.',
            'femaleCount' => 'Please enter the quantity of female members.',
            'femaleCount.min' => 'The quantity should be more than 9.',
            'femaleCount.max' => 'The quantity should not be more than 10000.',
            'serviceArea' => 'Please enter the service area.',
            'serviceArea.min' => 'The service area should be more than 9.',
            'serviceArea.max' => 'The service area should not be more than 10000.',
            'farmerProfile' => 'Please insert the farmer profile.',
            'farmerProfile.max' => 'The file should not be more than 10 MB.',
            'farmerProfile.mimes' => 'The following file type are only supported: jpg,png,pdf, and docx',
            'at_least_one_checkbox' => 'Please select at least one checkbox.',
        ];
    }
}

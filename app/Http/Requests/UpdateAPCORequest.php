<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAPCORequest extends FormRequest
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
            'subject' => 'required|min:3|max:20',
            'status' => 'required',
            'updatedRequestDate' => 'required|date',
            'remarks' => 'required|min:5|max:50',
        ];
    }

    public function messages()
    {
        return [
            'subject' => 'Subject field is required.',
            'subject.min' => 'Subject should not be less than 3 characters.',
            'subject.max' => 'Subject should not be longer than 20 characters.',
            'status' => 'Please select a status.',
            'updatedRequestDate' => 'Please select the date.',
            'remarks' => 'Please enter remarks.',
            'remarks.min' => 'Remarks should not be less than 5 characters',
            'remarks.max' => 'Remarks should not be longer than 50 characters.',
        ];
    }
}

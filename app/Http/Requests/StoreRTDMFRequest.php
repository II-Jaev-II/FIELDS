<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRTDMFRequest extends FormRequest
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
            'title' => 'required|max:30|min:5',
            'commodity' => 'required',
            'startDate' => 'required|date',
            'endDate' => 'required|date|after:startDate',
            'attachedResult' => 'required|max:10000|mimes:png,jpg,pdf,docx',
            'province' => 'required',
            'municipality' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Please enter the title.',
            'title.max' => 'Title should not be more than 30 characters.',
            'title.min' => 'Title should be longer than 5 characters.',
            'commodity.required' => 'Please select a commodity.',
            'startDate.required' => 'Please select a start date.',
            'endDate.required' => 'Please select an end date.',
            'endDate.after' => 'The end date must be after the start date.',
            'attachedResult.required' => 'Please attach a file.',
            'attachedResult.max' => 'File should not be more than 10 MB.',
            'attachedResult.mimes' => 'The following file types are only supported: jpg,png,pdf, and docx.',
        ];
    }
}

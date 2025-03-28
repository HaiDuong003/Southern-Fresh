<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InformationEmployeeRequest extends FormRequest
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
            //
            'tax_code' => 'required',
            'bank_account' => 'required',
            'phone_number' => 'required',
            'address' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'tax_code.required' => 'You have not entered a tax code',
            'email.email' => 'This is not an email',
            'password.required' => 'You have not entered a password'
        ];
    }
}

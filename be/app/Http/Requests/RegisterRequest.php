<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|alpha_num',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed'
        ];
    }

    public function messages()
    {
        return [
            //
            'name.required' => 'You have not entered a name',
            'name.alphe_num' => 'Name just have alphe and number',
            'email.required' => 'You have not entered an email',
            'email.email' => 'This is not an email',
            'email.unique' => 'This email is exist',
            'password.required' => 'You have not entered a password',
            'password.confirmed' => 'The password not the same'
        ];
    }
}

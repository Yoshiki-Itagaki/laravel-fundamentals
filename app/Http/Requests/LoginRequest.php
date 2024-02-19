<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'name'  => ['required','alpha', 'min:6', 'max:10'],
            'email'=> ['required', 'email'],
            'password' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'The user name field is required!',
            'name.alpha' => 'The user name should only contain letters!',
            'email.email' => 'This is not a valid format for an email address!'
        ];
    }
}

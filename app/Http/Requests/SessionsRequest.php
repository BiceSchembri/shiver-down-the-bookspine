<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SessionsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return false;
    // }

    public function rules(): array
    {
        return [
            'email' => ['required', 'exists:users,email'],
            'password' => ['required', 'confirmed'],
            'password_confirmation' => ['required']
        ];
    }

    public function messages(): array
    {
        return [
            'email.exists' => 'The provided credentials are invalid.',
            'password.required' => 'The password is required.',
            'password.confirmed' => 'The password confirmation doesn\'t match',
            'password_confirmation.required' => 'Please confirm the password.'
        ];
    }
}

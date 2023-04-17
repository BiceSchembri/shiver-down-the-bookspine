<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'firstname' => ['required', 'min:1', 'max:255'],
            'lastname' => ['required', 'min:1', 'max:255'],
            'username' => ['required', 'min:5', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'min:8', 'max:255'],

        ];
    }

    public function messages(): array
    {
        return [
            'firstname.required' => 'The first name is required.',
            'firstname.min' => 'The first name must be at least :min characters.',
            'firstname.max' => 'The first name may not exceed :max characters.',

            'lastname.required' => 'The last name is required.',
            'lastname.min' => 'The last name must be at least :min characters.',
            'lastname.max' => 'The last name may not exceed :max characters.',

            'username.min' => 'The first name must be at least :min characters.',
            'username.max' => 'The first name may not exceed :max characters.',
            'username.required' => 'The username is required.',

            'email.email' => 'The email must be a valid email address.',
            'email.required' => 'The email field is required.',
            'email.unique' => 'This email is unavailable.',
            'email.max' => 'The email may not exceed :max characters.',

            'password.required' => 'The password is required.',
            'password.min' => 'The password must be at least :min characters.',
            'password.max' => 'The password may not exceed :max characters.',
        ];
    }
}

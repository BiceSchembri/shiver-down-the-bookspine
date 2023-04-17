<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstname' => ['max:255'],
            'lastname' => ['max:255'],
            'description' => ['required', 'min:5', 'max:255'],
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'authorFirstname.max' => 'The author\'s first name(s) may not exceed :max characters.',
            'authorLastname.max' => 'The author\'s last name(s) may not exceed :max characters.',
            'description.required' => 'Some description is required.',
            'description.min' => 'The description must be at least :min characters.',
            'description.max' => 'The description may not exceed :max characters.',
        ];
    }
}

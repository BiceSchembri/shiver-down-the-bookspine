<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'title' => ['required', 'max:255'],
            'author' => ['required', 'max:255'],
            'description' => ['required', 'min:5', 'max:255']
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
            'title.required' => 'The title field is required.',
            'title.max' => 'The title may not be greater than :max characters.',
            'author.required' => 'The author is required (it can be Anonymous, or Various Authors).',
            'author.max' => 'The author name(s) may not exceed :max characters.',
            'description.required' => 'Some description is required.',
            'description.min' => 'The description must be at least :min characters.',
            'description.max' => 'The description may not exceed :max characters.',
        ];
    }
}

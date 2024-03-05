<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ContactFormRequest extends FormRequest
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
            'name' => 'required|alpha|max:255',
            'email' => 'required|email|max:255',
            'message' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'This field is required',
            'name.alpha' => 'This field must be a string',
            'name.max' => 'This must not exceed 255 characters',
            'email.required' => 'The email field is required',
            'email.email' => 'Please enter a valid email address',
            'email.max' => 'The email field must not exceed 255 characters',
        ];
    }
}

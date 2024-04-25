<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'role' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'This field is required!',
            'name.string' => 'This field must be a string!',
            'email.required' => 'This field is required!',
            'email.string' => 'This field is string!',
            'email.email' => 'Your email must follow the format "somemail@mail.com"!',
            'email.unique' => 'User with the same name already exists!',
        ];
    }
}

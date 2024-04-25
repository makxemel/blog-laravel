<?php

namespace App\Http\Requests\Admin\Post;

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
            'title' => 'required|string',
            'content' => 'required',
            'preview_image' => 'required|file',
            'main_image' => 'required|file',
            'category_id' => 'required|integer|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'This field is required!',
            'title.string' => 'This field must be a string!',
            'content.required' => 'This field is required!',
            'preview_image.required' => 'This field is required!',
            'preview_image.file' => 'This field must be a file!',
            'main_image.required' => 'This field is required!',
            'main_image.file' => 'This field must be a file!',
            'category_id.required' => 'This field is required!',
            'category_id.integer' => 'Category ID must be a number!',
            'category_id.exists' => 'This category ID is not in the database!',
            'tag_ids.array' => 'This field must be an array!',
        ];
    }
}

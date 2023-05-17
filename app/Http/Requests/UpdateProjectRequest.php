<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|unique:projects',
            'cover' => 'required',
            'description' => 'required',
            'category' => 'required',
            'link' => 'url|nullable',
            'client' => 'string|nullable',
            'private' => 'boolean',
        ];
    }
}

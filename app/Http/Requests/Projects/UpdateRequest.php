<?php

namespace App\Http\Requests\Projects;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['string', 'min:3'],
            'description' => ['nullable', 'string', 'between:20,512'],
            'link' => ['nullable', 'url'],
            'github_url' => ['nullable', 'url'],
            'tecnologies' => ['required', 'array', 'min:1'],
        ];
    }
}

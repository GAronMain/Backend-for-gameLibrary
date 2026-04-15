<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePublisherRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'         => [
                'sometimes',
                'string',
                'max:255',
                Rule::unique('publishers')->ignore($this->route('publisher')),
            ],
            'headquarters' => 'sometimes|nullable|string|max:255',
            'is_active'    => 'sometimes|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'name.max'      => 'A név maximum 255 karakter lehet.',
            'name.unique'   => 'Ez a kiadó név már létezik.',
            'is_active.boolean' => 'Az is_active mező csak 0 vagy 1 lehet.',
        ];
    }
}
<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePublisherRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'         => 'required|string|max:255|unique:publishers,name',
            'headquarters' => 'nullable|string|max:255',
            'is_active'    => 'nullable|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'A kiadó neve kötelező.',
            'name.unique'   => 'Ez a kiadó név már létezik az adatbázisban.',
            'name.max'      => 'A név maximum 255 karakter lehet.',
            'is_active.boolean' => 'Az is_active mező csak 0 vagy 1 lehet.',
        ];
    }
}
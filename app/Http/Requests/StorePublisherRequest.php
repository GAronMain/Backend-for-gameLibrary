<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePublisherRequest extends FormRequest
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
            "name" => "required|string|max:255|unique:publishers",
            "headquarters" => "nullable|string|max:255",
            "is_active" => "nullable|integer|max:1"
        ];
    }

    public function messages(): array
    {
        return [
            // Kiadó neve
            'name.required' => 'A kiadó neve kötelező.',
            'name.string'   => 'A névnek szöveges formátumúnak kell lennie.',
            'name.max'      => 'A név nem lehet hosszabb 255 karakternél.',
            'name.unique'   => 'Ez a kiadó név már létezik az adatbázisban.',

            // Székhely
            'headquarters.string' => 'A székhelynek szöveges formátumúnak kell lennie.',
            'headquarters.max'    => 'A székhely nem lehet hosszabb 255 karakternél.',

            // Aktív státusz
            'is_active.integer'   => 'Az is_active mező csak szám lehet.',
            'is_active.max'       => 'Az is_active mező értéke maximum 1 lehet (0 vagy 1).',
        ];
    }
}
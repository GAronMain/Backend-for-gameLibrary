<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateGameRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'           => [
                'nullable',
                'string',
                'max:255',
                Rule::unique('games')->ignore($this->route('game')),
            ],
            'release_year'   => 'sometimes|integer|min:1970|max:2030',
            'genre'          => 'sometimes|string|max:100',
            'publisher_id'   => 'sometimes|integer|exists:publishers,id',
            'platforms'      => 'sometimes|array|min:1',
            'platforms.*'    => 'sometimes|string|distinct|max:20',
            'cover'          => 'nullable|url|max:500',
            'freetogame_url' => 'nullable|url|max:500',
        ];
    }

    public function messages(): array
    {
        return [
            'name.max'              => 'A név maximum 255 karakter lehet.',
            'name.unique'           => 'Ez a játék név már létezik.',

            'release_year.integer'  => 'Az évnek számnak kell lennie.',
            'release_year.min'      => 'A játék nem lehet 1970 előtti.',
            'release_year.max'      => 'A megadott év nem lehet 2030-nál későbbi.',

            'genre.max'             => 'A műfaj maximum 100 karakter lehet.',
            'publisher_id.exists'   => 'A megadott kiadó nem létezik az adatbázisban.',

            'platforms.min'         => 'Legalább egy platformot meg kell jelölnöd.',
            'platforms.*.distinct'  => 'A platformok listájában ne legyenek ismétlések.',
        ];
    }
}
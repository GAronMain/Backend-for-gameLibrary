<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGameRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'           => 'required|string|max:255|unique:games,name',
            'release_year'   => 'required|integer|min:1970|max:2030',
            'genre'          => 'required|string|max:100',
            'publisher_id'   => 'required|integer|exists:publishers,id',
            'platforms'      => 'required|array|min:1',
            'platforms.*'    => 'required|string|distinct|max:20',
            'cover'          => 'nullable|url|max:500',
            'freetogame_url' => 'nullable|url|max:500',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'         => 'A játék nevének megadása kötelező.',
            'name.unique'           => 'Ez a játék már szerepel az adatbázisunkban.',
            'name.max'              => 'A név maximum 255 karakter lehet.',

            'release_year.required' => 'A megjelenési év megadása kötelező.',
            'release_year.min'      => 'Csak 1970 utáni játékokat rögzíthetsz.',
            'release_year.max'      => 'A megjelenési év nem lehet 2030-nál későbbi.',

            'genre.required'        => 'A műfaj megadása kötelező.',
            'genre.max'             => 'A műfaj maximum 100 karakter lehet.',

            'publisher_id.required' => 'A kiadó azonosítója kötelező.',
            'publisher_id.exists'   => 'A megadott kiadó nem létezik az adatbázisban.',

            'platforms.required'    => 'Legalább egy platformot meg kell adnod.',
            'platforms.min'         => 'Legalább egy platformot válassz ki.',
            'platforms.*.distinct'  => 'Egy platformot csak egyszer szerepeltethetsz.',
            'platforms.*.max'       => 'A platform neve maximum 20 karakter lehet.',

            'cover.url'             => 'A borítóképnek érvényes URL-nek kell lennie.',
            'freetogame_url.url'    => 'A FreeToGame linknek érvényes URL-nek kell lennie.',
        ];
    }
}
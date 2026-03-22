<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGameRequest extends FormRequest
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
            "name" => "required|string|max:255|unique:games,name",
            "release_year" => "required|integer|min:1970|max:2030",
            "genre" => "required|string|max:100",
            "publisher_id" => "required|integer|exists:publishers,id",
            "platforms" => "required|array|min:1",
            "platforms.*" => "required|string|distinct|max:15",
            "cover" => "nullable|url|max:255",
            "freetogame_url" => "nullable|url|max:255"
        ];
    }

    public function messages(): array
{
    return [
        // Név mező
        'name.required' => 'A játék nevének megadása kötelező.',
        'name.string' => 'A névnek szöveges formátumúnak kell lennie.',
        'name.max' => 'A név nem lehet hosszabb 255 karakternél.',
        'name.unique' => 'Ez a játék már szerepel az adatbázisunkban.',

        // Megjelenési év
        'release_year.required' => 'A megjelenési év megadása kötelező.',
        'release_year.integer' => 'Az évnek számnak kell lennie.',
        'release_year.min' => 'Csak 1970 utáni játékokat rögzíthetsz.',
        'release_year.max' => 'A megadott év nem lehet a távoli jövőben.',

        // Műfaj
        'genre.required' => 'A műfaj megadása kötelező.',
        'genre.max' => 'A műfaj hossza maximum 100 karakter lehet.',

        // Kiadó (Léteznie kell a publishers táblában!)
        'publisher_id.required' => 'A kiadó azonosítója kötelező.',
        'publisher_id.exists' => 'A kiválasztott kiadó nem létezik az adatbázisban.',

        // Platformok (Tömb kezelése)
        'platforms.required' => 'Legalább egy platformot meg kell adnod.',
        'platforms.array' => 'A platformoknak listaként kell érkezniük.',
        'platforms.min' => 'Válassz ki legalább egy platformot.',
        'platforms.*.distinct' => 'Egy platformot csak egyszer szerepeltethetsz a listában.',
        'platforms.*.max' => 'A platform neve maximum 15 karakter lehet.',

        // URL-ek
        'cover.url' => 'A borítóképnek érvényes URL címnek kell lennie.',
        'freetogame_url.url' => 'A játék linkjének érvényes URL címnek kell lennie.',
    ];
}
}

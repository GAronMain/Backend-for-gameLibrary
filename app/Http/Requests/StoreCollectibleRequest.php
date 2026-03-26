<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCollectibleRequest extends FormRequest
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
            "game_id" => "required|integer|exists:games,id",
            "type" => "required|string|max:100",
            "description" => "required|string|max:155",
            "images" => "required|array|min:1",
            'images.*' => 'url',
            "map_location" => "nullable|array"
        ];
    }

    public function messages(): array
    {
        return [
            // Játék azonosító
            'game_id.required' => 'A játék azonosítójának megadása kötelező.',
            'game_id.integer' => 'A játék azonosítójának számnak kell lennie.',
            'game_id.max' => 'A játék azonosítója nem lehet nagyobb 10-nél.',
            // Ha hozzáadod az exists szabályt:
             'game_id.exists' => 'A kiválasztott játék nem létezik az adatbázisban.',

            // Típus (pl. figura, kártya, stb.)
            'type.required' => 'A típus megadása kötelező.',
            'type.string' => 'A típusnak szöveges formátumúnak kell lennie.',
            'type.max' => 'A típus hossza nem haladhatja meg a 100 karaktert.',

            // Leírás
            'description.required' => 'A leírás megadása kötelező.',
            'description.string' => 'A leírásnak szövegnek kell lennie.',
            'description.max' => 'A leírás maximum 155 karakter lehet.',

            // Képek (Tömb és URL-ek)
            'images.required' => 'Legalább egy képet meg kell adnod.',
            'images.array' => 'A képeket listaként kell beküldened.',
            'images.min' => 'Adj meg legalább egy kép URL-t.',
            'images.*.url' => 'A megadott képek mindegyikének érvényes URL-nek kell lennie.',

            // Térkép helyszín
            'map_location.array' => 'A térkép koordinátáinak lista formátumban kell lenniük.',
        ];
    }
}

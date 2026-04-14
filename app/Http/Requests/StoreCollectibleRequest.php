<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCollectibleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Az igazi jogosultságot a CollectiblePolicy kezeli
    }

    public function rules(): array
    {
        return [
            'game_id'      => 'required|integer|exists:games,id',
            'type'         => 'required|string|max:100',
            'description'  => 'required|string|min:10|max:500',   // 155 helyett 500, mert description TEXT
            'images'       => 'required|array|min:1',
            'images.*'     => 'required|url|max:500',
            'map_location' => 'nullable|array',
            'map_location.*' => 'nullable|numeric',   // lat és lng számok legyenek
        ];
    }

    public function messages(): array
    {
        return [
            'game_id.required'      => 'A játék azonosítójának megadása kötelező.',
            'game_id.integer'       => 'A játék azonosítójának számnak kell lennie.',
            'game_id.exists'        => 'A kiválasztott játék nem létezik az adatbázisban.',

            'type.required'         => 'A kollekció típusának megadása kötelező (pl. Weapon Skin, Character Skin).',
            'type.string'           => 'A típusnak szöveges formátumnak kell lennie.',
            'type.max'              => 'A típus maximum 100 karakter hosszú lehet.',

            'description.required'  => 'A leírás megadása kötelező.',
            'description.min'       => 'A leírás legalább 10 karakter hosszú kell legyen.',
            'description.max'       => 'A leírás maximum 500 karakter lehet.',

            'images.required'       => 'Legalább egy képet meg kell adnod.',
            'images.array'          => 'A képeket tömbként (array) kell beküldened.',
            'images.min'            => 'Legalább egy kép URL-t adj meg.',
            'images.*.required'     => 'Minden kép URL megadása kötelező.',
            'images.*.url'          => 'Minden képnek érvényes URL-nek kell lennie.',
            'images.*.max'          => 'Egy kép URL-je maximum 500 karakter lehet.',

            'map_location.array'    => 'A térkép helyszínének tömb formátumban kell lennie (pl. [lat, lng]).',
            'map_location.*.numeric' => 'A koordináták számértékek kell legyenek.',
        ];
    }
}

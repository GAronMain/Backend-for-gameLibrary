<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCollectibleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'game_id'      => 'sometimes|integer|exists:games,id',
            'type'         => 'sometimes|string|max:100',
            'description'  => 'sometimes|string|min:10|max:500',
            'images'       => 'sometimes|array|min:1',
            'images.*'     => 'sometimes|url|max:500',
            'map_location' => 'sometimes|nullable|array',
            'map_location.*' => 'sometimes|nullable|numeric',
        ];
    }

    public function messages(): array
    {
        return [
            'game_id.integer'       => 'A játék azonosítójának számnak kell lennie.',
            'game_id.exists'        => 'A kiválasztott játék nem létezik az adatbázisban.',

            'type.string'           => 'A típusnak szöveges formátumnak kell lennie.',
            'type.max'              => 'A típus maximum 100 karakter hosszú lehet.',

            'description.min'       => 'A leírás legalább 10 karakter hosszú kell legyen.',
            'description.max'       => 'A leírás maximum 500 karakter lehet.',

            'images.array'          => 'A képeket tömbként kell beküldened.',
            'images.min'            => 'Legalább egy kép URL-t adj meg.',
            'images.*.url'          => 'Minden képnek érvényes URL-nek kell lennie.',
            'images.*.max'          => 'Egy kép URL-je maximum 500 karakter lehet.',

            'map_location.array'    => 'A térkép helyszínének tömb formátumban kell lennie.',
            'map_location.*.numeric'=> 'A koordináták számértékek kell legyenek.',
        ];
    }
}
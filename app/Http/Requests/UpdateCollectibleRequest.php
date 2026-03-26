<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCollectibleRequest extends FormRequest
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
            "game_id" => "required|integer|max:10",
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
        // Játék ID
        'game_id.required' => 'A játék azonosítója kötelező a frissítéshez.',
        'game_id.integer' => 'A játék azonosítójának számnak kell lennie.',
        'game_id.max' => 'Az azonosító nem lehet nagyobb 10-nél.',

        // Típus
        'type.required' => 'A típus megadása kötelező.',
        'type.string' => 'A típusnak szövegesnek kell lennie.',
        'type.max' => 'A típus hossza nem haladhatja meg a 100 karaktert.',

        // Leírás
        'description.required' => 'A leírás megadása kötelező.',
        'description.max' => 'A leírás maximum 155 karakter lehet.',

        // Képek
        'images.required' => 'Legalább egy képet meg kell adnod a frissítés során is.',
        'images.array' => 'A képek formátuma érvénytelen.',
        'images.min' => 'Válassz ki legalább egy képet.',
        'images.*.url' => 'Minden képnek érvényes URL címnek kell lennie.',

        // Helyszín
        'map_location.array' => 'A térkép helyszínének lista (array) formátumban kell lennie.'
    ];
}
}

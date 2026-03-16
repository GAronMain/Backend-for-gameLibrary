<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreFavoriteRequest extends FormRequest
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
        "game_id" => [
            "required",
            "integer",
            "exists:games,id",
            // Ez a rész ellenőrzi, hogy a user_id és game_id páros egyedi-e:
            Rule::unique('favorites')->where(function ($query) {
                return $query->where('user_id', auth()->id());
            }),
        ]
    ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'game_id' => $this->route('gameId'),
        ]);
    }

    public function messages(): array
    {
        return [
            'game_id.exists' => 'Ez a játék nem szerepel a kínálatunkban.',
            'game_id.required' => 'A játék azonosítója megadása kötelező.',
            'game_id.unique' => 'Ez a játék már szerepel a kedvenceid között!', 
        ];
    }

}

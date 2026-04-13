<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreFavoriteRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;                    // Az igazi jogosultságot a Policy kezeli
    }

    public function rules(): array
    {
        return [
            'game_id' => [
                'required',
                'integer',
                'exists:games,id',
                Rule::unique('favorites', 'game_id')
                    ->where('user_id', auth()->id()),  
            ],
        ];
    }

    /**
     * Az URL-ből jövő {gameId} paramétert átalakítjuk game_id mezővé
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'game_id' => $this->route('gameId'),
        ]);
    }

    public function messages(): array
    {
        return [
            'game_id.required' => 'A játék azonosítója megadása kötelező.',
            'game_id.integer'  => 'A játék azonosítójának számnak kell lennie.',
            'game_id.exists'   => 'Ez a játék nem szerepel az adatbázisban.',
            'game_id.unique'   => 'Ez a játék már szerepel a kedvenceid között!',
        ];
    }
}
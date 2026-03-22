<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateGameRequest extends FormRequest
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
            "name" => "nullable|string|max:255", Rule::unique('games')->ignore($this->route('game')),
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
        // Név - itt nullable, de ha megadják, validáljuk
        'name.string' => 'A névnek szöveges formátumúnak kell lennie.',
        'name.max' => 'A név nem lehet hosszabb 255 karakternél.',

        // Megjelenési év
        'release_year.required' => 'A megjelenési év módosításakor is kötelező az évet megadni.',
        'release_year.integer' => 'Az évnek számnak kell lennie.',
        'release_year.min' => 'A játék nem lehet 1970 előtti.',
        'release_year.max' => 'A megadott év nem lehet 2030-nál későbbi.',

        // Kiadó és műfaj
        'genre.required' => 'A műfaj megadása kötelező.',
        'publisher_id.required' => 'A kiadó azonosítója kötelező.',
        'publisher_id.exists' => 'A megadott kiadó nem található az adatbázisban.',

        // Platformok
        'platforms.required' => 'Frissítéskor is meg kell adnod a platformokat.',
        'platforms.array' => 'A platformoknak listának kell lenniük.',
        'platforms.min' => 'Legalább egy platformot meg kell jelölnöd.',
        'platforms.*.distinct' => 'A platformok listájában ne legyenek ismétlések.',

        // URL-ek
        'cover.url' => 'A borítókép címe érvénytelen URL.',
        'freetogame_url.url' => 'A játék linkje érvénytelen URL.',
    ];
}
}

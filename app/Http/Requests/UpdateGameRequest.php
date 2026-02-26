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
            "name" => "nullable|string|max:255",
            "release_year" => "required|integer|min:1970|max:2030",
            "genre" => "required|string|max:100",
            "publisher_id" => "required|integer|exists:publishers,id",
            "platforms" => "required|array|min:1",
            "platforms.*" => "required|string|distinct|max:15",
            "cover" => "nullable|url|max:255",
            "freetogame_url" => "nullable|url|max:255"
        ];
    }
}

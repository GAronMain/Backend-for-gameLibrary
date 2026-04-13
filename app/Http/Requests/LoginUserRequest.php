<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginUserRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'email'    => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ];
    }

    public function messages(): array
    {
        return [
            'email.required'    => 'Az email cím megadása kötelező.',
            'email.email'       => 'Érvénytelen email formátum.',
            'password.required' => 'A jelszó megadása kötelező.',
            'password.min'      => 'A jelszó túl rövid.',
        ];
    }
}
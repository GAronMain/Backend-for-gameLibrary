<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // bárki regisztrálhat
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'name'                  => ['required', 'string', 'min:3', 'max:255'],
            'email'                 => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password'              => [
                'required',
                'confirmed',
                Password::defaults()
                    ->min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
            ],
            'password_confirmation' => ['required'],
        ];
    }

    /**
     * Custom error messages (magyar nyelven - sulis projekthez ajánlott)
     */
    public function messages(): array
    {
        return [
            'name.required'                  => 'A név megadása kötelező.',
            'name.min'                       => 'A név legalább 3 karakter hosszú kell legyen.',
            'email.required'                 => 'Az email cím megadása kötelező.',
            'email.email'                    => 'Érvénytelen email formátum.',
            'email.unique'                   => 'Ez az email cím már foglalt.',
            'password.required'              => 'A jelszó megadása kötelező.',
            'password.min'                   => 'A jelszónak minimum 8 karakterből kell állnia.',
            'password.letters'               => 'A jelszónak tartalmaznia kell betűket.',
            'password.mixed_case'            => 'A jelszónak tartalmaznia kell kis- és nagybetűt is.',
            'password.numbers'               => 'A jelszónak tartalmaznia kell számokat.',
            'password.symbols'               => 'A jelszónak tartalmaznia kell speciális karaktert (!@#$ stb.).',
            'password.confirmed'             => 'A két jelszó nem egyezik.',
        ];
    }
}
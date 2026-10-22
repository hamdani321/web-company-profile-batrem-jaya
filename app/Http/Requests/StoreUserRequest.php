<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Override;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::user() != null;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed'],
            'role' => ['required', 'in:admin,super-admin'],
        ];
    }

    #[Override]
    public function messages()
    {
        return [
            "*.required" => ":attribute tidak boleh kosong!",
            'email.email' => ':attribute harus berupa email!',
            "password.confirmed" => ":attribute tidak sama dengan konfirmasi password!",
            "role.in" => ":attribute role tidak sesuai!"
        ];
        // return parent::messages();
    }

    #[Override]
    public function attributes()
    {
        return [
            "name" => "Username",
            "email" => "Email",
            "password" => "Password",
            "role" => "Role"
        ];
    }
}

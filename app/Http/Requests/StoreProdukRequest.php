<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Override;

class StoreProdukRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::user() != null && Auth::user()->hasRole('super-admin');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama' => ['required'],
            'kode' => ['required'],
            'deskripsi' => ['required'],
            'harga' => ['required', 'numeric'],
            'stok' => ['required', 'numeric'],
            'foto' => ['required', 'file', 'mimes:png,jpg,jpeg'],
        ];
    }

    #[Override]
    public function messages()
    {
        return [
            "*.required" => ":attribute tidak boleh kosong!",
            "*.numeric" => ":attribute harus berupa angka!",
            "foto.file" => ":attribute harus berupa file",
            'foto.mimes' => ":attribute harus berformat JPG, JPEG atau PNG"
        ];

    }

    #[Override]
    public function attributes()
    {
        return [
            "nama" => "Nama",
            "kode" => "Kode",
            "deskripsi" => "Deskripsi",
            "harga" => "Harga",
            "stok" => "Stok",
            "foto" => "Gambar"
        ];
        // return parent::attributes();
    }
}

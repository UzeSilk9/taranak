<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'username' => 'required',
            'password' => 'required|min:8'
        ];
    }

    public function massages(): array
    {
        return [
            'username.required' => 'Username Tidak Boleh Kosong',
            'password.requied' => 'Pastikan Password Terisi',
            'password.min' => 'Password Harus diisi minimal 8 digit'
        ];
    }
}

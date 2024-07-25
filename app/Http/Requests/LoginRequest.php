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
            'name' => 'required|required',
            'password' => 'required|min:5',
        ];
    }

    public function messages(): array
    {
        return [

            'name.required' => 'name tidak boleh dikosong',
            'password.min' => 'Minimal password 8 digit',
            'password.required' => 'password tidak boleh kosong'
        ];
    }
}

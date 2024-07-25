<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class tunggalrequest extends FormRequest
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
            'orisinil' => 'required',
            'kekayaan_teknik' => 'required',
            'kemantapan_gerak' => 'required',
            'penampilan' => 'required'
        ];
    }


    public function messages(): array
    {
        return [
            'orisinil.required' => 'data harus diisikan',
            'kekayaaan_teknik.required' => 'data harus diisikan',
            'kemantapan_gerak.required' => 'data harus diisikan',
            'penampilan.required' => 'data harus diisikan',

        ];
    }
}

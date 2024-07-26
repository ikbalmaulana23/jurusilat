<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JadwalRequest extends FormRequest
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
            'nama' => 'required',
            'kontingen' => 'required',
            'tanggal_hari' => 'required',
            'status' => 'required'
        ];
    }

    public function messages(): array
    {
        return [

            'nama.required' => 'nama tidak boleh dikosong',
            'kontingen.required' => 'kontingen tidak boleh dikosong',
            'tanggal_hari.required' => 'tanggal_hari tidak boleh dikosong',
            'status.required' => 'status harus di isi',
        ];
    }
}

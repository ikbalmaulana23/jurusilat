<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class inputrequest extends FormRequest
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
            'jen_kelamin' => 'required',
            'tpt_lahir' => 'required',
            'tgl_lahir' => 'required',
            'tb' => 'required',
            'bb' => 'required',
            'kelas' => 'required',
            'asal_sekolah' => 'required',
            'kategori_tanding' => 'required',
            'golongan' => 'required',
            'kode_gr' => 'required',
            'kelas_tanding_FK' => 'required',
            'kontingen' => 'required',
            'foto' => 'required',
            // 'ktp' => 'required',
            // 'akta_lahir' => 'required',
            // 'ijazah' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'nama.required' => 'nama harus diisi',
            'jen_kelamin.required' => 'jenis kelamin harus diisin',
            'tpt_lahir.required' => 'tempat lahir harus diisi',
            'tgl_lahir.required' => 'tanggal lahir harus diisi',
            'tb.required' => 'tinggi badan harus diisin',
            'bb.required' => 'berat badan harus diiisi',
            'kelas.required.required' => 'kelas harus diisi',
            'asal_sekolah.required' => 'asal sekolah harus diisi',
            'kategori_tanding.required' => 'kategori tanding harus diisi',
            'golongan.required' => 'golongan harus diisi',
            'kode_gr.required' => 'kode gr harus diisi',
            'kelas_tanding_FK.required' => 'kelas tanding FK harus diisi',
            'kontingen.required' => 'kontingen harus diisi',
            'foto.required' => 'foto harus diisi',
            // 'ktp.required' => 'ktp harus diisi',
            // 'akta_lahir.required' => 'akta kelahiran harus diisi',
            // 'ijazah.required' => 'ijazah harus diisi'

        ];
    }
}

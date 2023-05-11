<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PegawaiCreateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'nip' => 'unique:pegawai|max:10|required',
            'name' => 'max:50|required',
            'gender' => 'required',
            'class_id' => 'required'
        ];
    }

    public function attributes(): array
    {
    return [
        'class_id' => 'Golongan',
    ];
    }

    public function messages()
    {
        return [
            'nip.required' => 'NIP wajib diisi',
            'nip.max' => 'NIP maksimal :max Karakter',
            'name.required' => 'name wajib diisi'
        ];
    }
}

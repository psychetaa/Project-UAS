<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSbujectRequest extends FormRequest
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
            'NAMA_ASAL_SEKOLAH' =>'string',
            'JENIS_SEKOLAH'=> 'string',
            'JURUSAN_SEKOLAH'=> 'string',
            'KOTA_SEKOLAH'=> 'string',
            'JUMLAH_NILAI_UAN_SEKOLAH_RAPORT_TERAKHIR_SMT_SEBELUMNYA'=> 'string',
            
        ];
    }
}

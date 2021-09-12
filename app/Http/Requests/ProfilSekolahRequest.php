<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfilSekolahRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'namasekolah' => ['required'],
            // 'npsn' => '',
            'alamat' => ['required'],
            // 'kelurahan' => ['required' , 'alpha'],
            // 'kecamatan' => ['required' , 'alpha'],
            // 'kota' => ['required', 'alpha'],
            // 'provinsi' => ['required', 'alpha'],
            // 'kodepos' => ['required', 'numeric'],
            // 'lintang' => [''],
            // 'bujur' => [''],
            // 'telp' => [''],
            // 'email' => ['email:rfc,dns'],
            // 'website' => ['url'],
            // 'logo' => [''],
        ];
    }
}

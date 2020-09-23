<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StatusPengirimanRequest extends FormRequest
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
            'nama_pengiriman' => 'required|max:255',
            'lacak' => 'required',
            'waktu' => 'required',
            'destinasi' => 'required|max:255',
            'alamat' => 'required|max:255',
        ];
    }
}

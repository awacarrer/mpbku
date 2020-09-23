<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TrackingAreaRequest extends FormRequest
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
            'resi' => 'required|max:255',
            'id' => 'required|max:255',
            'kota_asal' => 'required|max:255',
            'kota_tujuan' => 'required|max:255',
            'lacak' => 'required',
            'waktu' => 'required',
            'destinasi' => 'required',
            'alamat' => 'required|max:255',
            'pengiriman_barang_id' => 'required'
        ];
    }
}

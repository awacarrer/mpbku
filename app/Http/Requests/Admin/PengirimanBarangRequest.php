<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PengirimanBarangRequest extends FormRequest
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
            'tanggal_pengiriman' => 'required',
            'pelanggan_id' => 'required|max:255',
            'organisasi_penerima' => 'required',
            'email_penerima' => 'required',
            'nama_barang' => 'required|max:255',
            'berat_barang' => 'required',
            'biaya' => 'required',
            'alamat_penerima' => 'required|max:255',
            'pelanggan_id' => 'required|max:255'
        ];
    }
}

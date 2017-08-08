<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProdukRequest extends Request
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
            'nama_kategori' => 'required|string|max:20',
            'nama_subkategori' => 'required|string|max:20',
            'nama_barang' => 'required|string|max:20',
            'deskripsi' => 'required|string|max:100',
            'harga' => 'required',
            'status' => 'required|in:aktif,non_aktif',
            'foto' => 'sometimes|image|max:500|mimes:jpeg,jpg,bmp,png'
        ];
    }
}

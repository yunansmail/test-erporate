<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $fillable = ['nama_kategori', 'nama_subkategori', 'nama_barang', 'deskripsi', 'harga', 'status', 'foto'];
}

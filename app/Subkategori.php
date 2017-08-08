<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subkategori extends Model
{
    protected $table = 'subkategori';
    protected $fillable = ['id_kategori', 'nama_subkategori'];

    public function Kategori() {
    	return $this->belongsTo('App\Kategori', 'id_kategori');
    }
}

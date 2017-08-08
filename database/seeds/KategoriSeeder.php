<?php

use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = new App\Kategori([
        	'nama_kategori' => 'Gamis'
        	]);
        $kategori->save();

        $kategori = new App\Kategori([
        	'nama_kategori' => 'Jilbab'
        	]);
        $kategori->save();

        $kategori = new App\Kategori([
        	'nama_kategori' => 'Gaun'
        	]);
        $kategori->save();
    }
}

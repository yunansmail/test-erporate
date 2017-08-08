<?php

use Illuminate\Database\Seeder;

class SubkategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subkategori = new App\Subkategori([
        	'id_kategori' => 1,
        	'nama_subkategori' => 'Gamis Jersey',
        	]);
        $subkategori->save();

        $subkategori = new App\Subkategori([
        	'id_kategori' => 1,
        	'nama_subkategori' => 'Gamis Ciffon',
        	]);
        $subkategori->save();

		$subkategori = new App\Subkategori([
        	'id_kategori' => 1,
        	'nama_subkategori' => 'Gamis Wolfis',
        	]);
        $subkategori->save();

        $subkategori = new App\Subkategori([
        	'id_kategori' => 2,
        	'nama_subkategori' => 'Jilbab Single Layer',
        	]);
        $subkategori->save();

        $subkategori = new App\Subkategori([
        	'id_kategori' => 2,
        	'nama_subkategori' => 'Jilbab Double Layers',
        	]);
        $subkategori->save();

        $subkategori = new App\Subkategori([
        	'id_kategori' => 2,
        	'nama_subkategori' => 'Jilbab Triple Layers',
        	]);
        $subkategori->save();

        $subkategori = new App\Subkategori([
        	'id_kategori' => 3,
        	'nama_subkategori' => 'Gaun Pesta',
        	]);
        $subkategori->save();

        $subkategori = new App\Subkategori([
        	'id_kategori' => 3,
        	'nama_subkategori' => 'Gaun Pengantin',
        	]);
        $subkategori->save();
    }
}

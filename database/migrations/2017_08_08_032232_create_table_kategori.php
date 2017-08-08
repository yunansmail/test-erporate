<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKategori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kategori', 20);
            $table->timestamps();
        });

        Schema::table('subkategori', function (Blueprint $table) {
            $table->foreign('id_kategori')->references('id')->on('kategori')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subkategori', function (Blueprint $table) {
            $table->dropForeign('subkategori_id_kategori_foreign');
        });
        Schema::drop('kategori');
    }
}

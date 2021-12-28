<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_brg', 120);
            $table->string('keterangan', 225);
            $table->string('kategori', 60);
            $table->integer('harga');
            $table->integer('stok');
            $table->text('gambar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_produks');
    }
}

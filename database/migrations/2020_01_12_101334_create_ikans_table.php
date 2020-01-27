<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIkansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ikans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_ikan');
            $table->string('kategori_ikan');
            $table->string('jenis_ikan');
            $table->string('foto');
            $table->integer('harga_ikan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ikans');
    }
}

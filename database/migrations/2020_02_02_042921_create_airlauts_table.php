<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAirlautsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airlauts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_ikan');
            $table->string('kategori_ikan');
            $table->string('jenis_ikan');
            $table->string('foto');
            $table->string('harga_ikan');
            $table->string('keterangan');
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
        Schema::dropIfExists('airlauts');
    }
}

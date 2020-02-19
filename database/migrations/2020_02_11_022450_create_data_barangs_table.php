<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_barangs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_ikan');
            $table->unsignedBigInteger('id_kategori');
            $table->string('nama_makanan');
            $table->string('stok_makanan');
            $table->string('total_pendapatan');
            $table->string('total_pengeluaran');
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
        Schema::dropIfExists('data_barangs');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pustakas', function (Blueprint $table) {
            $table->increments('id_pustaka');
            $table->string('nama_penulis', 100)->nullable();
            $table->integer('tahun')->nullable();
            $table->string('judul', 300);
            $table->string('penerbit', 300)->nullable();
            $table->string('referensi', 200)->nullable();
            $table->timestamp('deleted_at')->nullable();
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
        Schema::dropIfExists('pustakas');
    }
};

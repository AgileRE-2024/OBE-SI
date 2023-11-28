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
            $table->integer('id_pustaka')->primary('id_pustaka');
            $table->string('nama_penulis', 100);
            $table->integer('tahun');
            $table->string('judul', 100);
            $table->string('penerbit', 100);
            $table->text('referensi')->nullable();
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

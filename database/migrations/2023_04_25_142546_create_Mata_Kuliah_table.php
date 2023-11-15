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
        Schema::create('Mata_Kuliah', function (Blueprint $table) {
            $table->char('kodeMK', 4)->primary('kodeMK');
            $table->String('namaProdi',25);
            $table->foreign('namaProdi')->references('namaProdi')->on('Prodi')->onDelete('restrict');
            $table->char('nip', 18);
            $table->foreign('nip')->references('nip')->on('User')->onDelete('restrict');
            $table->string('namaMK', 100);
            $table->integer('jenisMK');
            $table->integer('sks');
            $table->integer('semester');
            $table->integer('kategoriMK');
            $table->string('deskripsiMK', 100);
            $table->date('deleted_at')->nullable();
            $table->text('penanggung_jawab')->nullable();
            $table->text('pengampu')->nullable();
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
        Schema::dropIfExists('Mata_Kuliah');
    }
};

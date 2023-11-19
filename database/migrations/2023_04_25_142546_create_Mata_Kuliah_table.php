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
            $table->char('kodeMK', 10)->primary();
            $table->String('namaProdi', 25)->nullable();
            $table->foreign('namaProdi')->references('namaProdi')->on('prodi')->onDelete('restrict');
            $table->char('nip', 18);
            $table->foreign('nip')->references('nip')->on('users')->onDelete('restrict');
            $table->string('namaMK', 100);
            $table->smallInteger('jenisMK');
            $table->integer('sks');
            $table->char('mat_kodeMK', 10)->nullable();
            $table->smallInteger('semester')->nullable();
            $table->smallInteger('kategoriMK');
            $table->string('deskripsiMK', 100);
            $table->text('prasyaratTambahan')->nullable();
            $table->string('penanggung_jawab', 100);
            $table->string('pengampu', 100);
            $table->timestamp('deleted_at');
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

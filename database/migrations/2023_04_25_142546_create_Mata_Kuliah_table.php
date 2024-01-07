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
            // $table->char('nip', 18)->nullable();
            // $table->foreign('nip')->references('nip')->on('users')->onDelete('restrict');
            $table->char('penanggung_jawab', 18)->nullable();
            $table->foreign('penanggung_jawab')->references('nip')->on('users')->onDelete('restrict');
            $table->char('pengampu', 18)->nullable();
            $table->foreign('pengampu')->references('nip')->on('users')->onDelete('restrict');
            $table->string('namaMK', 100);
            $table->smallInteger('jenisMK');
            $table->integer('sks');
            $table->char('mat_kodeMK', 40)->nullable();
            $table->smallInteger('semester')->nullable();
            $table->smallInteger('kategoriMK');
            $table->longText('deskripsiMK', 100)->nullable();
            $table->text('prasyaratTambahan')->nullable();
            // $table->string('penanggung_jawab', 100)->nullable();
            // $table->string('pengampu', 100)->nullable();
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
        Schema::dropIfExists('Mata_Kuliah');
    }
};

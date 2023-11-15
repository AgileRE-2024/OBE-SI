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
        Schema::create('Detail_Kelas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('NIM');
            $table->foreign('NIM')->references('NIM')->on('Mahasiswa');
            $table->unsignedBigInteger('kodeKelas');
            $table->foreign('kodeKelas')->references('kodeKelas')->on('Kelas');
            $table->integer('semesterAmbil');
            $table->integer('nilaiAkhir');
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
        Schema::dropIfExists('Detail_Kelas');
    }
};

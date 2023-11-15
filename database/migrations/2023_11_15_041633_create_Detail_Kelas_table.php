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
            $table->char('NIM',12)->nullable();
            $table->foreign('NIM')->references('NIM')->on('Mahasiswa');
            $table->char('kodeKelas',6)->nullable();
            $table->foreign('kodeKelas')->references('kodeKelas')->on('Kelas')->onDelete('restrict');
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

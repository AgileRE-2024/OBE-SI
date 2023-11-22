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
        Schema::create('Nilai_Mahasiswa', function (Blueprint $table) {
            $table->String('kodeNilai',10)->primary('kodeNilai');
            $table->char('nim',12);
            $table->char('kodeKelas',9);
            $table->char('kodeRPS',6);
            $table->char('semesterAmbil',2);
            $table->integer('nilaiAkhir')->nullable();
            $table->timestamps();
            $table->foreign('nim')->references('nim')->on('Mahasiswa')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('kodeKelas')->references('kodeKelas')->on('Kelas')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('kodeRPS')->references('kodeRPS')->on('RPS')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Nilai_Mahasiswa');
    }
};

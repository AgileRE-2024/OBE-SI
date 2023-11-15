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
        Schema::create('Minggu_RPS', function (Blueprint $table) {
            $table->char('kodeMingguRPS', 4)->primary('kodeMingguRPS');
            $table->foreign('id_rps')->references('id_rps')->on('RPS')->onDelete('restrict');
            $table->foreign('id_kriteriapenilaian')->references('id_kriteriapenilaian')->on('Kriteria_Penilaian')->onDelete('restrict');
            $table->foreign('kodePenilaian')->references('kodePenilaian')->on('Teknik_Penilaian')->onDelete('restrict');
            $table->foreign('kodeSubCPMK')->references('kodeSubCPMK')->on('SubCPMK')->onDelete('restrict');
            $table->string('mingguKe', 2);
            $table->date('deleted_at');
            $table->boolean('luring');
            $table->string('penugasan', 100);
            $table->text('waktuPembelajaran');
            $table->text('pengalaman_belajar');
            $table->text('bahan_kajian');
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
        Schema::dropIfExists('Minggu_RPS');
    }
};

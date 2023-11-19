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
            $table->char('id_rps', 7);
            $table->foreign('id_rps')->references('id_rps')->on('RPS')->onDelete('restrict');
            $table->char('id_kriteria_penilaians', 3);
            $table->foreign('id_kriteria_penilaians')->references('id_kriteria_penilaians')->on('kriteria_penilaians')->onDelete('restrict');
            $table->char('kodePenilaian', 2);
            $table->foreign('kodePenilaian')->references('kodePenilaian')->on('Teknik_Penilaian')->onDelete('restrict');
            $table->char('kodeSubCPMK', 12);
            $table->foreign('kodeSubCPMK')->references('kodeSubCPMK')->on('SubCPMK')->onDelete('restrict');
            $table->string('mingguKe', 2);
            $table->date('deleted_at')->nullable();
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

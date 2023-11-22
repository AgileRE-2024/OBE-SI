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
            $table->char('kodeMingguRPS', 12)->primary('kodeMingguRPS');
            $table->char('id_rps', 10)->nullable();
            $table->foreign('id_rps')->references('id_rps')->on('rps')->onDelete('restrict');
            $table->unsignedBigInteger('id_kriteria_penilaians')->nullable();
            $table->foreign('id_kriteria_penilaians')->references('id_kriteria_penilaians')->on('kriteria_penilaians')->onDelete('restrict');
            $table->string('kodePenilaian',10)->nullable();
            $table->foreign('kodePenilaian')->references('kodePenilaian')->on('Teknik_Penilaian')->onDelete('restrict');
            $table->char('kodeSubCPMK', 12)->nullable();
            $table->foreign('kodeSubCPMK')->references('kodeSubCPMK')->on('SubCPMK')->onDelete('restrict');
            $table->string('mingguKe', 2)->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->boolean('luring')->nullable();
            $table->string('penugasan', 100)->nullable();
            $table->text('waktuPembelajaran')->nullable();
            $table->text('pengalaman_belajar')->nullable();
            $table->text('bahan_kajian')->nullable();
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

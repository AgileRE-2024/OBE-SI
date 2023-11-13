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
            $table->char('kodeMingguRPS',10)->primary('kodeMingguRPS');
            $table->string('mingguKe',2);
            $table->date('deleted_at');
            $table->boolean('luring');
            $table->string('penugasan',100);
            $table->text('waktuPembelajaran');
            $table->text('pengalaman_belajar');
            $table->text('bahan_kajian');
            $table->foreign('kodeSubCPMK')->references('kodeSubCPMK')->on('SubCPMK')->onDelete('restrict');
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

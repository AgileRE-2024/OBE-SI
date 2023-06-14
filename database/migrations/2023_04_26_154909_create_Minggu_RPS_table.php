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
            $table->char('kodeSubCPMK',12);
            $table->string('mingguKe',2);
            $table->boolean('bentukPembelajaran');
            $table->text('indikatorMingguRPS');
            $table->string('kriteriaMingguRPS',100);
            $table->text('deskripsiPembelajaran');
            $table->string('materiPembelajaran',100);
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

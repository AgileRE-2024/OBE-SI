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
        Schema::create('Detail_RPS', function (Blueprint $table) {
            $table->char('kodeRPS',16);
            $table->char('kodeMingguRPS',10);
            $table->string('kodePenilaian',10)->nullable();
            $table->foreign('kodeRPS')->references('kodeRPS')->on('RPS')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('kodeMingguRPS')->references('kodeMingguRPS')->on('Minggu_RPS')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('kodePenilaian')->references('kodePenilaian')->on('Teknik_Penilaian')->onDelete('restrict')->onUpdate('cascade');
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
        Schema::dropIfExists('Detail_RPS');
    }
};

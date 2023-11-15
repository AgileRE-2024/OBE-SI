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
        Schema::create('Detail_Nilai', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_rps');
            $table->foreign('id_rps')->references('id_rps')->on('Detail_Penilaian_RPS');
            $table->unsignedBigInteger('kodePenilaian');
            $table->foreign('kodePenilaian')->references('kodePenilaian')->on('Detail_Penilaian_RPS');
            $table->unsignedBigInteger('NIM');
            $table->foreign('NIM')->references('NIM')->on('Mahasiswa');
            $table->integer('RPSPerTeknik');
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
        Schema::dropIfExists('Detail_Nilai');
    }
};

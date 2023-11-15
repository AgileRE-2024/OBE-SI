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
        Schema::create('Detail_Penilaian_RPS', function (Blueprint $table) {
            $table->id();
            $table->foreign('id_rps')->references('id_rps')->on('RPS');
            $table->unsignedBigInteger('kodePenilaian');
            $table->foreign('kodePenilaian')->references('kodePenilaian')->on('Teknik_Penilaian');
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
        Schema::dropIfExists('Detail_Penilaian_RPS');
    }
};

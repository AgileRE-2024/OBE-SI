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
        Schema::create('RPS', function (Blueprint $table) {
            $table->char('kodeRPS',6)->primary('kodeRPS');
            $table->year('tahunAjaran');
            $table->char('kodeMK',10);
            $table->char('kps',18);
            $table->foreign('kodeMK')->references('kodeMK')->on('Mata_Kuliah')->onDelete('restrict');
            $table->foreign('kps')->references('nip')->on('Dosen')->onDelete('restrict');
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
        Schema::dropIfExists('RPS');
    }
};

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
        Schema::table('Minggu_RPS', function (Blueprint $table) {
                $table->unsignedInteger('id_instrumen_penilaian')->nullable();
                $table->unsignedInteger('id_teknik_penilaian')->nullable();
                $table->unsignedBigInteger('id_komponen_penilaian')->nullable();
                $table->foreign('id_komponen_penilaian')->references('id_komponen_penilaian')->on('komponen_penilaian')->onDelete('restrict');
                $table->foreign('id_teknik_penilaian')->references('id_teknik_penilaian')->on('teknik_penilaian_rps')->onDelete('restrict');
                $table->foreign('id_instrumen_penilaian')->references('id_instrumen_penilaian')->on('instrumen_penilaian')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
};

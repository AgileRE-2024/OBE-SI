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
            $table->char('id_rps',7)->primary('id_rps');
            $table->char('nip', 18);
            $table->foreign('nip')->references('nip')->on('User')->onDelete('restrict');
            $table->char('kodeMK', 4);
            $table->foreign('kodeMK')->references('kodeMK')->on('Mata_Kuliah')->onDelete('restrict');
            $table->char('kodeRPS', 6);
            $table->date('tahunAjaran');
            $table->integer('semester');
            $table->String('diperiksa_oleh', 18);
            $table->String('disiapkan_oleh', 18);
            $table->String('disetujui_oleh', 18);
            $table->String('dibuat_oleh', 18);
            $table->integer('versi');
            $table->char('penanggungJawab', 18);
            $table->char('dosenPengampu', 100);
            $table->text('detail_penilaian');
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

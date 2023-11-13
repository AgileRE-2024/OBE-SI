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
            $table->char('idRPS',7)->primary('idRPS');
            $table->foreign('nip')->references('nip')->on('User')->onDelete('restrict');
            $table->foreign('kodeMK')->references('kodeMK')->on('Mata_Kuliah')->onDelete('restrict');
            $table->char('kodeRPS', 6);
            $table->date('tahunAjaran');
            $table->integer('semester');
            $table->date('created_at');
            $table->char('diperiksa_oleh', 18);
            $table->char('disiapkan_oleh', 18);
            $table->char('disetujui_oleh', 18);
            $table->char('dibuat_oleh', 18);
            $table->integer('versi');
            $table->char('penanggungJawab', 18);
            $table->char('dosenPengampu', 100);
            $table->date('updated_at');
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

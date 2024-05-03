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
        Schema::create('rps', function (Blueprint $table) {
            $table->char('id_rps',10)->primary();
            // $table->char('kodeRPS', 6)->nullable();
            $table->char('nip', 18)->nullable();
            $table->foreign('nip')->references('nip')->on('users')->onDelete('restrict')->onUpdate('cascade');
            $table->char('kodeMK', 10)->nullable();
            $table->foreign('kodeMK')->references('kodeMK')->on('Mata_Kuliah')->onDelete('restrict');
            $table->year('tahunAjaran')->nullable();
            $table->integer('semester')->nullable();
            $table->String('diperiksa_oleh', 18)->nullable();
            // $table->String('disiapkan_oleh', 18)->nullable();
            $table->String('disetujui_oleh', 18)->nullable();
            $table->String('dibuat_oleh', 18)->nullable();
            // $table->integer('versi')->nullable();
            $table->char('penanggungJawab', 18)->nullable();
            $table->char('dosenPengampu', 200)->nullable();
            $table->longText('detail_penilaian')->nullable();
            // $table->timestamp('deleted_at')->nullable();
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

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
        Schema::create('detail_kelas', function (Blueprint $table) {
            $table->char('nim',12)->nullable('nim');
            $table->foreign('nim')->references('nim')->on('Mahasiswa');
            $table->char('kodeKelas',9)->nullable('kodeKelas');
            $table->foreign('kodeKelas')->references('kodeKelas')->on('Kelas');
            $table->unsignedSmallInteger('SemesterAmbil')->nullable();
            $table->unsignedSmallInteger('NilaiAkhir')->nullable();
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
        Schema::dropIfExists('detail_kelas');
    }
};

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
        Schema::create('Kelas', function (Blueprint $table) {
            $table->char('kodeKelas',6)->primary('kodeKelas');
            $table->foreign('id_rps')->references('id_rps')->on('RPS')->onDelete('restrict');
            $table->foreign('kodeMK')->references('kodeMK')->on('Mata_Kuliah')->onDelete('restrict');
            $table->string('namaKelas', 100);
            $table->text('jadwal');
            $table->integer('kuota');
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
        Schema::dropIfExists('Kelas');
    }
};

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
            $table->char('id_rps',7);
            $table->foreign('id_rps')->references('id_rps')->on('RPS');
            $table->char('kodePenilaian', 2);
            $table->foreign('kodePenilaian')->references('kodePenilaian')->on('Teknik_Penilaian');
            $table->char('NIM',12);
            $table->foreign('NIM')->references('NIM')->on('Mahasiswa');
            $table->integer('NilaiPerTeknik');
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

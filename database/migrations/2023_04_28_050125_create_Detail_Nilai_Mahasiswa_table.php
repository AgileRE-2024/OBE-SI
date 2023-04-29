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
        Schema::create('Detail_Nilai_Mahasiswa', function (Blueprint $table) {
            $table->string('kodeNilai',10);
            $table->string('kodePenilaian',4);
            $table->char('nilaiPerTeknik',2);
            $table->foreign('kodeNilai')->references('kodeNilai')->on('Nilai_Mahasiswa')->onDelete('restrict');
            $table->foreign('kodePenilaian')->references('kodePenilaian')->on('Teknik_Penilaian')->onDelete('restrict');
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
        Schema::dropIfExists('Detail_Nilai_Mahasiwa');
    }
};

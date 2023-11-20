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
            $table->char('id_rps',16)->nullable();
            $table->foreign('id_rps')->references('id_rps')->on('RPS')->onDelete('restrict');
            $table->char('nilaiPerTeknik',2);
            $table->string('kodePenilaian',10)->nullable('kodePenilaian');
            $table->foreign('kodePenilaian')->references('kodePenilaian')->on('Teknik_Penilaian')->onDelete('cascade');
            $table->char('nim',12)->nullable();
            $table->foreign('nim')->references('nim')->on('Mahasiswa')->onDelete('cascade');
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

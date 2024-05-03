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
        Schema::create('detail_nilai_mahasiswa', function (Blueprint $table) {
            $table->char('id_rps',16)->nullable();
            $table->foreign('id_rps')->references('id_rps')->on('rps')->onDelete('restrict');
            $table->char('nilaiPerTeknik',2);
            $table->string('kodePenilaian',10)->nullable('kodePenilaian');
            $table->foreign('kodePenilaian')->references('kodePenilaian')->on('teknik_penilaian')->onDelete('cascade');
            $table->char('nim',12)->nullable();
            $table->foreign('nim')->references('nim')->on('mahasiswa')->onDelete('cascade');
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
        Schema::table('detail_nilai_mahasiswa', function (Blueprint $table) {
            $table->dropForeign('detail_nilai_mahasiswa_nim_foreign');
        });

        Schema::dropIfExists('detail_nilai_mahasiswa');
    }
};

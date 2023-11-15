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
        Schema::create('Kriteria_Penilaian', function (Blueprint $table) {
            $table->char('id_kriteriaPenilaian', 3)->primary('id_kriteriaPenilaian');
            $table->string('nama_kriteriaPenilaian', 20);
            $table->text('deskripsi_kriteriaPenilaian');
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
        Schema::dropIfExists('Kriteria_Penilaian');
    }
};

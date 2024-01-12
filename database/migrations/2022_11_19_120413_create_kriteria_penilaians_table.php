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
        Schema::create('kriteria_penilaians', function (Blueprint $table) {
            // $table->char('id_kriteria_penilaians',7)->autoIncrement()->primary();
            $table->id('id_kriteria_penilaians');
            $table->string('nama_kriteria_penilaians',30)->nullable();
            $table->string('indikatorPenilaian',50)->nullable();
            $table->string('deskripsi_kriteria_penilaians',200)->nullable();
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
        Schema::dropIfExists('kriteria_penilaians');
    }
};

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
        Schema::create('komponen_penilaian', function (Blueprint $table) {
            $table->id('id_komponen_penilaian');
            $table->string('nama_komponen_penilaian',1000);
            $table->char('id_rps', 10)->nullable();
            $table->foreign('id_rps')->references('id_rps')->on('rps')->onDelete('restrict');
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
        Schema::dropIfExists('komponen_penilaian');
    }
};

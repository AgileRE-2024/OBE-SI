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
        Schema::create('Teknik_Penilaian', function (Blueprint $table) {
            $table->string('kodePenilaian',10)->primary('kodePenilaian');
            $table->string('teknikPenilaian',100);
            $table->integer('bobotPenilaian');
            $table->string('kriteriaPenilaian',100);
            $table->string('tahapPenilaian',50);
            $table->string('instrumenPenilaian',50);
            $table->char('kodeRPS',16);
            $table->foreign('kodeRPS')->references('kodeRPS')->on('RPS')->onDelete('restrict');
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
        Schema::dropIfExists('Teknik_Penilaian');
    }
};

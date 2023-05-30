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
        Schema::create('Detail_Peran_Dosen', function (Blueprint $table) {
            $table->char('nip',18);
            $table->char('kodeRPS',16);
            $table->String('peranDosen',100);
            $table->timestamps();
            $table->foreign('nip')->references('nip')->on('users')->onDelete('restrict');
            $table->foreign('kodeRPS')->references('kodeRPS')->on('RPS')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Detail_Peran_Dosen');
    }
};

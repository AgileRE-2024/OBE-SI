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
        Schema::create('Memiliki', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_metode');
            $table->foreign('id_metode')->references('id_metode')->on('Metode');
            $table->unsignedBigInteger('kodeMingguRPS');
            $table->foreign('kodeMingguRPS')->references('kodeMingguRPS')->on('Minggu_RPS');
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
        Schema::dropIfExists('Memiliki');
    }
};

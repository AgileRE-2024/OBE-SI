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
        Schema::create('Berdasarkan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pustaka');
            $table->foreign('id_pustaka')->references('id_pustaka')->on('Pustaka');
            $table->unsignedBigInteger('kodeMingguRPS');
            $table->foreign('kodeMingguRPS')->references('kodeMingguRPS')->on('Minggu_RPS');
            $table->text('detail_pustaka');
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
        Schema::dropIfExists('Berdasarkan');
    }
};

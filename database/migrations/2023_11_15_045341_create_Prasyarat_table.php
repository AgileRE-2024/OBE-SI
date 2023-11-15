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
        Schema::create('Prasyarat', function (Blueprint $table) {
            $table->id();
            $table->foreign('Mat_kodeMK')->references('kodeMK')->on('Mata_Kuliah');
            $table->unsignedBigInteger('kodeMK');
            $table->foreign('kodeMK')->references('kodeMK')->on('Kelas');
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
        Schema::dropIfExists('Prasyarat');
    }
};

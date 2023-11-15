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
        Schema::create('Memiliki2', function (Blueprint $table) {
            $table->char('id_bentuk', 3);
            $table->foreign('id_bentuk')->references('id_bentuk')->on('Bentuk');
            $table->char('kodeMingguRPS', 4);
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
        Schema::dropIfExists('Memiliki2');
    }
};

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
        Schema::create('detail_pustaka_minggurps', function (Blueprint $table) {
            $table->integer('id_pustaka');
            $table->char('kodeMingguRPS', 4);
            $table->foreign('id_pustaka')->references('id_pustaka')->on('pustakas')->onDelete('restrict');
            $table->foreign('kodeMingguRPS')->references('kodeMingguRPS')->on('Minggu_RPS')->onDelete('restrict');
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
        Schema::dropIfExists('detail_pustaka_minggurps');
    }
};

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
        Schema::create('detail_metode_minggurps', function (Blueprint $table) {
            $table->unsignedBigInteger('id_metode');
            $table->char('kodeMingguRPS', 12);
            $table->foreign('id_metode')->references('id_metode')->on('metodes')->onDelete('restrict');
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
        Schema::dropIfExists('detail__metode__minggurps');
    }
};

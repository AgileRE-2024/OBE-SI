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
        Schema::create('Mengacu', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kodeCPLSN');
            $table->foreign('kodeCPLSN')->references('kodeCPLSN')->on('CPL_SN_Dikti');
            $table->unsignedBigInteger('kodeCPL');
            $table->foreign('kodeCPL')->references('kodeCPL')->on('CPL_Prodi');
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
        Schema::dropIfExists('Mengacu');
    }
};

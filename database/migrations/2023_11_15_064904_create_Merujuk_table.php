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
        Schema::create('Merujuk', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kodePL');
            $table->foreign('kodePL')->references('kodepPL')->on('Prodi_Lulusan');
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
        Schema::dropIfExists('Merujuk');
    }
};

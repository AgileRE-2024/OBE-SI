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
        Schema::create('Merumuskan', function (Blueprint $table) {
            $table->char('kodeCPL', 5);
            $table->foreign('kodeCPL')->references('kodeCPL')->on('CPL_Prodi');
            $table->char('kodeBK', 4);
            $table->foreign('kodeBK')->references('kodeBK')->on('Bahan_Kajian');
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
        Schema::dropIfExists('Merumuskan');
    }
};

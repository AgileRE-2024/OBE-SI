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
        Schema::create('Mencapai2', function (Blueprint $table) {
            $table->char('kodeCPMK', 7);
            $table->foreign('kodeCPMK')->references('kodeCPMK')->on('CPMK');
            $table->char('kodeMK', 4);
            $table->foreign('kodeMK')->references('kodeMK')->on('Mata_Kuliah');
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
        Schema::dropIfExists('Mencapai2');
    }
};

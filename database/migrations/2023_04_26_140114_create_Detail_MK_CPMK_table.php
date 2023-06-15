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
        Schema::create('Detail_MK_CPMK', function (Blueprint $table) {
            $table->id();
            $table->char('kodeMK', 10);
            $table->char('kodeCPMK', 10);
            $table->foreign('kodeMK')->references('kodeMK')->on('Mata_Kuliah')->onDelete('restrict');
            $table->foreign('kodeCPMK')->references('kodeCPMK')->on('CPMK')->onDelete('restrict');
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
        Schema::dropIfExists('Detail_MK_CPMK');
    }
};

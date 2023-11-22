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
        Schema::create('SubCPMK', function (Blueprint $table) {
            $table->char('kodeSubCPMK', 12)->primary('kodeSubCPMK');
            $table->text('deskripsiSubCPMK');
            $table->char('kodeCPMK', 10);
            $table->foreign('kodeCPMK')->references('kodeCPMK')->on('CPMK')->onDelete('restrict')->onUpdate('cascade');
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
        Schema::dropIfExists('SubCPMK');
    }
};

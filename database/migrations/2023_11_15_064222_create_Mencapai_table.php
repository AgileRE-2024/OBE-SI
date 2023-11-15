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
        Schema::create('Mencapai', function (Blueprint $table) {
            $table->char('kodeCPL', 5);
            $table->foreign('kodeCPL')->references('kodeCPL')->on('CPL_Prodi');
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
        Schema::dropIfExists('Mencapai');
    }
};

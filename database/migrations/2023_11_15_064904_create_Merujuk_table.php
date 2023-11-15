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
            $table->char('kodePL', 4);
            $table->foreign('kodePL')->references('kodePL')->on('Profil_Lulusan');
            $table->char('kodeCPL', 5);
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

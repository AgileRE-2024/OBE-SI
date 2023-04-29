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
        Schema::create('Detail_PL_CPLProdi', function (Blueprint $table) {
            $table->char('kodePL',4);
            $table->char('kodeCPL',5);
            $table->timestamps();
            $table->foreign('kodePL')->references('kodePL')->on('Profil_Lulusan')->onDelete('restrict');
            $table->foreign('kodeCPL')->references('kodeCPL')->on('CPL_Prodi')->onDelete('restrict');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Detail_PL_CPLProdi');
    }
};

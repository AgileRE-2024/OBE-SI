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
        Schema::create('Detail_SN_CPLProdi', function (Blueprint $table) {
            $table->char('kodeCPLSN', 10);
            $table->char('kodeCPL', 10);
            $table->timestamps();
            $table->foreign('kodeCPLSN')->references('kodeCPLSN')->on('CPL_SN_Dikti')->onDelete('restrict');
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
        Schema::dropIfExists('Detail_SN_CPLProdi');
    }
};

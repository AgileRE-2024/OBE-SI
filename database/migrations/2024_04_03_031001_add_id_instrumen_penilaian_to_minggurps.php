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
        Schema::table('minggu_rps', function (Blueprint $table) {
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('minggu_rps', function (Blueprint $table) {
            $table->unsignedInteger('id_instrumen_penilain');
            $table->unsignedInteger('id_teknik_penilain');
            $table->foreign('id_teknik_penilain')->references('id_teknik_penilain')->on('teknik_penilain_rps')->onDelete('restrict');
            $table->foreign('id_instrumen_penilain')->references('id_instrumen_penilain')->on('instrumen_penilain')->onDelete('restrict');
        });
    }
};

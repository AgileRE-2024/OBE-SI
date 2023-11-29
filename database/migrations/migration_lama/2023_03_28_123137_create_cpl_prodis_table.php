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
        Schema::create('cpl_prodis', function (Blueprint $table) {
            // $table->id();
            $table->String('kodeCPL',5)->unique()->primary()->onDelete('restrict')->onUpdate('cascade');
            $table->String('deskripsiCPL');
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
        Schema::dropIfExists('capaian_profil_lulusans');
    }
};

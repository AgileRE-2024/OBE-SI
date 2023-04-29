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
        Schema::create('pemetaan_pl_cpls', function (Blueprint $table) {
            $table->id();
            $table->String('kodeCPL',5);
            $table->String('kodePL',4);
            $table->timestamps();

            $table->foreign('kodeCPL')->references('kodeCPL')->on('cpl_prodis')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('kodePL')->references('kodePL')->on('profil_lulusans')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemetaan_pl_cpls');
    }
};

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
        Schema::create('detail_mk_cpmk', function (Blueprint $table) {
            $table->id();
            $table->char('kodeMK', 10);
            $table->char('kodeCPMK', 10);
            $table->foreign('kodeMK')->references('kodeMK')->on('mata_kuliah')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('kodeCPMK')->references('kodeCPMK')->on('cpmk')->onDelete('restrict')->onUpdate('cascade');
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
        Schema::dropIfExists('detail_mk_cpmk');
    }
};

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
        Schema::create('pemetaan_cpld_cplp', function (Blueprint $table) {
            $table->id();
            $table->String('kode_cpldikti');
            $table->String('kode_cplprodi');
            $table->timestamps();

            $table->foreign('kode_cpldikti')->references('kode_cpldikti')->on('cpldikti');
            $table->foreign('kode_cplprodi')->references('kode_cplprodi')->on('cplprodi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemetaan_cpld_cplp');
    }
};

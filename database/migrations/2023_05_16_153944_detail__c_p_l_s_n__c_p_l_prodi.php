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
        Schema::create('Detail_CPLSN_CPLProdi', function (Blueprint $table) {
            $table->id('id');
            $table->char('kode_cpldikti');
            $table->char('kode_cplprodi');
            $table->timestamps();
            $table->foreign('kode_cpldikti')->references('kode_cpldikti')->on('cpldikti')->onDelete('restrict');
            $table->foreign('kode_cplprodi')->references('kode_cplprodi')->on('cplprodi')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Detail_CPLSN_CPLProdi');
    }
};

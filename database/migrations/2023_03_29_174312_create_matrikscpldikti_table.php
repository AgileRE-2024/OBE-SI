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
        Schema::create('matrikscpldikti', function (Blueprint $table) {
            $table->id();
            $table->string('Kode_cplsndikti');
            $table->string('Cpl_Prodi');
            $table->bigInteger('cplsndikti_cpl01');
            $table->bigInteger('cplsndikti_cpl02');
            $table->bigInteger('cplsndikti_cpl03');
            $table->bigInteger('cplsndikti_cpl04');
            $table->bigInteger('cplsndikti_cpl05');
            $table->bigInteger('cplsndikti_cpl06');
            $table->bigInteger('cplsndikti_cpl07');
            $table->bigInteger('cplsndikti_cpl08');
            $table->bigInteger('cplsndikti_cpl09');
            $table->bigInteger('cplsndikti_cpl10');
            $table->bigInteger('cplsndikti_cpl11');
            $table->bigInteger('cplsndikti_cpl12');
            $table->bigInteger('cplsndikti_cpl13');
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
        Schema::dropIfExists('matrikscpldikti');
    }
};


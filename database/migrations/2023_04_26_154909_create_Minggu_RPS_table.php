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
        Schema::create('minggu_rps', function (Blueprint $table) {
            $table->char('kodeMingguRPS', 12)->primary('kodeMingguRPS');
            $table->char('id_rps', 10)->nullable();
            $table->foreign('id_rps')->references('id_rps')->on('rps')->onDelete('restrict');
            $table->unsignedBigInteger('id_bentuk')->nullable();
            $table->foreign('id_bentuk')->references('id_bentuk')->on('bentuks')->onDelete('restrict');
            $table->unsignedBigInteger('id_media')->nullable();
            $table->foreign('id_media')->references('id_media')->on('media')->onDelete('restrict');
            $table->char('kodeSubCPMK', 12)->nullable();
            $table->foreign('kodeSubCPMK')->references('kodeSubCPMK')->on('subcpmk')->onDelete('restrict');
            $table->boolean('luring')->nullable();
            $table->string('penugasan', 100)->nullable();
            $table->text('waktuPembelajaran')->nullable();
            $table->text('pengalaman_belajar')->nullable();
            $table->text('bahan_kajian')->nullable();
            $table->integer('bobot_nilai')->nullable();
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
        Schema::dropIfExists('minggu_rps');
    }
};

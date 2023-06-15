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
        Schema::create('Mata_Kuliah', function (Blueprint $table) {
            $table->char('kodeMK', 10)->unique();
            $table->string('namaMK', 100);
            $table->boolean('jenisMK');
            $table->integer('sks');
            $table->char('semester', 1)->nullable();
            $table->boolean('kategoriMK');
            $table->string('pustaka', 1000);
            $table->string('deskripsiMK', 100);
            $table->text('prasyaratTambahan')->nullable();
            $table->char('mat_kodeMK', 10)->index()->nullable();
            $table->primary('kodeMK');
            $table->foreign('mat_kodeMK')->references('kodeMK')->on('Mata_Kuliah');
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
        Schema::dropIfExists('Mata_Kuliah');
    }
};

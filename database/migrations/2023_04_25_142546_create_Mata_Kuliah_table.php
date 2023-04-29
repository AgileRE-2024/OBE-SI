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
            $table->char('kodeMK',4)->primary('kodeMK');
            $table->string('namaMK',100);
            $table->boolean('jenisMK');
            $table->integer('sks');
            $table->char('semester',1)->nullable();
            $table->boolean('kategoriMK');
            $table->string('pustaka',1000);
            $table->string('deskripsiMK',100);
            $table->text('prasyaratTambahan');
            $table->text('mat_kodeMK');
            // $table->foreign('mat_kodeMK')->references('kodeMK')->on('Mata_Kuliah')->onDelete('restrict');
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

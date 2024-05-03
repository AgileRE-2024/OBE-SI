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
        Schema::create('prasyarat', function (Blueprint $table) {
            $table->increments('id_mat_kodeMK');
            $table->char('kodeMK', 10);
            $table->foreign('kodeMK')->references('kodeMK')->on('mata_kuliah')->onDelete('restrict');
            $table->char('mat_kodeMK', 10)->nullable();
            $table->foreign('mat_kodeMK', 10)->references('kodeMK')->on('mata_kuliah')->onDelete('restrict');
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
        Schema::dropIfExists('prasyarat');
    }
};

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
        Schema::create('Bahan_Kajian', function (Blueprint $table) {
            $table->char('kodeBK',4)->primary('kodeBK');
            $table->string("namaBK", 100);
            $table->boolean("kategoriBK");
            $table->string("referensiBK", 100);
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
        Schema::dropIfExists('Bahan_Kajian');
    }
};

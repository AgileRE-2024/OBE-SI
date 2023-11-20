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
        Schema::create('Profil_Lulusan', function (Blueprint $table) {
            $table->char('kodePL', 10)->primary('kodePL');
            $table->text("deskripsiPL");
            $table->string("namaPL",100)->nullable();
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
        Schema::dropIfExists('Profil_Lulusan');
    }
};

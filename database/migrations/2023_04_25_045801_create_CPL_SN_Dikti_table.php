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
        Schema::create('CPL_SN_Dikti', function (Blueprint $table) {
            $table->char('kodeCPLSN',7);
            $table->text("deskripsiSN");
            $table->char("sumberSN", 8);
            $table->boolean("kategoriSN");
            $table->string("jenisSN", 20);
            $table->timestamps();
            $table->primary('kodeCPLSN');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CPL_SN_Dikti');
    }
};

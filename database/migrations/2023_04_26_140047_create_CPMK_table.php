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
        Schema::create('CPMK', function (Blueprint $table) {
            $table->char('kodeCPMK', 7)->primary('kodeCPMK');
            $table->char('kodeCPL', 5);
            $table->foreign('kodeCPL')->references('kodeCPL')->on('CPL_Prodi')->onDelete('restrict');
            $table->text('deskripsiCPMK');
            $table->date('deleted_at')->nullable();
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
        Schema::dropIfExists('CPMK');
    }
};

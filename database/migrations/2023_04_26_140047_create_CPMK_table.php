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
        Schema::create('cpmk', function (Blueprint $table) {
            $table->char('kodeCPMK', 10)->primary('kodeCPMK');
            $table->text('deskripsiCPMK');
            $table->char('kodeCPL', 10);
            $table->foreign('kodeCPL')->references('kodeCPL')->on('cpl_prodi')->onDelete('restrict');
            $table->timestamp('deleted_at')->nullable();
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
        Schema::dropIfExists('cpmk');
    }
};

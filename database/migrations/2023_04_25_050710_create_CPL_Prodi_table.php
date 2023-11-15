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
        Schema::create('CPL_Prodi', function (Blueprint $table) {
            $table->char('kodeCPL', 5)->primary('kodeCPL');
            $table->text('deskripsiCPL');
            $table->string('referensiCPL', 100);
            $table->date('deleted_at');
            $table->date('created_at');
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
        Schema::dropIfExists('CPL_Prodi');
    }
};

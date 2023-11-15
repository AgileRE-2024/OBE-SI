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
        Schema::create('Bentuk', function (Blueprint $table) {
            $table->char('id_bentuk', 3)->primary('id_bentuk');
            $table->string('nama_bentuk', 30);
            $table->string('deskripsi_bentuk', 30);
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
        Schema::dropIfExists('Bentuk');
    }
};

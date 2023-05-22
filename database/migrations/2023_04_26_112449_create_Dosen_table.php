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
        Schema::create('Dosen', function (Blueprint $table) {
            $table->char('nip', 18)->primary('nip');
            $table->string('jabatanDosen', 20);
            $table->string('namaDosen', 50);
            $table->string('password', 100);
            $table->boolean('role')->default(false);
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
        Schema::dropIfExists('Dosen');
    }
};

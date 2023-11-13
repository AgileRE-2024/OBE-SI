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
        Schema::create('users', function (Blueprint $table) {
            $table->char('nip', 18)->primary('nip')->nullable();
            $table->foreign('namaProdi')->references('namaProdi')->on('Prodi')->onDelete('restrict');
            $table->string('jabatanDosen', 20)->nullable();
            $table->string('namaDosen', 50)->nullable();
            $table->integer('role')->nullable();
            $table->string('email', 50)->nullable();
            $table->string('status', 20)->nullable();
            $table->date('deleted_at');
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
        Schema::dropIfExists('users');
    }
};

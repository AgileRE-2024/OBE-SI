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
            $table->string('jabatanDosen', 20)->nullable();
            $table->string('namaDosen', 50)->nullable();
            $table->string('password', 1406)->nullable();
            $table->string('email')->unique()->nullable();
            $table->boolean('role')->default(false);
            $table->string('remember_token')->nullable();
            $table->string('status')->nullable();
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

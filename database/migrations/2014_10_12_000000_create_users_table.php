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
            $table->char('nip', 18)->primary('nip');
            $table->string('jabatanDosen', 20);
            $table->string('namaDosen', 50);
            $table->string('password', 1406);
<<<<<<< HEAD
            $table->string('email')->unique();
=======
>>>>>>> 2cc2e26279fc65657722c58e8d68c1af10fc6992
            $table->boolean('role')->default(false);
            $table->string('remember_token')->nullable();
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

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
        Schema::table('minggu_rps', function (Blueprint $table) {
            $table->integer('bobot_nilai')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('minggu_rps', function (Blueprint $table) {
            $table->string('bobot_nilai')->change();
        });
    }
};

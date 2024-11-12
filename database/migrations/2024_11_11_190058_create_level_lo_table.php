<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLevelLoTable extends Migration
{
    public function up()
    {
        Schema::create('level_LO', function (Blueprint $table) {
            $table->integer('kode')->primary();
            $table->string('cognitive_level');
            $table->string('kata_kerja');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('level_LO');
    }
}
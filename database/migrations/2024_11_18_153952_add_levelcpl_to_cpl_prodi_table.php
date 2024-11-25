<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLevelcplToCplProdiTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table("cpl_prodi", function (Blueprint $table) {
            $table
                ->foreignId("levelCPL")
                ->after("kodeCPL")
                ->nullable()
                ->constrained("learning_outcomes");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("cpl_prodi", function (Blueprint $table) {
            $table->dropColumn("levelCPL");
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table("cpmk", function (Blueprint $table) {
            $table
                ->foreignId("levelCPMK")
                ->after("kodeCPMK")
                ->nullable()
                ->constrained("learning_outcomes");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("cpmk", function (Blueprint $table) {
            $table->dropColumn("levelCPMK");
        });
    }
};

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
        Schema::create("verbs", function (Blueprint $table) {
            $table->id();
            $table->foreignId("level_lo")->constrained("learning_outcomes");
            $table->string("kata_kerja");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("verbs");
    }
};

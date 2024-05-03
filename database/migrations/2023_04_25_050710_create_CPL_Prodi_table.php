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
        Schema::create('cpl_prodi', function (Blueprint $table) {
            $table->char('kodeCPL', 10)->primary('kodeCPL')->onDelete('restrict')->onUpdate('cascade');
            $table->text("deskripsiCPL");
            $table->string("referensiCPL", 100);
            $table->timestamp('deleted_at')->nullable();
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
        Schema::dropIfExists('cpl_prodi');
    }
};

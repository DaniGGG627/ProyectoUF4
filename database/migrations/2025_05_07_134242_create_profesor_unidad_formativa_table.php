<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('profesor_unidad_formativa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profesor_id')->constrained()->onDelete('cascade');
            $table->foreignId('unidad_formativa_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profesor_unidad_formativa');
    }
};

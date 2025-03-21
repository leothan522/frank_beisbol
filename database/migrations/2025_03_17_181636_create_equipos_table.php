<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->string('mini')->unique();
            $table->text('estadio');
            $table->date('fundacion')->nullable();
            $table->string('presidente')->nullable();
            $table->string('manager')->nullable();
            $table->string('image_logo')->nullable();
            $table->string('image_estadio')->nullable();
            $table->boolean('activo')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipos');
    }
};

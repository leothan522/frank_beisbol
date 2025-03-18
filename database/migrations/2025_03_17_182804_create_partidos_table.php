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
        Schema::create('partidos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->nullable();
            $table->date('fecha');
            $table->time('hora');
            $table->unsignedBigInteger('equipo_local_id');
            $table->unsignedBigInteger('equipo_visitante_id');
            $table->text('url');
            $table->boolean('finalizado')->default(false);
            $table->foreign('equipo_local_id')->references('id')->on('equipos')->cascadeOnDelete();
            $table->foreign('equipo_visitante_id')->references('id')->on('equipos')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partidos');
    }
};

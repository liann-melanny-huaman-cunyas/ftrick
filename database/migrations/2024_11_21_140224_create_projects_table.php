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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->id();
            $table->foreignId('file_id')
            ->cascadeOnUpdate()
            ->nullOnDelete()
            ->constrained();
            $table->string('encargado');
            $table->strinq('proyectonombre');
            $table->date('creacion');
            $table->enum('estado', ['Aceptado', 'Rechazado', 'En revision']);
            $table->timestamps();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};

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
        Schema::create('analyses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
            ->cascadeOnUpdate()
            ->nullOnDelete()
            ->constrained();
            $table->string('description');
            $table->date('creacion');
            $table->string('documento_nombre');
            $table->string('documento_path');
             $table->enum('estado', ['Aceptado', 'Rechazado', 'En revision']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('analyses');
    }
};

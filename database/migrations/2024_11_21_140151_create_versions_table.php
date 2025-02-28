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
        Schema::create('versions', function (Blueprint $table) {
            $table->id();
            $table->date('creacion');
            $table->foreignId('meter_id')
                    ->cascadeOnUpdate()
                    ->nullOnDelete()
                    ->constrained();
            $table->foreignId('budgets_id')
                    ->cascadeOnUpdate()
                    ->nullOnDelete()
                    ->constrained();
            $table->foreignId('input_id')
                    ->cascadeOnUpdate()
                    ->nullOnDelete()
                    ->constrained();
            $table->foreignId('analyse_id')
                    ->cascadeOnUpdate()
                    ->nullOnDelete()
                    ->constrained();
            $table->foreignId('calculations_id')
                    ->cascadeOnUpdate()
                    ->nullOnDelete()
                    ->constrained();
            $table->foreignId('basics_id')
                    ->cascadeOnUpdate()
                    ->nullOnDelete()
                    ->constrained();
            $table->foreignId('descriptive_id')
                    ->cascadeOnUpdate()
                    ->nullOnDelete()
                    ->constrained();
            $table->foreignId('complement_id')
                    ->cascadeOnUpdate()
                    ->nullOnDelete()
                    ->constrained();
            $table->foreignId('summarie_id')
                    ->cascadeOnUpdate()
                    ->nullOnDelete()
                    ->constrained();
            $table->foreignId('plan_id')
                    ->cascadeOnUpdate()
                    ->nullOnDelete()
                    ->constrained();
            $table->foreignId('specification_id')
                    ->cascadeOnUpdate()
                    ->nullOnDelete()
                    ->constrained();
            $table->foreignId('timelines_id')
                    ->cascadeOnUpdate()
                    ->nullOnDelete()
                    ->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('versions');
    }
};

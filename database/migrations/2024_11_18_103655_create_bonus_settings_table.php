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
        Schema::create('bonus_settings', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('partner_type_id') // Foreign key for partner types
                ->constrained('partner_types')
                ->onDelete('cascade');
            $table->enum('bonus_type', ['percentage', 'fixed'])->default('percentage'); // Bonus type
            $table->boolean('enabled')->default(true); // Whether the bonus is enabled
            $table->integer('points')->nullable(); // Points required
            $table->integer('nominal_required')->nullable(); // Nominal amount required
            $table->integer('applies_every')->nullable(); // Applies every X days, points, etc.
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bonus_settings');
    }
};

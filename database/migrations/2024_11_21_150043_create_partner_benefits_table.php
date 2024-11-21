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
        Schema::create('partner_benefits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('benefit_id')->constrained()->onDelete('cascade'); // Foreign key to benefits table
            $table->foreignId('partner_type_id')->constrained()->onDelete('cascade'); // Foreign key to partner_types table
            $table->boolean('enabled')->default(true); // Whether the benefit is enabled or not
            $table->timestamps(); // Created at and updated at timestamps
            $table->timestamp('deleted_at')->nullable(); // Soft delete timestamp
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partner_benefits');
    }
};

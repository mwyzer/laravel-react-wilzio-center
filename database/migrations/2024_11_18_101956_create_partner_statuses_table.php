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
        Schema::create('partner_status', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('partner_id') // Foreign key referencing `id` in `partners`
                  ->nullable()
                  ->constrained('partners') // Links `partner_id` to `partners.id`
                  ->onDelete('cascade');
            $table->string('status'); // VARCHAR(255), NOT NULL
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partner_status');
    }
};

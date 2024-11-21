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
        Schema::create('ktp_data_access_permissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('partner_type_id')->constrained()->onDelete('cascade'); // Foreign key to partner_types
            $table->foreignId('ktp_data_category_id')->constrained()->onDelete('cascade'); // Foreign key to ktp_data_categories
            $table->foreignId('access_level_id')->constrained()->onDelete('cascade'); // Foreign key to access_levels
            $table->timestamps(); // Created at and updated at timestamps
            $table->timestamp('deleted_at')->nullable(); // Soft delete
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ktp_data_access_permissions');
    }
};

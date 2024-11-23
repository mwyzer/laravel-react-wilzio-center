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
        Schema::create('cust_data_access_permissions', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('partner_type_id') // Foreign key for partner types
                ->constrained('partner_types')
                ->onDelete('cascade');
            $table->foreignId('customer_data_category_id') // Foreign key for customer data categories
                ->constrained('customer_data_categories')
                ->onDelete('cascade');
            $table->foreignId('access_level_id') // Foreign key for access levels
                ->constrained('access_levels')
                ->onDelete('cascade');
            $table->timestamps(); // Created at and updated at timestamps
            $table->softDeletes(); // Soft deletes for logical deletion
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cust_data_access_permissions');
    }
};

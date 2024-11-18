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
        Schema::create('promo_sales', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('promo_code')->unique(); // Promo code
            $table->string('description')->nullable(); // Description of the promo
            $table->integer('discount_amount')->nullable(); // Discount amount in whole numbers
            $table->integer('min_purchase_amount')->nullable(); // Minimum purchase amount in whole numbers
            $table->timestamp('start_date')->nullable(); // Start date of the promo
            $table->timestamp('end_date')->nullable(); // End date of the promo
            $table->integer('usage_limit')->nullable(); // Maximum number of times the promo can be used
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promo_sales');
    }
};

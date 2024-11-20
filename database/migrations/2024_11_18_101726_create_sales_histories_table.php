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
        if (!Schema::hasTable('sales_histories')) {
            Schema::create('sales_histories', function (Blueprint $table) {
                $table->id(); // Primary key
                $table->foreignId('location_id')->constrained()->onDelete('cascade'); // Foreign key
                $table->integer('sales_amount')->default(0); // Default sales amount
                $table->timestamp('sales_date')->useCurrent(); // Default current timestamp
                $table->timestamps(); // Created at and updated at timestamps
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_histories');
    }
};

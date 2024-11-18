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
        Schema::create('sales_histories', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('location_id')->constrained('locations')->onDelete('cascade'); // Foreign key for locations table
            $table->integer('sales_amount')->default(0); // Sales amount for the record
            $table->timestamp('sales_date')->useCurrent(); // Date of the sale
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_histories');
    }
};

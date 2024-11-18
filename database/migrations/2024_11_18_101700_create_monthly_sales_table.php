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
        Schema::create('monthly_sales', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('location_id')->constrained('locations')->onDelete('cascade'); // Foreign key referencing locations table
            $table->date('sales_month'); // Date representing the sales month (e.g., the first day of the month)
            $table->integer('total_sales')->default(0); // Total sales amount for the month as an integer
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monthly_sales');
    }
};

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
        Schema::create('monthly_billings', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('service_id')->constrained('services')->onDelete('cascade'); // Foreign key for services table
            $table->date('billing_month'); // A date column to represent the billing month
            $table->integer('amount'); // Amount column with precision
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monthly_billings');
    }
};

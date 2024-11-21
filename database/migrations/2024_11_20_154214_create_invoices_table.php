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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->integer('total_amount')->nullable(false); // Total amount
            $table->integer('amount_paid')->nullable(false); // Amount paid
            $table->integer('amount_due')->nullable(false); // Amount due
            $table->foreignId('status_id')->constrained('statuses')->onDelete('cascade'); // Foreign key for status
            $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade'); // Foreign key for customer
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};

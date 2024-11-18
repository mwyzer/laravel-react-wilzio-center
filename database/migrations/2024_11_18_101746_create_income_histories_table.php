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
        Schema::create('income_histories', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('transaction_id')->constrained('transactions')->onDelete('cascade'); // Foreign key for transactions
            $table->date('log_date'); // Date of the log
            $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade'); // Foreign key for customers
            $table->decimal('profit', 15, 2); // Profit amount with precision
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('income_histories');
    }
};

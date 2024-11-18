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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign key for users
            $table->string('transaction_type'); // Type of transaction (e.g., purchase, refund)
            $table->decimal('amount', 15, 2); // Transaction amount
            $table->enum('status', ['pending', 'completed', 'failed', 'cancelled'])->default('pending'); // Status of the transaction
            $table->string('reference_id')->nullable(); // Reference ID for external payment systems
            $table->timestamp('transaction_date')->useCurrent(); // Date of the transaction
            $table->text('description')->nullable(); // Optional description of the transaction
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};

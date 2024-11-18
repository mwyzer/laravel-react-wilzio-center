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
        Schema::create('transaction_histories', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign key for users
            $table->enum('status', ['pending', 'completed', 'failed', 'refund', 'withdrawal']); // Type of transaction (e.g., purchase, refund)
            $table->decimal('amount', 15, 2); // Transaction amount
            $table->string('status'); // Status of the transaction (e.g., pending, completed)
            $table->timestamp('transaction_date')->nullable(); // Date of the transaction
            $table->text('description')->nullable(); // Optional description of the transaction
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_histories');
    }
};

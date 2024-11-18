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
        Schema::create('transaction_accounts', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('account_name'); // Name of the account
            $table->string('account_number')->unique(); // Unique account number
            $table->string('account_type'); // Type of account (e.g., savings, checking)
            $table->decimal('balance', 15, 2)->default(0.00); // Account balance with default 0.00
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_accounts');
    }
};

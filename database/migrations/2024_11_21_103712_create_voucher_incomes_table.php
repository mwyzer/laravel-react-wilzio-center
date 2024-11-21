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
        Schema::create('voucher_incomes', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->foreignId('voucher_type_id')->constrained('voucher_types')->onDelete('cascade'); // Foreign key to 'voucher_types' table
            $table->decimal('income', 15, 2); // Numeric income value
            $table->integer('points'); // Points associated with the voucher income
            $table->timestamp('createdAt'); // Timestamp of when the income was created
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voucher_incomes');
    }
};

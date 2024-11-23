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
        Schema::create('voucher_profiles', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->foreignId('voucher_type_id')->constrained('voucher_types')->onDelete('cascade'); // Foreign key to 'voucher_types' table
            $table->string('name'); // Name of the voucher profile
            $table->integer('duration'); // Duration of the voucher
            $table->string('status'); // Status of the voucher
            $table->integer('import'); // Import value
            $table->integer('stock'); // Stock available
            $table->integer('sold_today')->default(0); // Sold today
            $table->integer('sold_this_month')->default(0); // Sold this month
            $table->integer('sold_total')->default(0); // Total sold
            $table->string('remaining_time'); // Remaining time
            $table->integer('warning_stock_low'); // Low stock warning
            $table->integer('warning_stock_critical'); // Critical stock warning
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voucher_profiles');
    }
};

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
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->foreignId('voucher_profile_id')->constrained('voucher_profiles')->onDelete('cascade'); // Foreign key to 'voucher_profiles'
            $table->string('code'); // Voucher code
            $table->text('comment'); // Comment or description for the voucher
            $table->timestamp('importDate'); // Import date
            $table->string('status'); // Status of the voucher (active, used, etc.)
            $table->timestamp('saleDate'); // Date of sale or redemption
            $table->string('buyerName'); // Name of the voucher buyer
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vouchers');
    }
};

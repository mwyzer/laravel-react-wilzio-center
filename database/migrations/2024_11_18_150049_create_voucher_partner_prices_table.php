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
        Schema::create('voucher_partner_prices', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->foreignId('voucher_profile_id')->constrained('voucher_profiles')->onDelete('cascade'); // Foreign key to 'voucher_profiles' table
            $table->foreignId('partner_type_id')->constrained('partner_types')->onDelete('cascade'); // Foreign key to 'partner_types' table
            $table->integer('price_points'); // Points required for the price
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voucher_partner_prices');
    }
};

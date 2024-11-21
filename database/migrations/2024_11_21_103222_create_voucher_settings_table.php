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
        Schema::create('voucher_settings', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->foreignId('voucher_profile_id')->constrained('voucher_profiles')->onDelete('cascade'); // Foreign key to 'voucher_profiles' table
            $table->boolean('issueVoucher'); // Whether to issue the voucher
            $table->boolean('displayStock'); // Whether to display the stock
            $table->integer('maxPurchasePerTx'); // Maximum purchases per transaction
            $table->string('linkToGenerateVoucher'); // Link to generate the voucher
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voucher_settings');
    }
};

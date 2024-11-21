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
        Schema::create('partners', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('name'); // Partner name
            $table->foreignId('partner_id')->nullable()->constrained('partners')->onDelete('cascade'); // Foreign key for partner
            $table->string('whatsapp_contact')->nullable(); // WhatsApp contact
            $table->string('location')->nullable(); // Location
            $table->enum('status_req', ['pending', 'approved', 'rejected'])->default('pending'); // Request status
            $table->integer('account_balance')->default(0); // Account balance
            $table->string('customer_type')->nullable(); // Customer type
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partners');
    }
};

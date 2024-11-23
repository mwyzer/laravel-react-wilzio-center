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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('method', 255); // Contact method (e.g., email, WhatsApp)
            $table->string('name', 255); // Name of the contact
            $table->string('link', 255)->nullable(); // Link (e.g., social media profile, website)
            $table->string('phoneNumber', 255)->nullable(); // Phone number
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};

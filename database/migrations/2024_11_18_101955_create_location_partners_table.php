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
        Schema::create('location_partners', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('location_id')->constrained('locations')->onDelete('cascade'); // Foreign key for locations
            $table->foreignId('partner_id')->constrained('partners')->onDelete('cascade'); // Foreign key for partners
            $table->string('partnership_type')->nullable(); // Type of partnership (e.g., distributor, reseller)
            $table->date('start_date')->nullable(); // Date when the partnership started
            $table->date('end_date')->nullable(); // Date when the partnership ends
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('location_partners');
    }
};

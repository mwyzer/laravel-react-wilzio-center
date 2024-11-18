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
        Schema::create('location_isps', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('location_id')->constrained('locations')->onDelete('cascade'); // Foreign key for locations
            $table->foreignId('isp_id')->constrained('isps')->onDelete('cascade'); // Foreign key for ISPs
            $table->string('isp_type')->nullable(); // Type of ISP (e.g., broadband, fiber)
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('location_isps');
    }
};

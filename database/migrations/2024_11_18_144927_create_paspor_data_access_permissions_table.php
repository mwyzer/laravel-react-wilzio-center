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
        Schema::create('paspor_data_access_permissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('partner_type_id')->constrained()->onDelete('cascade');
            $table->foreignId('paspor_data_category_id')->constrained()->onDelete('cascade');
            $table->foreignId('access_level_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paspor_data_access_permissions');
    }
};

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
        Schema::create('bonus_settings', function (Blueprint $table) {
            $table->id();
            $table->partnerTypeId();
            $table->bonusType();
            $table->enabled();
            $table->points();
            $table->nominalRequired();
            $table->appliesEvery();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bonus_settings');
    }
};
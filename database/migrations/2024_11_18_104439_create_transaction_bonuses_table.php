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
        Schema::create('transaction_bonuses', function (Blueprint $table) {
            $table->id();
            $table->levelId();
            $table->bonusEnabled();
            $table->bonusPoints();
            $table->nominalTransaction();
            $table->berlakuTiap();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_bonuses');
    }
};

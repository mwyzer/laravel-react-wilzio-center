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
        Schema::create('membership_rewards', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('membership_level_id')->constrained('membership_levels')->onDelete('cascade'); // Foreign key for membership levels
            $table->foreignId('reward_type_id')->constrained('reward_types')->onDelete('cascade'); // Foreign key for reward types
            $table->integer('bonus_points'); // Bonus points for the reward
            $table->decimal('nominal_required', 15, 2); // Nominal amount required to qualify for the reward
            $table->integer('applies_every')->nullable(); // Applies every 'X' times (e.g., every 5 transactions)
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membership_rewards');
    }
};

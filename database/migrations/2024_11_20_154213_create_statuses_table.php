
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
            $table->foreignId('partner_type_id')->constrained()->onDelete('cascade'); // Foreign key to partner_types table
            $table->string('bonusType'); // Type of the bonus
            $table->boolean('enabled')->default(true); // Whether the bonus setting is enabled or not
            $table->integer('points'); // Points associated with the bonus setting
            $table->decimal('nominalRequired', 10, 2); // Minimum nominal required for the bonus
            $table->string('appliesEvery'); // Applies every (e.g., month, year)
            $table->timestamps(); // Created at and updated at timestamps
            $table->timestamp('deleted_at')->nullable(); // Soft delete timestamp
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statuses');
    }
};

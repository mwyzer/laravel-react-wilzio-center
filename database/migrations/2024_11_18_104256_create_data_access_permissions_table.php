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
        Schema::create('customer_data_access_permissions', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('partner_type_id');
            $table->unsignedBigInteger('customer_data_category_id');
            $table->unsignedBigInteger('access_level_id');

            // Foreign keys
            $table->foreign('partner_type_id', 'fk_partner_type')
                  ->references('id')
                  ->on('partner_types')
                  ->onDelete('cascade');

            $table->foreign('customer_data_category_id', 'fk_customer_data_category')
                  ->references('id')
                  ->on('customer_data_categories')
                  ->onDelete('cascade');

            $table->foreign('access_level_id', 'fk_access_level')
                  ->references('id')
                  ->on('access_levels')
                  ->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('customer_data_access_permissions', function (Blueprint $table) {
            $table->dropForeign('fk_partner_type');
            $table->dropForeign('fk_customer_data_category');
            $table->dropForeign('fk_access_level');
        });

        Schema::dropIfExists('customer_data_access_permissions');
    }
};

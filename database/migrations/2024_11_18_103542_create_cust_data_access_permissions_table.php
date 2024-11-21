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
        if (!Schema::hasTable('cust_data_access_permissions')) {
            Schema::create('cust_data_access_permissions', function (Blueprint $table) {
                $table->id();
                $table->foreignId('partner_type_id')->constrained('partner_types')->onDelete('cascade');
                $table->foreignId('customer_data_category_id')->constrained('customer_data_categories')->onDelete('cascade');
                $table->foreignId('access_level_id')->constrained('access_levels')->onDelete('cascade');
                $table->timestamps();
                $table->softDeletes();
            });
        }
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cust_data_access_permissions', function (Blueprint $table) {
            $table->dropForeign(['partner_type_id']);
            $table->dropForeign(['customer_data_category_id']);
            $table->dropForeign(['access_level_id']);
        });
    
        Schema::dropIfExists('customer_data_access_permissions');
    }
};

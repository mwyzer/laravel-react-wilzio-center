<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChangeHistoryDataAccessPermissionsTable extends Migration
{
    public function up(): void
    {
        Schema::create('change_history_data_access_permissions', function (Blueprint $table) {
            $table->id();

            // Foreign key for change_history_data_category_id
            $table->unsignedBigInteger('change_history_data_category_id');
            $table->foreign('change_history_data_category_id', 'ch_data_category_fk')
                ->references('id')
                ->on('change_history_data_categories')
                ->onDelete('cascade');

            $table->unsignedBigInteger('partnerTypeId');
            $table->foreign('partnerTypeId', 'partner_type_fk')
                ->references('id')
                ->on('partner_types')
                ->onDelete('cascade');

            $table->unsignedBigInteger('accessLevelId');
            $table->foreign('accessLevelId', 'access_level_fk')
                ->references('id')
                ->on('access_levels')
                ->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('change_history_data_access_permissions');
    }
}

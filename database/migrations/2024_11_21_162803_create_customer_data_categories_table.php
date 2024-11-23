<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerDataCategoriesTable extends Migration
{
    public function up()
    {
        // Check if the table already exists
        if (!Schema::hasTable('customer_data_categories')) {
            Schema::create('customer_data_categories', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('customer_data_categories');
    }
}

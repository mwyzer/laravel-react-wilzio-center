<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoucherMemberPricesTable extends Migration
{
    public function up()
    {
        Schema::create('voucher_member_prices', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->foreignId('voucher_profile_id')->constrained('voucher_profiles')->onDelete('cascade'); // Foreign key to 'voucher_profiles'
            $table->foreignId('member_level_id')->constrained('member_levels')->onDelete('cascade'); // Foreign key to 'member_levels'
            $table->integer('price_points'); // Points required for the price
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('voucher_member_prices');
    }
}

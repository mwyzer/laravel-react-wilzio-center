<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferralsTable extends Migration
{
    public function up(): void
    {
        Schema::create('referrals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customerId')->constrained('customers')->onDelete('cascade');
            $table->unsignedBigInteger('referredCustomerId');
            $table->timestamp('referralDate')->nullable();
            $table->string('status', 255);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('referredCustomerId')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('referrals');
    }
}

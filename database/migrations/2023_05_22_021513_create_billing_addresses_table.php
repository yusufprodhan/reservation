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
        Schema::create('billing_addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('bill_to');
            $table->string('billing_email');
            $table->string('billing_phone');
            $table->string('vat_id')->nullable();
            $table->string('website_url')->nullable();
            $table->string('billing_address')->nullable();
            $table->string('billing_city');
            $table->string('billing_state');
            $table->integer('billing_country_id');
            $table->string('billing_post_code');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billing_addresses');
    }
};

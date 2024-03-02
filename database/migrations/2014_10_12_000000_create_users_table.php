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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('uid')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('phone',20)->nullable();
            $table->text('address')->nullable();
            $table->text('billing_address_id')->nullable();
            $table->text('post_code')->nullable();
            $table->string('city',50)->nullable();
            $table->string('state',50)->nullable();
            $table->integer('country_id')->nullable();
            $table->text('avatar')->nullable();
            $table->boolean('is_admin')->default(false);
            $table->boolean('is_verified')->default(false);
            $table->boolean('is_user')->default(true);
            $table->enum('status',['Active','Inactive','Banned'])->default('Inactive');
            $table->string('locale')->default('');
            $table->string('timezone')->default('');
            $table->timestamp('last_access_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

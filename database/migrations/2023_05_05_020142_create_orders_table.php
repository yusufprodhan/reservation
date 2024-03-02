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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_id')->nullable();
            $table->string('job_title');
            $table->unsignedBigInteger('user_id');
            $table->decimal('price',10,2)->default(0.00);
            $table->string('service_id',100);
            $table->string('media_id',100)->nullable();
            $table->integer('image_quantity')->default(0);
            $table->longText('instruction')->nullable();
            $table->enum('image_complexity',['simple','medium','complex','extreme']);
            $table->string('return_file_extension',100);
            $table->enum('turnaround',['48','72','flexible']);
            $table->string('status')->default('In Review');
            $table->longText('image_link')->nullable();
            $table->longText('output_link')->nullable();
            $table->dateTime('submitted_at')->nullable();
            $table->tinyInteger('is_invoiced')->default(0);
            $table->tinyInteger('is_paid')->default(0);
            $table->longText('redo_instruction')->nullable();
            $table->string('redo_media_id',100)->nullable();
            $table->longText('redo_image_link')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

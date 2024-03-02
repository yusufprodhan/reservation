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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_id')->nullable();
            $table->unsignedBigInteger('order_id');
            $table->string('service_name',100);
            $table->string('comments',100)->nullable();
            $table->string('qty',100);
            $table->string('price',100);
            $table->string('single_discount',100)->nullable();
            $table->string('row_sub_total',100);
            $table->decimal('sub_total',20,2);
            $table->decimal('discount',20,2)->nullable();
            $table->enum('discount_type',['Flat','Percent'])->default('Flat');
            $table->decimal('grand_total',20,2);
            $table->timestamps();

            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};

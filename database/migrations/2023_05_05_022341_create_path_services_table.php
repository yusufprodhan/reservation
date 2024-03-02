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
        Schema::create('path_services', function (Blueprint $table) {
            $table->id();
            $table->string('service_name','100');
            $table->string('slug','100');
            $table->decimal('starting_price');
            $table->text('description')->nullable();
            $table->enum('status',['Active','Inactive']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('path_services');
    }
};

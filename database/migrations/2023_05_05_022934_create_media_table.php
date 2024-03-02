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
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->string('file_original_name');
            $table->string('file_name');
            $table->string('filePath');
            $table->string('fileFullPath');
            $table->string('extension');
            $table->string('type')->nullable();
            $table->integer('file_size')->nullable();
            $table->timestamps();
            $table->softDeletes();
//            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};

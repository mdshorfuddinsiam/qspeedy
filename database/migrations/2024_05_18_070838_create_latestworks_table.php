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
        Schema::create('latestworks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->text('video_url')->nullable();
            $table->longText('description');
            $table->boolean('default_issue');
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('latestworks');
    }
};
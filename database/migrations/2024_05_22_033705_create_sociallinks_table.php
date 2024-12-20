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
        Schema::create('sociallinks', function (Blueprint $table) {
            $table->id();
            $table->text('link_one')->nullable();
            $table->text('link_two')->nullable();
            $table->text('link_three')->nullable();
            $table->text('link_four')->nullable();
            $table->text('link_five')->nullable();
            $table->text('link_six')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sociallinks');
    }
};

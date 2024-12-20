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
        Schema::create('generalsettings', function (Blueprint $table) {
            $table->id();
            $table->string('website_name');
            $table->string('site_icon');
            $table->string('site_logo');
            $table->string('email');
            $table->string('email_two')->nullable();
            $table->string('phone');
            $table->text('description');
            $table->text('contact_description');
            $table->text('address');
            $table->text('google_map');
            $table->text('copyright_text')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generalsettings');
    }
};

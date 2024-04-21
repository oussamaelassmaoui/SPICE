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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('banner_Global')->nullable();
            $table->string('banner1')->nullable();
            $table->string('banner2')->nullable();
            $table->string('Sign_In_photo')->nullable();
            $table->string('Sign_Up_photo')->nullable();
            $table->longText('New_Recipes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};

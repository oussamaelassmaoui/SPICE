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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->longText('ABOUT_US');
            $table->longText('WHY_CHOOSE_US');
            $table->longText('QUALITY_CHEFS');
            $table->longText('SUPER_FAST_DELIVERY');
            $table->longText('TABLE_RESERVATION');
            $table->longText('ONLINE_ORDER');
            $table->longText('menu');
            $table->string('banner_about_menu')->nullable();
            $table->string('photo')->nullable();
            $table->string('url_video');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};

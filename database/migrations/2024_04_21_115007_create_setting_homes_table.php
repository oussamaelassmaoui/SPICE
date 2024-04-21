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
        Schema::create('setting_homes', function (Blueprint $table) {
            $table->id();
            $table->longText('DELICIOUS_FOOD');
            $table->string('banner_Global')->nullable();
            $table->string('photo_Global')->nullable();
            $table->string('banner1')->nullable();
            $table->longText('title1');
            $table->string('banner2')->nullable();
            $table->longText('title2');
            $table->longText('TODAY_SPECIAL_OFFER');
            $table->string('banner_TODAY')->nullable();
            $table->string('photo1')->nullable();
            $table->longText('Download');      
            $table->string('photo_Download1')->nullable();       
            $table->string('url_video');
            $table->string('banner_testimonials')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setting_homes');
    }
};

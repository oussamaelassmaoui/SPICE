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
        Schema::create('information', function (Blueprint $table) {
            $table->id();         
            $table->string('Facebook')->nullable();
            $table->string('Twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->string("address")->nullable();
            $table->string('email1')->nullable();
            $table->string('email2')->nullable();
            $table->string('Mobile1')->nullable();
            $table->string('Mobile2')->nullable();
            $table->text('iframe_map')->nullable();
            $table->integer('OUR_CLIENTS')->nullable();
            $table->integer('YEARS_EXPERIENCE')->nullable();
            $table->integer('FRESH_HALAL')->nullable();
            $table->integer('TEAM_MEMBER')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('information');
    }
};

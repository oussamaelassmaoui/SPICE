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
        Schema::create('chefs', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('photo')->nullable();
            $table->text('About_Me')->nullable();
            $table->string('Mobile')->nullable();
            $table->string('Facebook')->nullable();
            $table->string('Twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->string('instagram')->nullable();
            $table->string("address")->nullable();
            $table->string('email')->nullable();
            $table->text('PERSONAL_INFORMATION')->nullable();
            $table->text('PROFESSIONAL_SKILLS')->nullable();
            $table->integer('GENERAL_KNOWLEDGE')->nullable();
            $table->integer('SIGNATURE_DISHES')->nullable();
            $table->integer('CUSTOMER_SATISFIED')->nullable();
            $table->integer('COMMUNICATION_SKILLS')->nullable();
            $table->string('DISH1')->nullable();
            $table->string('photo1')->nullable();
            $table->string('DISH2')->nullable();
            $table->string('photo2')->nullable();
            $table->string('DISH3')->nullable();
            $table->string('photo3')->nullable();
            $table->string('DISH4')->nullable();
            $table->string('photo4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chefs');
    }
};

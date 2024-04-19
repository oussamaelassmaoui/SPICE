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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('photo')->nullable();
            $table->text('text')->nullable();
            $table->text('text2')->nullable();
            $table->text('text3')->nullable();
            $table->string('FAQ1')->nullable();
            $table->string('FAQ2')->nullable();
            $table->string('FAQ3')->nullable();
            $table->string('FAQ4')->nullable();
            $table->string('FAQ5')->nullable();
            $table->string('rep1')->nullable();
            $table->string('rep2')->nullable();
            $table->string('rep3')->nullable();
            $table->string('rep4')->nullable();
            $table->string('rep5')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};

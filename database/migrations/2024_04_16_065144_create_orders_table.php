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
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // This line is enough to define the 'id' column as primary key
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('shipping_address');
            $table->string('telephone_number');
            $table->string('first_name');
            $table->string('email');
            $table->string('last_name');
            $table->string('zip_code');
            $table->decimal('total_cost', 10, 2);
            $table->timestamps(); // No need to define timestamps() twice
        });
    
        Schema::create('order_items', function (Blueprint $table) {
            $table->id(); // This line is enough to define the 'id' column as primary key
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->integer('quantity');
            $table->string('option')->nullable();
            $table->string('size')->nullable();
            $table->decimal('unit_price', 10, 2);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

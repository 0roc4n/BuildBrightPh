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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('item_code');
            $table->string('product_name');
            $table->foreignId('category_id')
                ->constrained('product_categories')
                ->onDelete('cascade');
            $table->string('product_brand');
            $table->string('description');
            $table->string('price');
            $table->string('stocks');
            $table->boolean('is_displayed');
            $table->boolean('is_available');
            $table->string('img_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

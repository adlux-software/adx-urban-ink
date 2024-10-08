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
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->string('description');
            $table->foreignId('category_id')->constrained()->cascadeOnUpdate();
            $table->integer('sort_order')->default(0);
            $table->boolean('status')->default(true);
            $table->boolean('featured')->default(false);
            $table->boolean('popular')->default(false);
            $table->boolean('BestSellingProduct')->default(false);
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

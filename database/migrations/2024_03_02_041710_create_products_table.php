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
            $table->string("product_name")->nullable(true);
            $table->string("price")->nullable(true);
            $table->string("description")->nullable(true);
            $table->string("image")->nullable();

            $table->unsignedBigInteger("category_id")->nullable();
            $table->foreign("category_id")->references("id")->on("category");

            $table->unsignedBigInteger("type_id")->nullable();
            $table->foreign("type_id")->references("id")->on("type");

            $table->unsignedBigInteger("author_id")->nullable();
            $table->foreign("author_id")->references("id")->on("author");

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


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
            $table->string('name');
            $table->string('describe', 1000)->nullable();
            $table->string('image')->nullable();
            $table->double('price', 8, 2);
            $table->double('priceSale', 8, 2)->nullable();
            $table->integer('quantity')->default(0);
            $table->integer('sold')->default(0);
            $table->boolean('hot')->default(0);
            $table->string('view')->default(0);
            $table->boolean('label'); // 0 bình thường, 1 giá rẻ, 2 giảm sốc, 3 cao cấp
            $table->boolean('anHien')->default(1);
            $table->dateTime('dateSubmitted');
            $table->string('slug')->nullable();
            $table->unsignedBigInteger('idCategory');
            $table->timestamp('deleted_at')->nullable();
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

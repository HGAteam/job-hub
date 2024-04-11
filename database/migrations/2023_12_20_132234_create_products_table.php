<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->enum('status',['Published','Unpublished','Draft'])->default('Draft');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->text('tags')->nullable();
            $table->string('product_template')->nullable();
            $table->json('images')->nullable(); // O podrías considerar crear una tabla adicional para manejar las imágenes.
            $table->decimal('price', 10, 2);
            $table->enum('discount_type', ['No discount', 'Percentage', 'Fixed price'])->default('No discount');
            $table->enum('tax_class',['Tax free', 'Taxable property', 'Downloadable product'])->nullable();
            $table->decimal('important_iva', 10, 2)->nullable();
            $table->string('sku')->nullable();
            $table->string('barcode_bars')->nullable();
            $table->integer('cantidad_en_estanteria')->nullable();
            $table->integer('quantity_in_store')->nullable();
            $table->boolean('allow_pending_orders')->default(false);
            $table->enum('variation_type',['Color', 'Size', 'Material', 'Style', 'Flavor', 'Fragrance', 'None',])->nullable();
            $table->string('variation')->nullable();
            $table->boolean('shipping')->default(false);
            $table->string('meta_tag_title')->nullable();
            $table->text('meta_tag_description')->nullable();
            $table->text('meta_tag_keywords')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};

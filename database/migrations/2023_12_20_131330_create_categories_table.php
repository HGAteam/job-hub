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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->enum('status',['Published','Unpublished','Draft'])->default('Draft');
            $table->string('shop_template')->nullable();
            $table->string('meta_tag_title')->nullable();
            $table->text('meta_tag_description')->nullable();
            $table->text('meta_tag_keywords')->nullable();
            $table->enum('automation', ['Manual', 'Automatic'])->default('Manual');
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
        Schema::dropIfExists('categories');
    }
};

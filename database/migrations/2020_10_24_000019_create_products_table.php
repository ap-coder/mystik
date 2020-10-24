<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable()->unique();
            $table->longText('description')->nullable();
            $table->decimal('price', 15, 2)->nullable();
            $table->longText('short_description')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_desc')->nullable();
            $table->string('fb_title')->nullable();
            $table->string('twitter_title')->nullable();
            $table->boolean('published')->default(0)->nullable();
            $table->string('slug')->nullable()->unique();
            $table->string('image_labels')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}

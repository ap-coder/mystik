<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductReviewsTable extends Migration
{
    public function up()
    {
        Schema::create('product_reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('published')->default(0)->nullable();
            $table->string('title')->nullable();
            $table->integer('rating');
            $table->longText('body')->nullable();
            $table->string('website')->nullable();
            $table->string('signiture')->nullable();
            $table->string('signiture_company')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}

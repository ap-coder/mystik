<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostProductPivotTable extends Migration
{
    public function up()
    {
        Schema::create('post_product', function (Blueprint $table) {
            $table->unsignedInteger('post_id');
            $table->foreign('post_id', 'post_id_fk_2457011')->references('id')->on('posts')->onDelete('cascade');
            $table->unsignedInteger('product_id');
            $table->foreign('product_id', 'product_id_fk_2457011')->references('id')->on('products')->onDelete('cascade');
        });
    }
}

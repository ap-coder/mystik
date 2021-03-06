<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToProductReviewsTable extends Migration
{
    public function up()
    {
        Schema::table('product_reviews', function (Blueprint $table) {
            $table->unsignedInteger('product_id')->nullable();
            $table->foreign('product_id', 'product_fk_2457058')->references('id')->on('products');
        });
    }
}

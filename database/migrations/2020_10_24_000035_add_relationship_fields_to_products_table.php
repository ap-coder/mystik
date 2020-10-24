<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToProductsTable extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedInteger('product_type_id')->nullable();
            $table->foreign('product_type_id', 'product_type_fk_2457005')->references('id')->on('product_types');
        });
    }
}

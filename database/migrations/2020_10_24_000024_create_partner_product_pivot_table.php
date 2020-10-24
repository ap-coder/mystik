<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnerProductPivotTable extends Migration
{
    public function up()
    {
        Schema::create('partner_product', function (Blueprint $table) {
            $table->unsignedInteger('partner_id');
            $table->foreign('partner_id', 'partner_id_fk_2456959')->references('id')->on('partners')->onDelete('cascade');
            $table->unsignedInteger('product_id');
            $table->foreign('product_id', 'product_id_fk_2456959')->references('id')->on('products')->onDelete('cascade');
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentCategoryPostPivotTable extends Migration
{
    public function up()
    {
        Schema::create('content_category_post', function (Blueprint $table) {
            $table->unsignedInteger('post_id');
            $table->foreign('post_id', 'post_id_fk_2456909')->references('id')->on('posts')->onDelete('cascade');
            $table->unsignedInteger('content_category_id');
            $table->foreign('content_category_id', 'content_category_id_fk_2456909')->references('id')->on('content_categories')->onDelete('cascade');
        });
    }
}

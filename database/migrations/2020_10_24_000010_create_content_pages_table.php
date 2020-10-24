<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentPagesTable extends Migration
{
    public function up()
    {
        Schema::create('content_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable()->unique();
            $table->longText('page_text')->nullable();
            $table->longText('excerpt')->nullable();
            $table->string('slug')->nullable()->unique();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}

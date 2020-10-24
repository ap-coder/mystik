<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('published')->default(0)->nullable();
            $table->string('title');
            $table->longText('content_area')->nullable();
            $table->datetime('event_date_time')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}

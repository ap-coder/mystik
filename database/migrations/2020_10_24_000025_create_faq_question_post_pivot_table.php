<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqQuestionPostPivotTable extends Migration
{
    public function up()
    {
        Schema::create('faq_question_post', function (Blueprint $table) {
            $table->unsignedInteger('post_id');
            $table->foreign('post_id', 'post_id_fk_2457012')->references('id')->on('posts')->onDelete('cascade');
            $table->unsignedInteger('faq_question_id');
            $table->foreign('faq_question_id', 'faq_question_id_fk_2457012')->references('id')->on('faq_questions')->onDelete('cascade');
        });
    }
}

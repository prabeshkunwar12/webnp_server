<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscussionLikesTable extends Migration
{
    public function up()
    {
        Schema::create('discussion_likes', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->unsignedBigInteger('discussion_post_id');
            $table->timestamps();

            $table->unique(['user_id', 'discussion_post_id']);

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('discussion_post_id')->references('id')->on('discussion_posts')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('discussion_likes');
    }
}

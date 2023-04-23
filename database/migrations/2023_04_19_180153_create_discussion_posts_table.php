<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscussionPostsTable extends Migration
{
    public function up()
    {
        Schema::create('discussion_posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Change this line
            $table->string('title');
            $table->text('body');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('discussion_posts');
    }
}

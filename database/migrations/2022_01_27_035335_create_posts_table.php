<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->BigIncrements('id_post');
            $table->text('title');
            $table->text('description');
            $table->timestamps();

        });

        Schema::table('post', function(Blueprint $table){
            $table->string('user_gmail');
            $table->foreign('user_gmail')->references('gmail')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}

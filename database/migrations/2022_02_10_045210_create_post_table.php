<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
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
            $table->string('title')->index();
            $table->text('description');
            $table->timestamps();

        });

        Schema::table('post', function(Blueprint $table){
            $table->string('user_email_id');
            $table->foreign('user_email_id')
            ->references('email')
            ->on('user')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->string('comment_user_id');
            $table->foreign('comment_user_id')
            ->references('context_my_')
            ->on('comments')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post');
    }
}

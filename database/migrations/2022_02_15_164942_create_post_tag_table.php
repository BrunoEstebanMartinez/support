<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tag', function (Blueprint $table) {
            $table->BigIncrements('id_post_tag');
            $table->timestamps();
        });
        Schema::table('post_tag', function (Blueprint $table){
            $table->string('titlecode_id');
            $table->foreign('titlecode_id')->references('title')->on('post');

            $table->string('user_tag_id');
            $table->foreign('user_tag_id')->references('tag_name')->on('tag');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_tag');
    }
}

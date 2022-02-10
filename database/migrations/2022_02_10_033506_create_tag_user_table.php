<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_user', function (Blueprint $table) {
            $table->BigIncrements('id_tag_user');
           
        });
        Schema::table('tag_user', function (Blueprint $table) {

            $table->string('user_tag_id');
            $table->foreign('user_tag_id')->references('tag_name')->on('tag');

            $table->string('user_email_id');
            $table->foreign('user_email_id')->references('email')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tag_user');
    }
}

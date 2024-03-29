<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag', function (Blueprint $table) {
            $table->BigIncrements('id_tag');
            $table->string('tag_name')->index();
            
        });

        Schema::table('tag', function(Blueprint $table){
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
        Schema::dropIfExists('tag');
    }
}


<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->BigIncrements('id_role_user');
            $table->timestamps();
        });
        Schema::table('role_user', function (Blueprint $table){
            $table->string('user_email_id');
            $table->foreign('user_email_id')->references('email')->on('user');

            $table->string('rolecode_id');
            $table->string('rolecode_id')->references('role_code')->on('role');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_user');
    }
}

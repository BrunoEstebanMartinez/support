<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partner', function (Blueprint $table) {
            $table->BigIncrements('id_partnerf');
            $table->string('ref_partners_red')->index();
            $table->timestamps();
        });
        Schema::table('partner', function (Blueprint $table){
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
        Schema::dropIfExists('partner');
    }
}
